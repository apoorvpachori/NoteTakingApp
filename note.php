<?php
    include_once 'dbc.php';

    $note = $_POST['note'];

    $sql = "INSERT INTO example.notes (notes) 
    VALUES ('$note');";
    mysqli_query($conn, $sql);

    $sql = "SELECT * FROM example.notes;";
    $result = mysqli_query($conn,$sql);
    $data = array();

    while($row = mysqli_fetch_assoc($result))
    {
        $data[] = $row;
        echo "hi";
    }
    header("Location: ../index.php");
