<?php 
require 'display.php'; 
require 'request.php';
?>
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
        function showAlert() {
            alert("Modification réussie");
        }
        function showAlertDelete() {
            var result = confirm("Etes-vous sûre de vouloir faire ceci?");
            if(result) {
                alert('Suppression enregistrée');
            }else {
                alert('Bye bye!');
            }
        }
    </script>
    
    <title>B-Graph</title>
</head>

<body>
    <header>
        <form action="index.php" method="GET">
            <nav class="navbar transparent navbar-dark navbar-expand-md  ">
                <!-- <div class="container-fluid"> -->
                    <button class="navbar-brand btn btn-transparent text-white" name="blog" type="submit">Blog</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active btn btn-transparent text-white" aria-current="page" name="a-propos" href="#">A propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active btn btn-transparent text-white" aria-current="page" name="contact" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active btn btn-transparent text-white" aria-current="page" name="login" href="#">Log In</a>
                            </li>
                        </ul>
                    </div>
                <!-- </div> -->
            </nav>
        </form>
    </header>
    <main>
        <div id="carouselExampleFade" class="carousel slide carousel-fade " data-ride="carousel">
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
                if (isset($_FILES['image'])) {
                    insert();
                }; 
                if (isset($_GET['supprimer']) || isset($_GET['modifier']))  {
                    if(!empty(isset($_GET['modifier']))){
                        $id          = $_GET['modifier'];
                        $rows        = requestGetOne($id); //request displayOne -> id
                        $titre       = $rows[0]['img_titre'];
                        $description = $rows[0]['img_desc'];
                        displayOne($id,$titre,$description); //display form update
                        if(isset($_POST['update'])){
                            $description  = $_POST['description'];
                            $titre = $_POST['titre'];
                            modify($id,$titre,$description);
                            }
                        }else {
                            $id=$_GET['supprimer'];
                            delete($id);
                            card();
                        }
                }
                elseif (isset($_GET['a-propos'])) {
                    aPropos();
                } elseif (isset($_GET['contact'])) {
                    contact();
                } elseif (isset($_GET['login'])) {
                    loginDisplay();
                } elseif (isset($_GET["connecter"])) {
                    sendProject();
                } else {; 
                    card();
                };
                ?>
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