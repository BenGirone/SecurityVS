<!DOCTYPE html>
<html>
<head>
    <title></title>
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

        $id = mysqli_real_escape_string($mysqli, $_POST['sg_id']);

        $query = "SELECT * FROM security_guard WHERE sg_id='$id'";
        $result = $mysqli->query($query);
        $num = $result->num_rows;
        
        //check if record exists
        if ($num > 0)
        {
            //check whether to delete or update record
            if (isset($_POST['sg_updater'])) {
                //update the record
            } else if (isset($_POST['sg_deleter'])) {
                //delete the record
                $query = "DELETE FROM security_guard WHERE sg_id='$id'";
                $result = $mysqli->query($query);

                echo  "<script type='text/javascript'>";
                echo "window.close();";
                echo "</script>";


            } else {
                //no button pressed
            }
        }
        else
        {

        }

        $mysqli->close();
    ?>
</body>
</html>
