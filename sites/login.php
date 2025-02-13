<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style/signup.css">
</head>
<body id="body" background="../source/signup_white_background.webp">
    <section id="signup-container">
        <div id="top">
            <h1 id="signup-text">LOGIN</h1>
            <a id="logo" href="../index.html"><img src="../source/GradeLens_LOGO_transparent-black-var2.webp" alt="Logo" width="50px" height="50px"></a>
        </div>
        <div id="top-seperator"></div>

        <p id="infotext">To use GradeLens™ and all it functions properly you have to sign up or log in.</p>
        <form id="credentials-container" method="post" action="">
            <label for="email-input">Email</label>
            <input type="email" id="email-input" name="email-input">

            <label for="password-input">Password</label>
            <input type="password" id="password-input" name="password-input">

            <div id="top-seperator"></div>

            <button type="submit" id="submit-button">Submit</button>
        </form>
        <section id="bottom">
            <label id="redstar">*</label><label id="tos-text">Please be aware that GradeLens™ will store and collect the information that you put in. It will also process given data to store it quick and efficiently in our database. However we are currently not selling that data to advertisers</label>
        </section>
    </section>

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gradelens";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Check if the form was submitted
    $email = $_POST["email-input"];
    $password = $_POST["password-input"];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: overview.php");
    } else {
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            exit();
        } else {
            echo "Error: ". $sql. "<br>". $conn->error;
        }
    }
}

$conn->close();?>
</body>
</html>