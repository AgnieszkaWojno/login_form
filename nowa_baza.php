<?php
$db = mysqli_connect('localhost','root','');
if (!$db){
    exit("Błąd połączenia z serwerem MySQL.");
}
//$nowa_baza = "CREATE DATABASE moje_kino";

if(mysqli_query($db, $nowa_baza)){
  echo "Baza została utworzona";
}else{
    echo "Błąd! Nie można się połączyć z bazą.";
}
mysqli_close($db);





//$usun = "DROP DATABASE moje_kino";