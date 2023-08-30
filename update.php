<?php

require_once 'include/boot.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
    <meta charset="utf-8" />
</head>
<body>
<?php
// Check GET, create SQL query and get user id
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{
    $userid = $_GET["id"];
    $sql = "SELECT * FROM users WHERE id = :userid";
    $stmt = pdo()->prepare($sql);
    $stmt->bindValue(":userid", $userid);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        foreach ($stmt as $row) {
            $first_name = $row["first_name"];
            $last_name = $row["last_name"];
            $email = $row['email'];
            $company = $row['company'];
            $position = $row['position'];
            $phone_1 = $row['phone_1'];
            $phone_2 = $row['phone_2'];
            $phone_3 = $row['phone_3'];

        }
//        Create form and print on page
        echo "<h3>Update users data</h3>
                <form method='post'>
                    <input type='hidden' name='id' value='$userid' />
                    <p>first_name:
                    <input type='text' name='first_name' value='$first_name' /></p>
                    <p>last_name:
                    <input type='text' name='last_name' value='$last_name' /></p>
                     <p>email:
                    <input type='text' name='email' value='$email' /></p>
                     <p>company:
                    <input type='text' name='company' value='$company' /></p>
                     <p>position:
                    <input type='text' name='position' value='$position' /></p>
                     <p>phone_1:
                    <input type='text' name='phone_1' value='$phone_1' /></p>
                     <p>phone_2:
                    <input type='text' name='phone_2' value='$phone_2' /></p>
                     <p>phone_3:
                    <input type='text' name='phone_3' value='$phone_3' /></p>
                    
                    <input type='submit' value='Сохранить'>
                    <button class='back' type='button'><a class='back_ref' href='start.php'>To main menu</a></button>
                    
            </form>";
    }

    else {
        echo "<div>Пользователь не найден</div>";
    }
}
// check initialisation and if Ok , create SQL query and update data
elseif ( isset($_POST["first_name"]) && isset($_POST["last_name"])
         && isset($_POST["email"]) && isset($_POST["company"])
        && isset($_POST["position"]) && isset($_POST["phone_1"])
        && isset($_POST["phone_2"]) && isset($_POST["phone_3"]) )
    {

    $sql = "UPDATE users SET first_name = :first_name, last_name = :last_name, email = :email, company = :company, position = :position,  phone_1 = :phone_1, phone_2 = :phone_2, phone_3 = :phone_3 WHERE id = :userid";
    $stmt = pdo()->prepare($sql);
    $stmt->bindValue(":userid", $_POST["id"]);
    $stmt->bindValue(':first_name',$_POST["first_name"]);
    $stmt->bindValue(':last_name',$_POST["last_name"]);
    $stmt->bindValue(':email',$_POST["email"]);
    $stmt->bindValue(':company',$_POST["company"]);
    $stmt->bindValue(':position',$_POST["position"]);
    $stmt->bindValue(':phone_1',$_POST["phone_1"]);
    $stmt->bindValue(':phone_2',$_POST["phone_2"]);
    $stmt->bindValue(':phone_3',$_POST["phone_3"]);

    $stmt->execute();

    if($result = pdo()->prepare($sql)){
        header("Location: updateprofile.php");
    }
    else{
        echo "Error: " . pdo()->errorCode();
    }
}

?>
</body>
</html>