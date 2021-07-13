<?php



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="styles.css">
    <title>Download Img</title>
</head>

<body>
<?php 

    
?>
    <main>
        <section class="container-fluid col-8">
            <div class="row">
                <?php 
                include("connectBdd.php");
                display();
                ?>
            </div>
        </section>
    </main>


</body>

</html>