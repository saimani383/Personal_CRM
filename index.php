<?php
include 'db.php';

$total = mysqli_query($conn,"SELECT COUNT(*) AS total FROM contacts");

$data = mysqli_fetch_assoc($total);
?>
<!DOCTYPE html>
<html>
<head>
<title>Personal CRM Dashboard</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<nav>

<a href="index.php">Dashboard</a>

<a href="add_contact.php">Add Contact</a>

<a href="view.php">View Contacts</a>

</nav>

<div class="container">

<h1>Personal CRM Dashboard</h1>

<div class="cards">

<div class="card">

<h2>Total Contacts</h2>

<h1><?php echo $data['total']; ?></h1>

</div>

<div class="card">

<h2>Add Contact</h2>

<p>Add new contact details</p>

<br>

<a href="add_contact.php"
style="color:white;">
Open
</a>

</div>

<div class="card">

<h2>Manage Contacts</h2>

<p>Edit, Delete and Search Contacts</p>

<br>

<a href="view.php"
style="color:white;">
Open
</a>

</div>

</div>

<footer>

© 2026 Personal CRM System

</footer>

</body>
</html>