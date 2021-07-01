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
        // bouton revenir vers le haut qui se déclenche une fois que 200px de la page soient descendu
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
                        </ul>
                    </div>
                </div>
            </nav>
        </form>
    </header>
    <main>
        <?php
        if (isset($_GET['a-propos'])) : ?>
            <article>
                <section class="container-fluid py-5 bg-dark text-light">
                    <div class="row justify-content-center">
                        <div class="py-5 col-8">
                            <h1 class="fw-lighter fst-italic">A propos de moi ...</h1>
                        </div>
                        <div class="card text-dark bg-info mb-3 py-5 col-8" style="max-width: 750px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img/brandon.jpg" class="img-fluid rounded-start" alt="brandon">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        <?php elseif (isset($_GET['contact'])) : ?>
            <article>
                <section class="container-fluid py-5 bg-dark text-light">
                    <div class="row justify-content-center">
                        <form class="col-10 col-md-8 col-lg-6 py-5 " method="POST" action="#">
                            <div class="py-5">
                                <h1 class="fw-lighter fst-italic">Contactez-moi ...</h1>
                            </div>
                            <div class="d-md-flex py-3">
                                <div class="col d-inline ">
                                    <label for="nom">Nom: </label>
                                    <input type="text" class="form-control" id="nom">
                                </div>
                                <div class="col mx-1 d-inline">
                                    <label for="prenom">Prénom: </label>
                                    <input type="text" class="form-control" id="prenom">
                                </div>
                            </div>
                            <div class="col-12 py-0">
                            <div class="mx-1 d-inline">
                                    <label for="mail">Mail: </label>
                                    <input type="text" class="form-control" id="mail" placeholder="dupont@example.com">
                            </div>
                            <div>
                                <label for="textarea">Votre message: </label>
                                <textarea class="form-control" id="textarea" rows="5"></textarea>
                            </div>
                            </div>
                            <div class="py-4 mt-3 text-center">
                                <button type="submit" class="btn btn-info">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </section>
            </article>
        <?php else : ?>
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade shadow-2-strong" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <article>
                <section class="container-fluid col-8 py-5">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card text-white mb-3">
                                <img src="img/projet-formation-gif-5-fini.gif" class="card-img-top" alt="gif">
                                <div class="card-body description">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
                </section>
            </article>
        <?php endif; ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>