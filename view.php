<?php
include 'db.php';

if(isset($_GET['search']))
{
    $search = $_GET['search'];

    $result = mysqli_query($conn,"SELECT * FROM contacts
    WHERE name LIKE '%$search%'
    OR email LIKE '%$search%'
    OR phone LIKE '%$search%'
    OR company LIKE '%$search%'");
}
else
{
    $result = mysqli_query($conn,"SELECT * FROM contacts");
}

$count = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>

<title>View Contacts</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<nav>

<a href="index.php">Dashboard</a>

<a href="add_contact.php">Add Contact</a>

<a href="view.php">View Contacts</a>

</nav>

<div class="container">

<h2>Contact Management</h2>

<h3>Total Contacts : <?php echo $count; ?></h3>

<form method="GET">

<input type="text"
name="search"
placeholder="Search by Name, Email, Phone or Company">

<button type="submit">Search</button>

</form>

<br>

<table>

<tr>

<th>S.No</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Company</th>
<th>Actions</th>

</tr>

<?php

$sn = 1;

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $sn++; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td><?php echo $row['company']; ?></td>

<td>

<a class="edit"
href="edit.php?id=<?php echo $row['id']; ?>">

Edit

</a>

&nbsp;

<a class="delete"
onclick="return confirm('Are you sure you want to delete this contact?');"
href="delete.php?id=<?php echo $row['id']; ?>">

Delete

</a>

</td>

</tr>

<?php

}

?>

</table>

</div>

<footer>

© 2026 Personal CRM System

</footer>

</body>

</html>