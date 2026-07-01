<?php
include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM contacts WHERE id=$id");

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>

<title>Edit Contact</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<nav>

<a href="index.php">Dashboard</a>

<a href="add_contact.php">Add Contact</a>

<a href="view.php">View Contacts</a>

</nav>

<div class="container">

<h2>Edit Contact</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id"
value="<?php echo $row['id']; ?>">

<input type="text"
name="name"
value="<?php echo $row['name']; ?>"
required>

<input type="email"
name="email"
value="<?php echo $row['email']; ?>">

<input type="text"
name="phone"
value="<?php echo $row['phone']; ?>">

<input type="text"
name="company"
value="<?php echo $row['company']; ?>">

<button type="submit">

Update Contact

</button>

</form>

</div>

<footer>

© 2026 Personal CRM System

</footer>

</body>

</html>