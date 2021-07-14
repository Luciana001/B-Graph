<?php function aPropos()
{ ?>
    <div class="row justify-content-center">
        <div class="col-10 col-md-8  py-5">
            <div class="py-5">
                <h1 class="fw-lighter fst-italic">A propos de moi ...</h1>
            </div>
            <div class="card bg-transparent" >
                <img class="card img-fluid" id="card-brandon" src="img/brandon.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
<?php }; 
function contact() { ?>
    <div class="row justify-content-center">
        <form class="col-10 col-md-8  py-5 " method="POST" action="#">
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

<?php }; ?>
<?php function login()
{ ?>

    <div class="row justify-content-center ">
        <div class="col-10 col-md-8 offset-1 py-5  ">
        <div class="py-5">
            <h1 class="fw-lighter fst-italic">Connexion</h1>
        </div>
        <form method="GET" action="" class="col-10 col-md-8 col-lg-10 py-2">
            <div class=" py-2">
                <input type="text" name="user " class="col-12" placeholder="user" />
            </div>
            <div class=" py-2">
                <input type="text" name="password" placeholder="password" class="col-12" /><br />
            </div>
            <div class=" py-2">
                <input class="btn btn-info" type="submit" name="connecter" value="Log In" />
            </div>
        </form>
        </div>
    </div>

<?php }; ?>
<?php function sendProject()
{ ?>

<div class="row justify-content-center ">
        <div class="col-10 col-md-8 offset-1 py-5  ">
        <div class="py-5 " >
            <h1 class="fw-lighter fst-italic">Ajoute un projet ...</h1>
        </div>
        <form method="POST" action="#" enctype="multipart/form-data" class=" col-12 py-2">
            <div class=" py-2 col-12">
                <input type="file" name="image" size="50" />
            </div>
            <div class=" py-2 col-12 ">
                <input type="text" name="titre" placeholder="titre" class="col-10 col-md-8 " />
            </div>
            <div class=" py-2 col-12">
                <textarea name="description" rows="5" placeholder="description" class="col-10 col-md-8 "></textarea>
            </div>
            <div class=" col-12 py-2">
                <a href="index.php">Go Home</a>
            </div>
            <div class=" col-12 py-2">
                <input class="btn btn-info" type="submit" name="valider" value="charger" />
            </div>
        </form>
        </div>
    </div>

<?php } ?>