<!DOCTYPE html>
<html lang="en">

<head>
    <link href="bagus.css" rel="stylesheet"
        
    <title>Praktikum 6</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Praktikum 6</h2>
        <div class="row">
            <div class="col-5 mx-auto border p-3 mt-2">
                <h4 class="text-center">Soal 3</h4>
<?php

interface Flyer {
    public function takeoff();
    public function land();
    public function fly();
}

abstract class Vehicle {
    
}

class Animal {
    public function eat (){
        return "jam 10 Koala makan pisang";
    }
}

class Homosapien extends Animal{

}

class Airplane  extends Vehicle implements Flyer {
    public function takeoff(){
        return "Pesawat akan lepas landas dalam 10 menit lagi";
    }
    public function land(){
        return "Terjadi kerusakan, Pesawat akan mendarat secepatnya";
    }
    public function fly(){
        return "Terjad Perubahan jam penerbangan bagi maskapai Garuda Indonesia";
    }
}

Class Bird extends Animal implements Flyer{
    public function takeoff(){
        return "Sayap burung tergigit semut";
    }
    public function land(){
        return "Burung meminum air danau";
    }
    public function fly(){
        return "Burung berkeliling disekitar pohon";
    }
    public function buildNest(){
        return "Cendrawasih membuat sarangnya";
    }
    public function ladyEggs(){
        return "Burung bertelur disarangnya";
    }
}

class Superman extends Homosapien implements Flyer {
    public function takeoff(){
        return "Superman jatuh dari atas gedung";
    }
    public function land(){
        return "Superman menabrak gedung lalu mendarat";
    }
    public function fly(){
        return "Superman menyelamatkan Atung";
    }
    public function leapBuilding(){
        return "Superman menghindari serangan Lex Luthor";
    }
    public function stopBullet(){
        return "Superman hentikan peluru Meghan";
    }

}

$animal = new Animal;
$airplane = new Airplane;
$bird = new Bird;
$superman = new Superman;

echo "Class Animal"."<br>";
echo $animal->eat() . "<br>";
echo "Class Airplane"."<br>";
echo $airplane->takeoff() . "<br>";
echo $airplane->land()."<br>";
echo $airplane->fly()."<br>"."<br>";
echo "Class Birds"."<br>";
echo $bird->takeoff()."<br>";
echo $bird->land()."<br>";
echo $bird->fly()."<br>";
echo $bird->buildNest()."<br>";
echo $bird->ladyEggs()."<br>"."<br>";
echo "Class Superman"."<br>";
echo $superman->takeoff()."<br>";
echo $superman->land()."<br>";
echo $superman->fly()."<br>";
echo $superman->leapBuilding()."<br>";
echo $superman->stopBullet()."<br>";
 ?>
            </div>
        </div>
    </div>
</body>

</html>