<?php







    function IznosPdva ( $cena ) {

        if ( $cena < 1 ) {
            die("broj ne moze biti manji od 1");
        }

        if ( !is_int( $cena ) ) {
            die("broj mora biti numericka vrednost");
        }

        $pdv = $cena * 0.22;
        echo "iznos pdv-a za proizvod je $pdv eur";

    }

    iznosPdva(100);






?>