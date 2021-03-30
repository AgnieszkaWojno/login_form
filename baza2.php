<!Doctype html>
<html lang="pl-PL">

<head>
    <meta charset="utf-8">
    <title> Baza księgarnia</title>
    <style>
        table{
            border: solid 1px grey;
            margin: auto;
            margin-top: 100px;
        }
        td, th{
            padding:15px; 
        }
        tr:first-child{
            background-color: rgb(110,175,220);
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th> Id klienta </th>
            <th> Imię </th>
            <th> Nazwisko </th>
            <th> Kod pocztowy </th>
            <th> Miejscowość </th>
            <th> Ulica </th>
            <th> Nr domu </th>
            <th> PESEL </th>
            <th> Telefon </th>
            <th> email </th>
        </tr>


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
        // echo "połączono";
         //$zapytanie_insert = 'INSERT into klient VALUES (Null, "Anna", "Polak", "15-123", "Białystok", "Polna","2","97040612345","555555444","anna.polak@domena.pl");';
         //$wstaw = mysqli_query($db,$zapytanie_insert);
         $zapytanie = mysqli_query($db, 'SELECT * FROM Klient');
            if(!$zapytanie){
                mysqli_close();
                echo "Błąd zapytania <br>";
                exit;
        }
        

    while($wiersz = mysqli_fetch_row($zapytanie)){  
        echo "<tr>  "; 
        foreach($wiersz as $pole){
            echo "<td>"; echo $pole; echo "</td>";
        }
           echo "</tr>";
    }



        mysqli_close($db);
    }
    
///szybkie wypisywanie tablicy

?>
</table>
</body>
</html>
