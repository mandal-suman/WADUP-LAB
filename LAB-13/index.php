<?php
$conn = require_once __DIR__ . '/db.php';

$sql = "SELECT * FROM user_management";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Management</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
            margin:40px;
        }

        h2{
            text-align:center;
        }

        table{
            width:70%;
            margin:auto;
            border-collapse:collapse;
            background:#fff;
        }

        th,td{
            border:1px solid #ccc;
            padding:10px;
            text-align:center;
        }

        th{
            background:#333;
            color:#fff;
        }

        a{
            text-decoration:none;
            padding:6px 10px;
            color:white;
            border-radius:4px;
            font-size:14px;
        }

        .edit{
            background:green;
        }

        .delete{
            background:red;
        }
    </style>

</head>

<body>

<h2>User Management System</h2>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Role</th>
    <th>Action</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['role']; ?></td>

<td>
    <a class="edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

    <a class="delete"
       href="delete.php?id=<?php echo $row['id']; ?>"
       onclick="return confirm('Delete this record?');">
       Delete
    </a>
</td>

</tr>

<?php
}
?>

</table>

</body>
</html>