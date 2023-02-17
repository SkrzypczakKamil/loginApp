<?php
class owner {
    var $id;
    var $imie;
    var $nazwisko;
    var $mail;
    var $pesel;

    static function all()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "zus";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM `owner`";
        $result = $conn->query($sql);
        while($i = $result->fetch_assoc()){
            echo "Imie:".$i['Imie'] . " " . "Nazwisko:".$i['Nazwisko'] . " " . "Mail:".$i['mail'] . " " . "Pesel:".$i['pesel'] . "<br>";   
        }
    }
    static function cars()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "zus";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM `cars` WHERE `id_owner`=8";
        $result = $conn->query($sql);
        while($b = $result->fetch_assoc()){
            echo "Marka:".$b['mark'] . " " . "Model:".$b['model'] . " " . "NR.rejestracji:".$b['Nr.Rejestracji'] . " " . "Vin:".$b['vin'] . "<br>"; 
             
        }
    }
    static function companies()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "zus";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM `companies` WHERE `id_owner`=8";
        $result = $conn->query($sql);
        while($a = $result->fetch_assoc()){
            echo "Nazwa:".$a['nazwa'] . " " . "Nip:".$a['nip'] . " " . "Adres:".$a['adres'] . " " . "<br>"; 
             
        }
    }
}

class cars {
    var $id;
    var $marka;
    var $model;
    var $nr_rej;
    var $VIN;

    static function all()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "zus";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM `cars`";
        $result = $conn->query($sql);
        while($b = $result->fetch_assoc()){
            echo "Marka:".$b['mark'] . " " . "Model:".$b['model'] . " " . "NR.rejestracji:".$b['Nr.Rejestracji'] . " " . "Vin:".$b['vin'] . "<br>";   
        }
    }
    static function companies()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "zus";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM `companies` WHERE `id`=10 ";
        $result = $conn->query($sql);
        while($a = $result->fetch_assoc()){
            echo "Nazwa:".$a['nazwa'] . " " . "Nip:".$a['nip'] . " " . "Adres:".$a['adres'] . " " . "<br>"; 
             
        }
    }
    static function owner()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "zus";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM `owner` WHERE `id`=8 ";
        $result = $conn->query($sql);
        while($i = $result->fetch_assoc()){
            echo "Imie:".$i['Imie'] . " " . "Nazwisko:".$i['Nazwisko'] . " " . "Mail:".$i['mail'] . " " . "Pesel:".$i['pesel'] . "<br>";   
            
             
        }
    }
}

class companies {
    var $id;
    var $nazwa;
    var $NIP;
    var $adres;

    static function all()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "zus";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM `companies`  ";
        $result = $conn->query($sql);
        while($a = $result->fetch_assoc()){
            echo "Nazwa:".$a['nazwa'] . " " . "Nip:".$a['nip'] . " " . "Adres:".$a['adres'] . " " . "<br>";   
        }
    }
    static function owner()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "zus";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM `owner` WHERE `id`=8; ";
        $result = $conn->query($sql);
        while($i = $result->fetch_assoc()){
            echo "Imie:".$i['Imie'] . " " . "Nazwisko:".$i['Nazwisko'] . " " . "Mail:".$i['mail'] . " " . "Pesel:".$i['pesel'] . "<br>";   
             
        }
    }
    static function cars()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "zus";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM `cars` WHERE `id_owner`=8; ";
        $result = $conn->query($sql);
        while($b = $result->fetch_assoc()){
            echo "Marka:".$b['mark'] . " " . "Model:".$b['model'] . " " . "NR.rejestracji:".$b['Nr.Rejestracji'] . " " . "Vin:".$b['vin'] . "<br>";
             
             
        }
    }
}


owner::all();
echo "<br>";
echo "<br>";
echo "samochodu uzytkownaika";
echo "<br>";
owner::cars();

echo "<br>";
echo "<br>";
echo "firmy uzytkownaika";
echo "<br>";
owner::companies();

echo "<br>";
echo "<br>";


cars::all();
echo "<br>";
echo "firmy samochodu";
echo "<br>";
cars::companies();
echo "<br>";
echo "uzytkownicy samochodu";
echo "<br>";
cars::owner();
echo "<br>";
companies::all();
echo "<br>";
echo "wlasciciele firm";
echo "<br>";
companies::owner();
echo "<br>";
echo "samochody firmy";
echo "<br>";
companies::cars();
echo "<br>";
?>