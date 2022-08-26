<?php


$temperaturos = [];
$didziausiaTemp1 = "";
$didziausiaTemp2 = "";
$maziausiaTemp1 = "";
$maziausiaTemp2 = "";
$vidurkis = "";
$visoNuoskaitu = "";

if (isset($_POST['temperatura'])) {
    $temperaturos = explode(',', $_POST['temperatura']);

    $suma = 0;
    foreach ($temperaturos as $temp) {
        $suma += $temp;
    };

    $vidurkis = $suma / count($temperaturos);
    $visoNuoskaitu = count($temperaturos);


    sort($temperaturos);
    $didziausiaTemp1 = $temperaturos[sizeof($temperaturos) - 1];
    $didziausiaTemp2 = $temperaturos[sizeof($temperaturos) - 2];
    $maziausiaTemp1 = $temperaturos[0];
    $maziausiaTemp2 = $temperaturos[1];
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatu nuoskaitos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>



    <div class="row">
        <div class="mx-auto mt-5 col-5 p-5">
            <div class="card p-5 text-center">
                <div class="card-body">
                    <h5 class="card-title">Įvesti temperatūrų nuoskaitas:</h5>
                    <p class="card-text">
                    <form method="POST" action="">

                        <input class="mt-3" type="text" name="temperatura"><br>
                        <button class="button mt-3">Išsiųsti</button>
                    </form>
                    </p>

                </div>
            </div>
        </div>
        <div class="col-5 mx-auto mt-5 p-5">
            <div class="card p-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Rezultatai:</h5>
                    <p class="card-text mt-2">
                    <div>
                        <?php
                        echo "Vidutinė temperatūra: $vidurkis." . " <br>" .
                            "Viso nuoskaitų: $visoNuoskaitu." . " <br>" .
                            "Dvi didžiausios temperatūros: $didziausiaTemp1, $didziausiaTemp2." . " <br>" .
                            "Dvi mažiausios temperatūros: $maziausiaTemp1, $maziausiaTemp2.";
                        ?>
                    </div>
                    </p>

                </div>
            </div>
        </div>
    </div>






</body>

</html>