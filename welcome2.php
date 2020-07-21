<html>
<body>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "login_php";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $email = $_POST['email'];
  $passwod = $_POST['passwod'];

  $sql = "SELECT email, password FROM person WHERE email='$email' AND password='$passwod'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "You are Welcome";
} else {
    echo "0 results";
}
$conn->close();

  ?>

</body>
</html>
