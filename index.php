<?php
    echo "Hello World, ini belajar petama ku. tolong bantuannya ya"."<br>"; 
    echo "aku masih pemula banget, jadi masih kaku banget, support aku terus ya"."<br>" ;
    $nim = 2255201179;
    $nama = 'putneng';
    $umur = 25 ;
    $nilai = 98.15;
    $status = True ;


    echo " Nim:".$nim."<br>" ;
    echo "Nama :".$nama."<br>"; 
    echo "Umur :".$umur."<br>";
    printf ("nilai: %.3f<br>",$nilai);

    if ($status)
        echo "status : aktif"."<br>";
    else
        echo "Status : Tidak Aktif"."<br>";
    
    
    define ("NAMA", "Putri Nengsi" );
    define ("NILAI", "98.15");

    //NAMA = "Muhammad"; //akan menyebabkan error 
    echo "Nama: " . NAMA ;
    echo "<br> Nilai : " . NILAI ;

?>

