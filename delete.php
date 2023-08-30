<?php

require_once 'include/boot.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete</title>
    <meta charset="utf-8" />
</head>
<body>

<?php

// Check POST and create SQL query and delete user
if (isset($_POST["id"])) {
    echo 'ISSET OK';

    try {
        $sql = "DELETE FROM users WHERE id = :userid";
        $stmt = pdo()->prepare($sql);
        $stmt->bindValue(":userid", $_POST["id"]);
        $stmt->execute();
        header("Location: updateprofile.php");
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}

?>
</body>
</html>