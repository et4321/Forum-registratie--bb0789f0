<html>
    <head>
        <title>form</title>
    </head>

    <body>
        <?php
        foreach ($_POST as $key => $value){
            ?>
            <div>
            <?php
            echo"jouw $key is $value";
            ?>
            </div>
            <?php   
        }
        ?>

    </body>

</html>