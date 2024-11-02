<?php





    $arr = [1,4,5,7,14,22,54,88];


    function ispisiArr ( $niz ){
        foreach ( $niz as $broj ) {
            if ( $broj >= 10 ) {
                echo $broj."<br>";
            }

        }

    }


    ispisiArr($arr);


    $broj = 2;

    echo is_int(2)? "broj je intiger" : "broj nije intiger";



    ?>