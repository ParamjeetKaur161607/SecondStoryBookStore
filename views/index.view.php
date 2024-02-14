<?php include 'partials/header.php';?>

<h1>home page</h1>
<?php
$data=$database->selectALL('books');
// echo "<pre>";
// var_dump($data);
// echo "</pre>";

?>
<?php include 'partials/footer.php';?>
