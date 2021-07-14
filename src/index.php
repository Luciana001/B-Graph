<?php require 'display.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script>
        // bouton revenir vers le haut qui se déclenche une fois que 200px de la page sont descendu
        jQuery(function() {
            $(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 200) {
                        $('#scrollUp').css('right', '10px');
                    } else {
                        $('#scrollUp').removeAttr('style');
                    }
                });
            });
        });
    </script>
    <title>B-Graph</title>
</head>

<body>
    <header>
        <form action="index.php" method="GET">
            <nav class="navbar transparent navbar-dark navbar-expand-md  ">
                <div class="container-fluid">
                    <button class="navbar-brand btn btn-transparent text-white" name="blog" type="submit">Blog</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-lg-0">
                            <li class="nav-item">
                                <button class="nav-link active btn btn-transparent text-white" aria-current="page" name="a-propos" type="submit">A propos</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link active btn btn-transparent text-white" aria-current="page" name="contact" type="submit">Contact</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link active btn btn-transparent text-white" aria-current="page" name="login" type="submit">Log In</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </form>
    </header>
    <main>
        <div id="carouselExampleFade" class="carousel slide carousel-fade " height="50px" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="img/amoureux 2.png" class="d-block img-fluid img-carousel" alt="amoureux">
                </div>
                <div class="carousel-item">
                    <img src="img/Capture 4.PNG" class="d-block w-100 img-fluid img-carousel" alt="fillette">
                </div>
                <div class="carousel-item">
                    <img src="img/bébé.jpg" class="d-block img-fluid img-carousel" alt="bebe">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>

        <article>
            <section class="container-fluid col-12 py-5">
                <?php
                if (isset($_GET['a-propos'])) {
                    aPropos();
                } elseif (isset($_GET['contact'])) {
                    contact();
                } elseif (isset($_GET['login'])) {
                    login();
                } elseif (isset($_GET["connecter"])) {
                    sendProject();
                } else { ?>
                    <div class="col-10 offset-1 py-5">
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <?php
                            include("connectBdd.php");
                            $rows = display();
                            foreach ($rows  as $key => $row) {
                                $row['img_blob'] = base64_decode($row['img_blob']) ?>
                                <div class="col">
                                    <div class="card text-white mb-3" id="card">
                                        <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img_blob']); ?>" class="card-img-top" alt="gif">
                                        <div class="card-body description">
                                            <h5 class="card-title  col-10 offset-1"><?php echo $row['img_titre']; ?></h5>
                                            <p class="card-text col-10 offset-1"><?php echo $row['img_desc']; ?></p>
                                            
                                        </div>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn " id="btn-modal" data-toggle="modal" data-target="#message<?php echo $row['img_id']; ?>">Voir mieux ...</button>
                                        <!-- Modal -->
                                        <div id="message<?php echo $row['img_id']; ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog modal-xl">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title text-dark"><?php echo $row['img_titre']; ?></h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-dark"><?php echo $row['img_desc']; ?></p>
                                                        <?php echo $row['img_id']; ?>
                                                        <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img_blob']); ?>" class="card-img-top" alt="gif">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Modifier</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php  } ?>
                        </div>
                    </div>
                <?php };
                if (isset($_FILES['image'])) {
                    include('connectBdd.php');
                    insert();
                } ?>
            </section>
        </article>
        <div id="scrollUp">
            <a href="#top"><img src="img/fleche_haut-.png" class="icon-fleche" /></a>
        </div>
    </main>
    <footer>
        <div class="container-fluid  text-center py-5" id="citation">
            <figure class="text-center">
                <blockquote class="blockquote">
                    <p class=" fst-italic fs-3">" La créativité, c'est l'intelligence qui s'amuse. "</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    <cite title="Source Title">Albert Einstein</cite>
                </figcaption>
            </figure>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>