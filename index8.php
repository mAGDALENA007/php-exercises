
<?php 
if( isset( $_POST["post_submit"] ) ) {
        
    function validateFormData( $formData ) {
        $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
        return $formData;
    }
    if( !$_POST["post_name"] ) {
        $nameError = "Proszę podaj swoje imię <br>";
    } else {
        $name = validateFormData( $_POST["post_name"] );
    }
    if( !$_POST["post_email"] ) {
        $emailError = "Proszę podaj swojego emaila <br>";
    } else {
        $email = validateFormData( $_POST["post_email"] );
    }
}

require('001partials/head.php'); 
?>

<div class="container">
             
    <br>
    <h3>Formularze $_GET i $_POST:</h3>
    <br>
    <p>$_GET</p>
    <form action="001partials/get.post.php" method="get">
        <input type="text" placeholder="Name" name="nameGet">
        <input type="text" placeholder="Email" name="emailGet">
        <input type="submit" name="form_submit">
    </form>

    <br>
    <p>$_POST</p>
    <form action="001partials/post.get.php" method="post">
        <input type="text" placeholder="Name" name="namePost">
        <input type="text" placeholder="Email" name="emailPost">
        <input type="submit" name="form_submit">
    </form>
    <br>
    <hr>
    <!-- WALIDACJA z ifem na górze strony -->
    <br>
    <h3>Form - przesłany na bieżącą stronę</h3>
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
        <small class="text-danger">* <?php echo $nameError; ?></small>
        <input type="text" placeholder="Name" name="post_name"><br>
                
        <small class="text-danger">* <?php echo $emailError; ?></small>
        <input type="text" placeholder="Email" name="post_email"><br><br>
        <input type="submit" name="post_submit">
    </form>

    <?php       
        if( isset($_POST["post_submit"]) ) {
            echo "<h4>Informacja</h4>";
            echo "$name <br> $email <br>";
        }
    ?>
</div> <!--/ .conteiner-->

<?php require('001partials/footer.php'); ?>
