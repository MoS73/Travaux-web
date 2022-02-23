<?php
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$titre = $text = "";
$titre_err = $text_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate titre
    if(empty(trim($_POST["titre"]))){
        $titre_err = "Please enter the name of the product.";
    } else {
        $titre = htmlspecialchars($_POST["titre"]);
    }
    
    // Validate text
    if(empty(trim($_POST["text"]))){
        $text_err = "Please enter product description.";     
    } else {
        $text = trim($_POST["text"]);
    }
    
    // Check input errors before inserting in database
    if(empty($titre_err) && empty($text_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO articles (titre, text) VALUES (:titre, :text)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":titre", $param_titre, PDO::PARAM_STR);
            $stmt->bindParam(":text", $param_text, PDO::PARAM_STR);
            
            // Set parameters
            $param_titre = $titre;
            $param_text = $text;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to dashboard page
                header("location: welcome.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            // Close statement
            unset($stmt);
        }
    }
    // Close connection
    unset($pdo);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Procuct</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
        .wrapper{ max-width: 360px; padding: 20px; margin: 12.5% auto;}
    </style>
</head>
<body class="bg-secondary">
    <div class="wrapper border border-success bg-light">
        <h2>Add New Product</h2>
        <p>Please fill this form to create a new product.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Article</label>
                <input type="text" name="titre" class="form-control <?php echo (!empty($titre_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $titre; ?>">
                <span class="invalid-feedback"><?php echo $titre_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="text" class="form-control <?php echo (!empty($text_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $text; ?>">
                <span class="invalid-feedback"><?php echo $text_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Add Product">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
                <a class="btn btn-link ml-2" href="welcome.php">Go back</a>
            </div>
        </form>
    </div>    
</body>
</html>