<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "dinda" && $password == "123"){
    echo "Anjay berhasil, congratss haha";
} else {
    echo "Sorry ges gagal, coba lagi";
}