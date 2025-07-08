<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>User Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        form input, form button {
            padding: 5px;
            margin-right: 5px;
        }
        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #000;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Form to insert data -->
<form method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="number" name="age" placeholder="Age" required>
    <button type="submit" name="submit">Add</button>
</form>

<?php
// إضافة البيانات
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $conn->query("INSERT INTO user (name, age) VALUES ('$name', $age)");
}

// عرض البيانات
$result = $conn->query("SELECT * FROM user");

echo "<table>
<tr><th>Name</th><th>Age</th><th>Status</th><th>Toggle</th></tr>";

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status = $row['status'] ? 'ON' : 'OFF';
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['age']}</td>
                <td id='status-{$row['id']}'>$status</td>
                <td><button onclick='toggleStatus({$row['id']})'>Toggle</button></td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No records found</td></tr>";
}

echo "</table>";
?>

<script src="script.js"></script>

</body>
</html>
