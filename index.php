<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //definisco due punti
        /*
            Pidgey -> 40 HP, 45 Attack
            Squirtle -> 44 HP, 48 Attack
            Caterpie -> 45 HP, 30 Attack
        */

        function distance($a, $b){ //$a e $b sono 2 array che contengono le coordinate X e Y dei punti passati con gli array al richiamo d...
            $cat1 = abs($a[0] - $b[0]);
            $cat2 = abs($a[1] - $b[1]);
            $cat3 = abs($a[2] - $b[2]);
            $ipotenusa = sqrt(pow($cat1, 2) + pow($cat2, 2) + pow($cat3, 2));

            return $ipotenusa;

            //la funzione deve restituire un solo numero che sarà l'ipotenusa del triangolo rettangolo
        }

 
        function distanceNDimensioni($a, $b){
            //calcolare applicando la formula sopra (radice quadrata della somma dei quadrati costruiti su ogni dimensione)
            $ipotenusa = 0;
            for ($i = 0; $i < count($a); $i++){
                $cat = abs($a[$i] - $b[$i]);
                $ipotenusa += pow($cat, 2);
            }

            $ipotenusa = sqrt($ipotenusa);
            return $ipotenusa;
        }

        $pidgey=[40, 45, 40];
        $squirtle=[44, 48, 65];
        $caterpie=[45, 30, 35];

        echo "Distanza fra pidgey e squirtle: " . distance($pidgey, $squirtle) . "<br />";
        echo "Distanza fra pidgey e caterpie: " . distance($pidgey, $caterpie) . "<br />";
        echo "Distanza fra squirtle e caterpie: " . distance($squirtle, $caterpie) . "<br />";

    ?>
</body>
</html>