<?php

if(isset($_GET["i"])){

    if (file_exists("../../public/uploads/".$_GET["i"])) {
        unlink("../../public/uploads/".$_GET["i"]);
    }
}
header("Location: /fotobeheer");

?>