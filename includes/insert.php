<?php
include 'database_connection.php';

if(count($_FILES["image"]["tmp_name"]) > 0)
{
    for($count = 0; $count < count($_FILES["image"]["tmp_name"]); $count++)
    {
        $image_file = addslashes(file_get_contents($_FILES["image"]["tmp_name"][$count]));
        $query = "INSERT INTO items_images(image) VALUES ('$image_file')";
        $statement = $connect->prepare($query);
        $statement->execute();
    }
}


/*$merk = $_POST['merk'];
$type = $_POST['type'];
$verkocht = $_POST['verkocht'];

// hier komt code die een nieuwe auto toevoegd vanuit het formulier van nieuw.php
$sql =  'INSERT INTO auto (verkocht, merk, type) VALUES (:verkocht, :merk, :type)';
$statement = $db_conn->prepare($sql);
$statement->bindParam(":verkocht", $verkocht);
$statement->bindParam(":merk", $merk);
$statement->bindParam(":type", $type);

$statement->execute();


// Hier komt code om na het verwijderen te redirecten naar overzicht.php
header("Location: overzicht.php/");*/
?>
