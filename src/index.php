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
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="img/amoureux 2.png" class="d-block w-100" alt="amoureux">
                </div>
                <div class="carousel-item">
                    <img src="img/Capture 4.PNG" class="d-block w-100" alt="fillette">
                </div>
                <div class="carousel-item">
                    <img src="img/bébé.jpg" class="d-block w-100" alt="bebe">
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
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card text-white mb-3">
                                <img src="img/projet-formation-gif-5-fini.gif" class="card-img-top" alt="gif">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target=".bd-example-modal-lg">
                                    voir mieux
                                </button>

                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="img/projet-formation-gif-5-fini.gif" alt="gif">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/cv-1 (2).png" class="card-img-top" alt="cv1">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/logo2paranoiark-2.jpg" class="card-img-top" alt="logo">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/logo amed.jpg" class="card-img-top" alt="amed">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/cv 2 perso.gif" class="card-img-top" alt="cv-2">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 9.PNG" class="card-img-top" alt="corbeau">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 8.PNG" class="card-img-top" alt="mort">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 7.PNG" class="card-img-top" alt="woman-free">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 6.PNG" class="card-img-top" alt="forest">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 4.PNG" class="card-img-top" alt="fillette">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 21.PNG" class="card-img-top" alt="main">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 20.PNG" class="card-img-top" alt="eglise">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 2.PNG" class="card-img-top" alt="logo-smart">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 19.PNG" class="card-img-top" alt="femme-ruelle">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 17.PNG" class="card-img-top" alt="etiquette-recto">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 18.PNG" class="card-img-top" alt="etiquette-verso">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 16.PNG" class="card-img-top" alt="femme-crepuscule">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 15.PNG" class="card-img-top" alt="chat">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 14.PNG" class="card-img-top" alt="couloir-penombre">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 13.PNG" class="card-img-top" alt="femme-hache">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 12.PNG" class="card-img-top" alt="apocalypse">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 11.PNG" class="card-img-top" alt="batman">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white  mb-3">
                                <img src="img/Capture 10.PNG" class="card-img-top" alt="tete-de-mort">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php };
                if (isset($_FILES['image'])) {
                    include('connectBdd.php');
                    insert();
                } ?>
            </section>
        </article>
    </main>
    <div id="scrollUp">
        <a href="#top"><img src="img/fleche_haut-.png" class="icon-fleche" /></a>
    </div>
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