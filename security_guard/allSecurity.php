<!DOCTYPE html>
<html>
<head>
    <title>Security Database</title>
	<meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../tableStyle.css" />
    <link rel="stylesheet" type="text/css" href="../formStyle.css" />
</head>
<body>
    <div id="formDiv">
        
        <div class="add">
            <form>
                    <br /> <br />
                <span>  First Name: </span>
                <input type="text" name="FirstName" />
                    <br /> <br />
                <span>  Last Name: </span>
                <input type="text" name="LastName" />
                    <br /> <br />
                <input type="submit" name="submit" value="Submit"/>
                    <br /> <br />
            </form>
        </div>
        
        <div class="delete">
            <form>
                    <br /> <br />
                <span>  ID: </span>
                <input type="text" name="ID" />
                    <br /> <br />
                <input type="submit" name="submit" value="Delete"/>
                    <br /> <br />
            </form>
        </div>

        <div class="update">
            <form>
                    <br /> <br />
                <span>  ID: </span>
                <input type="text" name="ID" />
                    <br /> <br />
                <span>  First Name: </span>
                <input type="text" name="FirstName" />
                    <br /> <br />
                <span>  Last Name: </span>
                <input type="text" name="LastName" />
                    <br /> <br />
                <input type="submit" name="submit" value="Update"/>
            </form>
        </div>
    </div>
    
    <?php
            $username="ben";
            $password="BenGirone1997!";
            $database="SecuritySystem";
            $mysqli = new mysqli("127.0.0.1", $username, $password, $database);
            
            if ($mysqli->connect_errno) 
            {
                echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            
            $query = "SELECT * FROM security_guard";
            $result = $mysqli->query($query);
            $num = $result->num_rows;
            
            echo('<table id="bmgTable">');
            echo ('<tr class="header">' . '<td>' . 'ID' . '</td>' . '<td>' . 'Last Name' . '</td>' . '<td>' . 'First Name' . '</td>');
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
