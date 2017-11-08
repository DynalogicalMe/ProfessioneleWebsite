<?php

session_start();
if(!$_SESSION["loggedin"]){
    header("Location: /login");
    die();
}

if(!empty($_FILES['uploaded_file']))
{
    $path = "public/uploads/";
    $path = $path . mt_rand(0,99999). basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {

    } else{
        echo "Er is iets fout gegaan tijdens het uploaden. Probeer het opnieuw";
    }
}

$fotos = array_diff(scandir("public/uploads"), array('.', '..'));

?>

<div class="contentTitle"><i class="material-icons">photo_camera</i> Foto toevoegen</div>
Selecteer een foto (png, jpg, jpeg) om te uploaden<br><br>

<form action="" method="post" enctype="multipart/form-data">
    <input type="submit" name="submitFile" style="display:none" id="submit">

    <label class="fileContainer">
        <i class="material-icons">cloud_upload</i> Select photo
        <input type="file" name="uploaded_file" onchange="document.getElementById('submit').click()">
    </label>
</form>

<?php foreach($fotos as $foto): ?>

    <a href="public/uploads/<?=$foto?>">
        <div style="background-image: url('public/uploads/<?=$foto?>'" class="foto">
            <a href="resources/view/delete.php?i=<?=$foto?>">
             <div class="fotoDelete"><i class="material-icons">delete</i> </div>
            </a>
        </div>
    </a>

<?php endforeach ?>
