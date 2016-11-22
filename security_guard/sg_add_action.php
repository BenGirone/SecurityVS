<!DOCTYPE html>
<html>
<head>
    <title>Security Database</title>
	<meta charset="utf-8" />
</head>
<body>
    <?php
            $username="ben";
            $password="BenGirone1997!";
            $database="SecuritySystem";
            $mysqli = new mysqli("127.0.0.1", $username, $password, $database);
            
            if ($mysqli->connect_errno) 
            {
                echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            
            $FirstName = mysqli_real_escape_string($mysqli, $_POST['FirstName']);
            $LastName = mysqli_real_escape_string($mysqli, $_POST['LastName']);

            if(empty($FirstName) || empty($LastName))
            {    
                echo '<script type="text/javascript">';
                echo 'alert("A Required Field(s) Is Empty")';
                echo '</script>';
            }
            else
            {
                $mysqli->query("INSERT INTO security_guard (LastName, FirstName) VALUES ('$LastName', '$FirstName')");
            }

            $mysqli->close();

            echo  "<script type='text/javascript'>";
            echo "window.close();";
            echo "</script>";
    ?>
</body>
</html>
