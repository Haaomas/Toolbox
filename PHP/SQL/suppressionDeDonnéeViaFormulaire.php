<?php
$servername = "localhost";
$username = "root";
$password = "test2";
$dbname = "mywebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, email FROM users";
$result = $conn->query($sql);

?>

<table width="300" border="1" cellspacing="1" cellpadding="1">

    <?php
    if ($result->num_rows > 0) { //num_rows détermine le nombre de ligne du tableau choisi de la BDD
        // output data of each row
        while ($row = $result->fetch_assoc()) {
    ?>

            <tr>
                <td>ID</td>
                <td><?php echo $row["id"]; ?></td>
                <td><a href="deluser.php?id=<?php echo $row["id"] ?>">Delete</a></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><?php echo $row["firstname"]; ?></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><?php echo $row["lastname"]; ?></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $row["email"]; ?></td>
                <td>&nbsp;</td>
            </tr>

        <?php
        }
        ?>
</table>
<?php
    } else {
        echo "0 results";
    }


    $conn->close();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "test2";
$dbname = "mywebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET["id"];

// sql to delete a record
$sql = "DELETE FROM users WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>