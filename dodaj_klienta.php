
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
        echo "połączono";

        if(isset($_POST["nazwisko"])){ $nazwisko = $_POST["nazwisko"]; }
        if(isset($_POST["imie"])){ $imie = $_POST["imie"]; }
        if(isset($_POST["kod"])){ $kod = $_POST["kod"]; echo $kod;}
        if(isset($_POST["miejscowosc"])){ $miejscowosc = $_POST["miejscowosc"]; echo $miejscowosc;}
        if(isset($_POST["ulica"])){ $ulica = $_POST["ulica"]; echo $ulica;}
        if(isset($_POST["nr_domu"])){ $nr_domu = $_POST["nr_domu"]; echo $nr_domu;}
        if(isset($_POST["pesel"])){ $pesel = $_POST["pesel"];echo $pesel;}
        if(isset($_POST["telefon"])){ $telefon = $_POST["telefon"]; echo $telefon;}
        if(isset($_POST["email"])){ $email = $_POST["email"]; echo $email;}

         $zapytanie_insert = "INSERT into klient VALUES (Null, '$imie', '$nazwisko', '$kod', '$miejscowosc', '$ulica','$nr_domu','$pesel','$telefon','$email')";
         $wstaw = mysqli_query($db,$zapytanie_insert);
         if(!$wstaw === true){
            echo "<br>Nowy klient nie został dodany do bazy";
         }
         else {
            echo "<br>Dodano klienta<br>";
         }
        // $ile = mysqli_affected_rows($db);
        // echo "dadano: ". $ile. " wierszy";
        //  $zapytanie = mysqli_query($db, 'SELECT * FROM Klient');
        //     if(!$zapytanie){
        //         mysqli_close();
        //         echo "Błąd zapytania <br>";
        //         exit;
        // }
        

    // while($wiersz = mysqli_fetch_row($zapytanie)){  
    //     echo "<tr>  "; 
    //     foreach($wiersz as $pole){
    //         echo "<td>"; echo $pole; echo "</td>";
    //     }
    //        echo "</tr>";
    // }



        mysqli_close($db);
    }
    
///szybkie wypisywanie tablicy

?>

