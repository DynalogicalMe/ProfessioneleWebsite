<?php
$fotos = array_diff(scandir("public/uploads"), array('.', '..'));

?>

<div class="contentTitle"><i class="material-icons">photo_camera</i> Foto's</div>
De laatste foto's van Mondriaan Hogeschool<br><br>

<?php foreach($fotos as $foto): ?>

    <a href="public/uploads/<?=$foto?>"><div style="background-image: url('public/uploads/<?=$foto?>'" class="foto"></div></a>

<?php endforeach ?>
