<?php
    // FUNCTIONS.PHP

    function checkForClickBait() {
        // grab value from textarea in $_POST collection
        // make all letters lowercase using strtolower() function
        // store in a variable
        $clickBait = strtolower( $_POST["clickbait_headline"] );

        // store array of clickbait-sounding words or phrases
        $a = array(
                "scientists",
                "doctors",
                "hate",
                "stupid",
                "weird",
                "simple",
                "trick",
                "shocked me",
                "you'll never believe",
                "hack",
                "epic",
                "unbelievable"
            );

        //  store array of replacement words or phrases
        /*  make sure each replacement is in the same order
            as the click bait word you're trying to replace */
        $b = array(
                "so-called scientists",
                "so-called doctors",
                "aren't threatened by",
                "average",
                "completely normal",
                "ineffective",
                "method",
                "is no different than the others",
                "you won't really be surprised by",
                "slightly improve",
                "boring",
                "normal"
            );

        // use the str_replace() function to replace the words
        // uppercase the first letter in every word using ucwords() function
        // store in a variable
        $honestHeadline = str_replace( $a, $b, $clickBait );
        
        // return an array of the variables so we can access them globally
        return array($clickBait, $honestHeadline);
    }

    // this function requires two parameters
    /*  the values of the parameters will be the values of the returned array
        in the previous function */
    function displayHonestHeadline( $x, $y ) {
        // use ucwords() function to uppercase first letter in every word
        // echo the variable on the screen
        echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($x)."</h4><hr>";

        // echo the honest headline on the screen
        echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($y)."</h4>";
    }

?>


















