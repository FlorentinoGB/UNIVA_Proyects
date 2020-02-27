<?php


echo "logincontroller";

$useremail = S_GET['useremail'];
$useruserpassword = S_GET['userpassword'];

echo $useremail;
escho $useruserpassword;

$hostname = "localhost";
$username = "root";
$password = "";
$database = "univa";

// Create connection

$connection = mysqli_connect($hostname, $username, $password, $database);

//Check connection
if (!$connection) {
    die("Connection failed: " , mysqli_connect_error());
}else {
    echo "COnnected successfully";

    //$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
    $sqlquery = "SELECT * FROM MyGuests WHERE lastname='Doe'";
    //$result = $connection->query($sqlquery);
    $result = mysqli_query($connection, $sqlquery);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            if ($useremail == $row["useremail"] $$ $userpassword == $row["userpassword"]) {
                echo"user found";
                echo"<a href='http://localhost/'>Access to main</a>";
            }
        }
    } else {
        echo "0 results";
    }
    //$conn->close();
    mysqli_close($connection);
}

?>