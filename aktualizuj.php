<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db_name = 'ksiegarnia';
$db = mysqli_connect($server,$user,$password,$db_name);
if (mysqli_connect_errno()){
    exit("Błąd połączenia");
}
else{
     //echo "połączono";
     $imie = $_POST["imie"];
     $nazwisko = $_POST["nazwisko"];
     //////////// - pozostałe pola z formularza
     $aktualny = "UPDATE klient SET nazwisko = '$nazwisko', imie = '$imie' WHERE id_klienta = 1;";
     $zapytanie = mysqli_query($db, $aktualny);
     if (!$zapytanie === true){
         echo "Błąd zapytanie=a! Dane nie zostały zaktualizowane!";
     }
     else {
        echo "Dane zostały zaktualizowane!";
     }
     mysqli_close($db);
}

?>