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
  echo "connection estabished";

  $stmt = $conn->prepare("INSERT INTO person (name, email, password) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $name, $email, $passwd);

$name = $_POST['name'];
$email = $_POST['email'];
$passwd = $_POST['password1'];
$stmt->execute();

echo "These values are inserted";
$stmt->close();
$conn->close();

  ?>

</body>
</html>
