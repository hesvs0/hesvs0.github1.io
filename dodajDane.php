<?php
$host='localhost';
$user='root';
$pass='';
$db='ogloszenia';

$conn=mysqli_connect($host,$user,$pass,$db);

if(!$conn)
{
    echo 'cos jest nie tak';
}
else
{
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $telefon=$_POST['telefon'];
    $email=$_POST['email'];

    $sql='INSERT INTO uzytkownik
     VALUES("","'.$imie.'","'.$nazwisko.'","'.$telefon.'","'.$email.'")';
     echo $sql;
     mysqli_query($conn,$sql);
     mysqli_close($conn);
}
?>