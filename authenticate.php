<?php include "../inc/dbinfo.inc"; ?>
<?php
session_start();
// Change this to your connection info.
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

$database = mysqli_select_db($connection, DB_DATABASE);

/* Ensure that the EMPLOYEES table exists. */
VerifyTable($connection, DB_DATABASE);

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['user_name'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT password FROM userbase WHERE user_name = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['user_name']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

  if ($stmt->num_rows > 0) {
    $stmt->bind_result($uid, $password);
    $stmt->fetch();
    // Account exists, now we verify the password.
    // Note: remember to use password_hash in your registration file to store the hashed passwords.
    if ($_POST['password'] === $password) {
      // Verification success! User has logged-in!
      // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
      session_regenerate_id();
      $_SESSION['loggedin'] = TRUE;
      $_SESSION['name'] = $_POST['user_name'];
      $_SESSION['uid'] = $id;
      echo 'Welcome ' . $_SESSION['name'] . '!';
    } else {
      // Incorrect password
      echo 'Incorrect username and/or password!';
    }
  } else {
    // Incorrect username
    echo 'Incorrect username and/or password!';
  }


	$stmt->close();
}
?>