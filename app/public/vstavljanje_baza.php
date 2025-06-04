<?php
require 'povezava_na_bazo.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['ZakljuciNakup'])){
        $email = $_POST["email"];
        $ime = $_POST["ime"];
        $priimek = $_POST["priimek"];
        $naziv_podjetja = $_POST["naziv_podjetja"];
        $ddv = $_POST["ddv"];
        $naslov = $_POST["naslov"];
        $kraj = $_POST["kraj"];
        $postna_stevilka = $_POST["postna_stevilka"];
        $telefonska_stevilka = $_POST["telefonska_stevilka"];      

        $queryPosta = $conn->prepare("SELECT id_posta FROM posta WHERE st_posta='$postna_stevilka';");
        $queryPosta->execute();
        $queryPosta = $queryPosta->fetch(PDO::FETCH_ASSOC);
        $queryPosta = $queryPosta['id_posta'];

        

        $queryNarocnik = "INSERT INTO narocnik(email, ime, priimek, naziv_podjetja, ddv, naslov, postna_stevilka, kraj, telefon)
        VALUES('$email', '$ime', '$priimek','$naziv_podjetja','$ddv','$naslov',$queryPosta,'$kraj','$telefonska_stevilka')";
        $conn->exec($queryNarocnik);

        $conn=null;

    }
    

}
?>