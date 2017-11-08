<?php
session_start();

$wrong = false;

if(isset($_POST["submit"])){
    if($_POST["username"] == "admin" && $_POST["password"] == "admin"){
        $_SESSION["loggedin"] = true;
        header("Location: /fotobeheer");
    }else{
        $wrong = true;
    }
}


?>

<div class="loginPage">

<div class="loginContent">
    <form action="" method="post">
        <div class="contentTitle"><i class="material-icons">lock</i> Login voordat je verder gaat</div>

        <div class="formItem">
            <input class="input" type="text" placeholder="Username" name="username">
        </div>
        <div class="formItem">
            <input class="input" type="password" placeholder="Password" name="password">
        </div>
        <button type="submit" name="submit" class="button"><i class="material-icons">send</i> Login</button>

        <?php if($wrong): ?>
           <br> <p>Inloggegevens fout, probeer het opnieuw</p>
        <?php endif ?>
</form>
</div>

    </div>
