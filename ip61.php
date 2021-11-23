<!-- Nama   : Durotun Nafisah Amalia Ahli -->
<!-- NIM    : 20051397041 -->
<!-- Kelas  : D4 Manajemen Informatika 2020A -->

<?php 
    require_once 'No 1.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link href="bagus.css" rel="stylesheet"
        
    <title>Praktikum 6</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Praktikum 6</h2>
        <div class="row">
            <div class="col-5 mx-auto border p-3 mt-2">
                <h4 class="text-center">Soal 1</h4>
                <?= $truck->getMaxLoad(); ?> <br><br>
                <?= $truck->addBox(3000); ?> <br>
                <?= $truck->addBox(1000); ?> <br>
                <?= $truck->addBox(6000); ?> <br>
                <?= $truck->addBox(8000); ?> <br>
                <?php 
                echo "Butuh Bahan Bakar " . $truck->calcFuelNeeds() . ' Liter'. '<br><br>';
                ?>
                <br>
                <?= $riverBarge->getMaxLoad(); ?> <br><br>
                <?= $riverBarge->addBox(3000); ?> <br>
                <?= $riverBarge->addBox(1000); ?> <br>
                <?= $riverBarge->addBox(6000); ?> <br>
                <?= $riverBarge->addBox(8000); ?> <br>
                <?= $riverBarge->addBox(9000); ?> <br>
                <?php 
                echo "Butuh Bahan Bakar " . $riverBarge->calcFuelNeeds() . ' Liter';
                ?>
            </div>
        </div>
    </div>
</body>

</html>