<header class="header">

   <section class="flex">
      <a href="index.php" class="logo"><i class="fas fa-utensils"></i>Tayamika Catering</a>

      <nav class="navbar">
         <a href="add_menu_item.php">Add menu item</a>
         <a href="view_menu.php">Menu</a>
         <a href="orders.php">my orders</a>
         <?php
            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_items = $count_cart_items->rowCount();
         ?>
         <a href="shopping_cart.php" class="cart-btn">cart<span><?= $total_cart_items; ?></span></a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
   </section>

</header>