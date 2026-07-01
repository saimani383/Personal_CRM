<!DOCTYPE html>
<html>
<head>
    <title>Add Contact</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav>
    <a href="index.php">Dashboard</a>
    <a href="add_contact.php">Add Contact</a>
    <a href="view.php">View Contacts</a>
</nav>

<div class="container">

<h2>Add New Contact</h2>

<form action="add.php" method="POST">

    <input type="text" name="name" placeholder="Enter Full Name" required>

    <input type="email" name="email" placeholder="Enter Email Address">

    <input type="text" name="phone" placeholder="Enter Phone Number">

    <input type="text" name="company" placeholder="Enter Company Name">

    <button type="submit">Save Contact</button>

</form>

</div>

<footer>
    © 2026 Personal CRM System
</footer>

</body>
</html>