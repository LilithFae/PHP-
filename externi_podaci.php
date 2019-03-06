<?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = "Test";
        $password = "Test2";
       
        if (empty($_POST['username']) || empty($_POST['password'])) {
          echo "Ovo je obavezno polje!";
        } else if ($_POST['username'] == $username && $_POST['password'] == $password){
          echo 'Uspešno ste ulogovani!';
        } else if ($_POST['username']!==$username || $_POST['password']!==$password){
          echo 'Netačni podaci!';
        }
   }
?>