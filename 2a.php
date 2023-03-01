<?php
$nama_depan = "Mustika";
$nama_belakang= "Weni";

 for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0 ) {
    echo  "$nama_depan  $nama_belakang <br>";
    } elseif ($i % 5 ==0) {
        echo "$nama_belakang .<br>";
    } elseif ($i % 3 == 0) {
        echo "$nama_depan . <br>";
    } else {
        echo $i . '<br>';
}
}

?>