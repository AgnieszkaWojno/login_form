<?php
$db = mysqli_connect('localhost','root','','ksiegarnia');
if (mysqli_connect_errno()){
    exit("Błąd połączenia z bazą: ". mysqli_connect_error());
}
else{
    //echo "Połączono";
    $wynik = mysqli_query($db, 'SELECT * FROM Klient');
        if(!$wynik){
           // mysqli_close($db);
            echo "Błąd zapytania <br>";
            exit;
        }
        echo "<pre>";
          print_r($wynik);
        echo "</pre>";
        //////////


    mysqli_close($db);
    }











    // $wiersz = mysqli_fetch_array($zapytanie);
    // echo "<pre>";
    //   print_r($wiersz);
    // echo "</pre>";
    // $wiersz = mysqli_fetch_row($zapytanie);
    // echo "<pre>";
    //   print_r($wiersz);
    // echo "</pre>";



    //mysqli_close($db);
//


while( $wiersz = mysqli_fetch_array($zapytanie)){
    
    echo "<br>imię: ". $wiersz['imie']. "<br>";
    echo "<br>nazwisko: ". $wiersz['nazwisko']. "<br>";
?>

    
</body>
</html>