<?php






    function DaliJeBrojParan ( $broj ) {

        if ( $broj == 0 ) {
            die("broj 0 se ne moze proslediti kao argument");
        }
        if ( $broj % 2 == 0 ) {
            echo "broj je paran";
        } else {
            echo "broj nije paran";
        }
    }

    DaliJeBrojParan(5);





?>