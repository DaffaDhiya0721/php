<form  method="POST">
    <div>
        <label>Email</label> <br>
        <input type="email" name="email" placeholder="Masukan email">
    </div>
    <div>
        <label>Kata Sandi</label> <br>
        <input type="password" name="password" placeholder="Masukan kata sandi">
    </div>
    <div>
        <button>Login</button>
    </div>
</form>
<?php

$email = @$_POST['email'];
$password = @$_POST['password'];

    if ($email) {
        echo "<strong>Email : </strong> {$email} <br>";
    }

    if ($password) {
        echo "<strong>Kata Sandi : </strong> {$password} <br>";
    }
?>