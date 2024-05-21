<?php
include 'components/connect2.php';
session_start();

if (!isset($_SESSION['user_id'])) {
	header("Location: login_form.php");
}

include 'components/connect.php';


if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    setcookie('user_id', create_unique_id(), time() + 60 * 60 * 24 * 30);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Orders</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'components/admin_header.php'; ?>

    <section class="orders">
        <h1 class="heading">All Orders</h1>

        <div class="box-container">
            <?php
            // Fetch distinct users
            $select_users = $conn->prepare("SELECT DISTINCT name, email FROM `orders`");
            $select_users->execute();

            // Loop through each user
            while ($user = $select_users->fetch(PDO::FETCH_ASSOC)) {
                $user_name = $user['name'];
                $user_email = $user['email'];
            ?>

                <div class="user-section">
                    <h2>User: <?= $user_name; ?></h2>
                    <p>Email: <?= $user_email; ?></p>

                    <?php
                    // Fetch orders for the current user
                    $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE name = ? AND email = ? ORDER BY date DESC");
                    $select_orders->execute([$user_name, $user_email]);

                    // Loop through each order of the current user
                    while ($fetch_order = $select_orders->fetch(PDO::FETCH_ASSOC)) {
                        $select_product = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
                        $select_product->execute([$fetch_order['product_id']]);
                        $fetch_product = $select_product->fetch(PDO::FETCH_ASSOC);
                    ?>
                        <div class="box" <?php if ($fetch_order['status'] == 'canceled') {
                                                echo 'style="border:.2rem solid red";';
                                            } ?>>
                            <a href="view_order.php?get_id=<?= $fetch_order['id']; ?>">
                                <p class="date"><i class="fa fa-calendar"></i><span><?= $fetch_order['date']; ?></span></p>
                                <img src="uploaded_files/<?= $fetch_product['image']; ?>" class="image" alt="">
                                <h3 class="name"><?= $fetch_product['name']; ?></h3>
                                <p class="price"><i class="fas fa-indian-rupee-sign"></i> <?= $fetch_order['price']; ?> x <?= $fetch_order['qty']; ?></p>
                                <p class="status" style="color:<?php
                                                                if ($fetch_order['status'] == 'delivered') {
                                                                    echo 'green';
                                                                } elseif ($fetch_order['status'] == 'canceled') {
                                                                    echo 'red';
                                                                } else {
                                                                    echo 'orange';
                                                                }; ?>"><?= $fetch_order['status']; ?></p>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>

            <?php
            }
            ?>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>

</html>