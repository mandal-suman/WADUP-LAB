<?php
$conn = require_once __DIR__ . '/db.php';

if (!isset($_GET['id'])) {
    die("Invalid Request");
}

$id = $_GET['id'];

$sql = "SELECT * FROM user_management WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    die("User not found.");
}

$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);

    $update = "UPDATE user_management
               SET
                    name='$name',
                    email='$email',
                    role='$role'
               WHERE id=$id";

    if (mysqli_query($conn, $update)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit User</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border: 1px solid #ccc;
        }

        h2 {
            text-align: center;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        input[type=submit] {
            background: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background: #218838;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }
    </style>

</head>

<body>

    <div class="container">

        <h2>Edit User</h2>

        <form method="post">

            <label>Name</label>
            <input
                type="text"
                name="name"
                value="<?php echo htmlspecialchars($row['name']); ?>"
                required>

            <label>Email</label>
            <input
                type="email"
                name="email"
                value="<?php echo htmlspecialchars($row['email']); ?>"
                required>

            <label>Role</label>
            <select name="role">

                <option value="Admin"
                    <?php if ($row['role'] == "Admin") echo "selected"; ?>>
                    Admin
                </option>

                <option value="User"
                    <?php if ($row['role'] == "User") echo "selected"; ?>>
                    User
                </option>

                <option value="Editor"
                    <?php if ($row['role'] == "Editor") echo "selected"; ?>>
                    Editor
                </option>

                <option value="Manager"
                    <?php if ($row['role'] == "Manager") echo "selected"; ?>>
                    Manager
                </option>

            </select>

            <input type="submit" name="update" value="Update User">

        </form>

        <br>

        <a href="index.php">← Back to User List</a>

    </div>

</body>

</html>