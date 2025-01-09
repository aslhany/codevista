<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "UPDATE users SET username = ?, password = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $username, $password, $id);
    $stmt->execute();

    $success = "User information updated.";
}

$sql_users = "SELECT * FROM users";
$result_users = $conn->query($sql_users);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <form method="POST">
        <select name="id" required>
            <?php while ($row = $result_users->fetch_assoc()): ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['username']; ?></option>
            <?php endwhile; ?>
        </select>
        <input type="text" name="username" placeholder="New Username" required>
        <input type="password" name="password" placeholder="New Password" required>
        <button type="submit">Update</button>
    </form>
    <?php if (isset($success)) echo "<p>$success</p>"; ?>
</body>
</html>
