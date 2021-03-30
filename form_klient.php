<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db_name = 'ksiegarnia';
$db = mysqli_connect($server,$user,$password,$db_name);
  $zapytanie = mysqli_query($db, 'SELECT * FROM Klient WHERE id_klienta = 1');
  if(!$zapytanie){
      mysqli_close();
      echo "Błąd zapytania <br>";
      exit;
}
else{

  $ile = mysqli_affected_rows($db);
  echo "<br>Pobrano: ". $ile. " wierszy <br>";
  $wiersz = mysqli_fetch_row($zapytanie); 
  $imie = $wiersz[1];
  $nazwisko = $wiersz[2];
  mysqli_close($db);
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja klienta - Formularz</title>
</head>
<body>
    <form action="dodaj_klienta.php" method="post">
        <h3 >Rejestracja klienta</h3>
        Nazwisko: <br>
        <input type="text" name="nazwisko" value="<?php echo $nazwisko;?>" size=30> <br>
        Imię: <br>
        <input type="text" name="imie" value="<?php echo $imie;?>" size=30> <br>
        Kod pocztowy: <br>
        <input type="text" name="kod" size=6> <br>
        Miejscowość: <br>
        <input type="text" name="miejscowosc" size=30> <br>
        Ulica: <br>
        <input type="text" name="ulica" size=30> <br>
        Nr domu: <br>
        <input type="text" name="nr_domu" size=7> <br>
        PESEL: <br>
        <input type="text" name="pesel" size=11> <br>
        Nr telefonu: <br>
        <input type="text" name="telefon" size=15> <br>
        Adres email: <br>
        <input type="text" name="email" size=30> <br>
        <br><br>
        <input type="submit" name="wyslij" value="Wyślij" > <br>
        <input type="reset" name="reset" value="Wyczyść" > <br>
    </form>
    
</body>
</html>