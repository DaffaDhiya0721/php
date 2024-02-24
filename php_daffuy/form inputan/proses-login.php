<?php
$email = @$_REQUEST['email'];
$password = @$_REQUEST['password'];

if ($email !== 'daffa0721@gmail.com') {
    die("Email tidak terdaftar!");
}

if ($password !== 'basreng089') {
    die("Password salah!");
}
echo "Selamat {$email}, anda berhasil login! :)";
?>