<?php

    header('Content-Type:text/html; charset=utf-8');

    $id=$_POST['id'];
    $pw1= $_POST['pw1'];
    $pw2= $_POST['pw2'];
    $name= $_POST['name'];
    $postcode1= $_POST['postcode1'];
    $postcode2= $_POST['postcode2'];
    $email= $_POST['email'];
    $address1= $_POST['addr1'];
    $address2= $_POST['addr2'];
    $phon1= $_POST['num1'];
    $phon2= $_POST['num2'];
    $phon3= $_POST['num3'];

    $postcode= $postcode1 ."-". $postcode2;
    $address= $address1 ." ". $address;
    $phon= $phon1 ."-". $phon2 ."-". $phon3;

    $db=mysqli_connect('localhost','dabee','a1s2d3f4!','dabee');
    mysqli_query($db,"set names utf8");

    $sql= "INSERT INTO member(id, pw1, pw2, name, postcode, email, address, phon) VALUES('$id','$pw1','$pw2','$name','$postcode','$email','$address','$phon')";
    $result = mysqli_query($db,$sql); 

    if($result) echo "insert success";
    else echo "insert fail";

    mysqli_close($db);
?>
