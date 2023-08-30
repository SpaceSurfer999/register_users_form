<?php

require_once 'include/boot.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>list of users</title>
    <meta charset="utf-8" />

</head>
<body>
<style>
    body {
        font-size: 1.6rem;
        align-content: center;
        justify-content: center;
        font-family: Serif, serif;
        padding: 20px 20px;

    }
</style>

<?php

// Check GET
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}

// Set num of users on page
$size_page = 10;

$offset = ($pageno-1) * $size_page;


// Find quantity users of table in base
$count_sql = "SELECT COUNT(*) FROM users";
$total_rows = pdo()->query($count_sql)->fetch(PDO::FETCH_BOTH)[0];
echo "Total users = ".$total_rows;

//Get data for pagination
$total_pages = ceil($total_rows / $size_page);
$sql = "SELECT * FROM users LIMIT $offset, $size_page";
$stmt = pdo()->query($sql);
$stmt->execute();

// Crate table and print 10 users on one page
$sql = "SELECT * FROM users";
if($result = pdo()->query($sql)){
    echo "<table border='1' ><tr>
                    <th >ID</th><th>First name</th><th>Last name</th><th>Email</th>
                    <th>Company</th><th>Position</th><th>Phone #1</th>
                    <th>Phone #2</th><th>Phone #3</th>

                 </tr>";
    foreach($result as $row){
        while (($row = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["first_name"] . "</td>";
            echo "<td>" . $row["last_name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["company"] . "</td>";
            echo "<td>" . $row["position"] . "</td>";
            echo "<td>" . $row["phone_1"] . "</td>";
            echo "<td>" . $row["phone_2"] . "</td>";
            echo "<td>" . $row["phone_3"] . "</td>";

            echo "<td><form action='update.php?id=' method='get'>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
                        <input type='submit' value='Update'>
                    </form></td>";
            echo "<td><form action='delete.php?id=' method='post'>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
                        <input type='submit' value='Delete'>
                    </form></td>";
            echo "</tr>";
        }
    }
    echo "</table>";
}
?>

<!--Create pagination-->

<style>
    .pagination{
        display: flex;

    }
    .pagbutton{

        padding: 50px;
    }
</style>
<ul class="pagination">

    <li><a class="pagbutton" href="?pageno=1">First page</a></li>
    <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">

        <a class="pagbutton" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev page</a>
    </li>
    <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
        <a class="pagbutton" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next page</a>
    </li>
    <li><a class="pagbutton" href="?pageno=<?php echo $total_pages; ?>">Last page</a></li>
</ul>

<Style type="text/css">
    .back{
        padding: 15px;
        font-weight: bold;
        background: rgba(199, 248, 223, 0.47);

        border-radius:  7px;
        margin: 10px;
    }
    .back_ref{
        color: #030303;
    }
</Style>
<button class="back" type="button"><a class="back_ref" href="start.php">To main menu</a></button>

</body>
</html>
