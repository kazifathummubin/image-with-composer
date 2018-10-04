<?php
include('function/function.php');
session_start();
if(isset($_POST['sub'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email= $_POST['email'];
  $biography= $_POST['biography'];
  $doy = $_POST['doy'];
    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
    }
    
  $photo = $_FILES['photo']['name'];
  $bio_file = $email.".txt";
  $fopen = fopen("biography/".$bio_file,"w");
  fwrite($fopen,$biography);

    try{
        $student = new student;
        $insert_query = "INSERT INTO students (fname,lname,email,biography,doy,gender,photo)VALUES('$fname','$lname','$email','$bio_file','$doy','$gender','$photo')";
        $student->insert($insert_query);
        $_SESSION['msg'] = "<p class='alert alert-danger'>Data not inserted</p>";
    }catch(exception $e){
        $_SESSION['msg'] =  "<p class='alert alert-success'>Data Inserted</p>";
        move_uploaded_file($_FILES['photo']['tmp_name'],'image/'.$_FILES['photo']['name']);
        header('location: view.php');
    }
}