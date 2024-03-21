<?php
    require_once 'class_kasus.php';

    //object
    $ferarri = new Ferarri('Schumacer', 'Jerman', 7);
    $mereceds = new Mercedes('Hamilton', 'Inggris', 7);
    $redbull = new Redbull('Verstappen', 'Belanda', 3);

    //echo
    echo "Info Ferarri:<br>";
    $ferarri->getInfoFerarri();
    echo "<br>";

    echo "Info Mercedes:<br>";
    $mereceds->getInfoMercedes();
    echo "<br>";
    
    echo "Info Red Bull:<br>";
    $redbull->getInfoRedbull();

?>