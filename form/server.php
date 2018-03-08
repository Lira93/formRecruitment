<?php

    $name = "";
    $surname = "";
    $email = "";
    $subject = "";
    $star = "";
    $image = "";
    $text = "";
    $msg = "";
    $id = 0;


    $db = mysqli_connect('localhost', 'root', '', 'formdb');

    if(isset($_POST['save'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $star = $_POST['star'];
        $image = $_FILES['image']['name'];
        $text = mysqli_real_escape_string($db, $_POST['text']);
        $target = "dataformdb/".basename($image);

        $query = "INSERT INTO dataformdb (name, email, surname, subject, star, image, text) VALUES ('$name', '$email', '$surname', '$subject', '$star','$image', '$text')";
        mysqli_query($db, $query);
        header('location: index.php');
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
    }
    
    $results = mysqli_query($db, "SELECT * FROM dataformdb");

?> 