<?php

$menesiuVardai = array(1 => 'Sausis', 2 => 'Vasaris', 3 => 'Kovas', 4 => 'Balandis', 5 => 'Gegužė', 6 => 'Birželis', 7 => 'Liepa', 8 => 'Rugpjutis', 9 => 'Rugsėjis', 10 => 'Spalis', 11 => 'Lapkritis', 12 => 'Gruodis');

$menesiuDienos = array(1 => 31, 2 => 28, 3 => 31, 4 => 30, 5 => 31, 6 => 30, 7 => 31, 8 => 31, 9 => 30, 10 => 31, 11 => 30, 12 => 31);

$menesiai31 = array();
foreach ($menesiuDienos as $nr => $dsk) {
    if ($dsk == 31) {
        $temp = $menesiuVardai[$nr];
        array_push($menesiai31, $temp);
        $output = implode(", ", $menesiai31);
    }
}


$diena31 = array_count_values($menesiuDienos)[31];

$menesiai30 = array();
foreach ($menesiuDienos as $nr => $dsk) {
    if ($dsk == 30) {
        $temp = $menesiuVardai[$nr];
        array_push($menesiai30, $temp);
        $output2 = implode(", ", $menesiai30);
    }
}

$diena30 = array_count_values($menesiuDienos)[30];

$menesiai28 = array();
foreach ($menesiuDienos as $nr => $dsk) {
    if ($dsk == 28) {
        $temp = $menesiuVardai[$nr];
        array_push($menesiai28, $temp);
        $output3 = implode(", ", $menesiai28);
    }
}

$diena28 = array_count_values($menesiuDienos)[28];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menesiai/ dienos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="atsakymai">

        <div class="rezultatas">
            <?php


            echo "Metuose yra <strong>$diena31</strong> mėnesiai turintys 31 dieną <strong>($output)</strong>." . " <br><br>" .
                "Metuose yra <strong> $diena30</strong> mėnesiai turintys 30 dieną <strong>($output2)</strong>." . " <br><br>" .
                "Metuose yra <strong> $diena28</strong> mėnesiai turintys 28 dieną <strong>($output3)</strong>." . " <br>";
            ?>
        </div>

        <div class="rezultatas">
            <?php
            $suma = 0;
            foreach ($menesiuDienos as $temp) {
                $suma += $temp;
            };

            echo "Viso metuose yra <strong>$suma</strong> dienos.";

            ?>
        </div>

        <div class="rezultatas">
            <?php
            foreach ($menesiuVardai as $nr => $vardas) {
                echo "<strong>$vardas</strong> yra <strong>$nr</strong> mėnuo jis turi: <strong>$menesiuDienos[$nr]</strong> d. <br>";
            }
            ?>
        </div>
    </div>

</body>

</html>