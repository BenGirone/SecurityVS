<!DOCTYPE html>
<html>
<head>
    <title>Security Database</title>
	<meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="tableStyle.css" />
</head>
<body>
    <form action="sg_edit.php" method="post">
        <table>
            <tr>
                <td><input type="text" name="sg_editor" value="Enter an ID" /></td>
                <td><input type="submit" name="sg_updater" value="Update" /></td>
                <td><input type="submit" name="sg_deleter" value="Delete" /></td>
            </tr>
        </table>
    </form>

    <?php
            $username="ben";
            $password="BenGirone1997!";
            $database="SecuritySystem";
            $mysqli = new mysqli("127.0.0.1", $username, $password, $database);
            
            if ($mysqli->connect_errno) {
                echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            
            $query = "SELECT * FROM security_guard";
            $result = $mysqli->query($query);
            $num = $result->num_rows;
            
            echo('<table>');
            echo ('<tr id="header">' . '<td>' . 'ID' . '</td>' . '<td>' . 'Last Name' . '</td>' . '<td>' . 'First Name' . '</td>');
            while ($row = $result->fetch_row())
            {
                $id = $row[0];
                $LastName = $row[1];
                $FirstName = $row[2];
                
                echo ('<tr>' . '<td>' . $id . '</td>' . '<td>' . $LastName . '</td>' . '<td>' . $FirstName . '</td>');
            }
            echo('</table>');

            $mysqli->close();
    ?>
</body>
</html>
