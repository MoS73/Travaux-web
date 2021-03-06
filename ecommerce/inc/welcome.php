<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body class="bg-secondary">
    <div id="table" class="listing"><?php require __DIR__ . '/table.php'; ?></div>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="item-add.php" class="btn btn-success mr-1 mt-2 mt-md-0">Add New Product</a>
        <a href="reset-password.php" class="btn btn-warning ml-0 ml-md-2 mt-2 mt-md-0">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-0 ml-md-2 mt-2 mt-md-0">Logout</a>
    </p>
</body>
</html>