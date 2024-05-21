<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headchef Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <script defer src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script defer src="assets/js/main.js"></script>
</head>

<body style="text-align: center; align-items: center; background-color:#2980b9;"">
   
    <section class=" dashboard" style="text-align: center; align-items: center;">
    <div style="height: 400px;
         width: 600px;
          background-color: rgb(255, 255, 255);
           padding: 20px; box-shadow: 5px, 5px, 5px;
           border-radius: 10px;
           margin-left: 300px;
           margin-top: 100px;">
        <h1 style="font-size: 40px;">Presentation Dashboard</h1>
        <i class="bi bi-send-exclamation-fill">
            <p style="font-size: 20px;">This page is for presentation purposes only</p>
        </i>
        <a href="index.php">
            <input type="submit" class="btn" value="Open Customer View" style="margin-top: 20px;">
            <p style="font-size: 15px;">This is the view the customer will see!</p>
        </a>
        
        <a href="manager_dashboard.php">
            <input type="submit" class="btn" value="Open Company View" style="margin-top: 40px;">
            <p style="font-size: 15px;">This is the view the company will see ie: chefs and manager!</p>
        </a>
    </div>
    </section>
</body>

</html>