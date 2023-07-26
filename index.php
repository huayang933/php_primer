<?php 
    $title = "Index";
    include 'includes/header.php'; 
?>
    <!-- Basic HTML -->
    <h1>Hello World - PHP Primer</h1>

    <?php 
        // Printing to HTML using echo
        echo 'Hello PHP';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    
        // variable need a '$'. They are not strongly typed
        $name = 'Trevoir Williams';
        $age = 31;
        // echo variable
        echo $name;
        echo '<h1>My name Is: ' . $name .'</h1>';
        echo '<h1>My age Is: ' . $age .'</h1>';
        // echo using double quotes and interpolation
        echo "<h1>My name Is: $name </h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
<?php require 'includes/footer.php' ?>