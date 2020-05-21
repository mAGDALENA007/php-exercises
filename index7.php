<?php
    if( isset( $_POST["fix-submit"] ) ) {
        $clickBait = strtolower($_POST["clickbait_headline"]);
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

        $honestHeadline = str_replace( $a, $b, $clickBait );
        // SPR VARIABLE SCOPE
    }
?>
<?php require('001partials/head.php'); ?>

        <div class="container">
             
        <br><br>
        <h4>$_POST - wybierz ze zbioru wyraz by poznać jego synonim:</h4>
        <p>duży, mały, długi, krótki, miły, grzeczny, zły.</p>
            
            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_headline"></textarea><br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix-submit">Poznaj jego synonim ***</button>
                </form>
            </div>
            
            <?php
            if ( isset( $_POST["fix-submit"] )) {
                echo $honestHeadline;
            }
            ?>

        </div>
        <?php require('001partials/footer.php'); ?>




















