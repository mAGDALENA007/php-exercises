<?php

        //index7.php $_POST

    function checkWhatChoose() {
        $clickBait = strtolower( $_POST["formularz_btn"] );

        $a = array(
            "duży", 
            "mały", 
            "długi", 
            "krótki", 
            "miły", 
            "grzeczny", 
            "zły"
            );

        $b = array(
            "ogromniasty", 
            "oszczędny", 
            "niekrótki", 
            "zwięzły", 
            "czarujący", 
            "uroczy", 
            "brzydki"
            );

        $wyrazWprowadzony = str_replace( $a, $b, $clickBait );
        return array($clickBait, $wyrazWprowadzony);
    }

    function displaWyrazWprowadzony( $x, $y ) {
        echo "<strong class='text-danger'>Wprowadzony wyraz</strong><h4>".ucwords($x)."</h4><hr>";
        echo "<strong class='text-success'>Antonim</strong><h4>".ucwords($y)."</h4>";
    }

?>


















