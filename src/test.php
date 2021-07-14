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
            <button type="button" class="btn" name="btn-modal" value="<?php $row['img_id']; ?>" id=" btn-modal" data-toggle="modal" data-target=".bd-example-modal-lg">
                                            voir mieux
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-dark" id="exampleModalLongTitle"><?php echo $row['img_titre']; ?></h5>
                                                        <p class="modal-text text-dark px-5 my-3"><?php echo $row['img_desc']; ?></p>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img_blob']); ?>" alt="gif">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        </section>
    </main>


</body>

</html>