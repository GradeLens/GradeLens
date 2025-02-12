<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beispieldatei</title>
</head>
<body>

        <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "namevonderdb";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Hier dann SQL-Abfragen wie folgt:
                $sql = "SELECT * FROM tabellenname"; 

                $conn->close();
        ?>

</body>
</html>