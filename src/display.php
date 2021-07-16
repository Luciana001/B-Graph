<?php 
function aPropos() //page A propops
{ ?>
    <div class="row justify-content-center">
        <div class="col-10 col-md-8  py-5">
            <div class="py-5">
                <h1 class="fw-lighter fst-italic">A propos de moi ...</h1>
            </div>
            <div class="card bg-transparent">
                <img class="card img-fluid" id="card-brandon" src="img/brandon.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="col-12">
                    <a href="index.php">Go Home</a>
                </div>
        </div>
    </div>
<?php };
function contact() // form contact
{ ?>
    <div class="row justify-content-center">
        <form class="col-10 col-md-8  py-5 " method="GET" action="index.php?contact=">
            <div class="py-5">
                <h1 class="fw-lighter fst-italic">Contactez-moi ...</h1>
            </div>
            <div class="d-md-flex py-3">
                <div class="col d-inline ">
                    <label for="nom">Nom: </label>
                    <input type="text" name="nom" class="form-control" id="nom">
                </div>
                <div class="col mx-1 d-inline">
                    <label for="prenom">Prénom: </label>
                    <input type="text" name="prenom" class="form-control" id="prenom">
                </div>
            </div>
            <div class="col-12 py-0">
                <div class="mx-1 d-inline">
                    <label for="mail">Mail: </label>
                    <input type="email" name="email" class="form-control" id="mail" placeholder="dupont@example.com" required>
                </div>
                <div>
                    <label for="textarea">Votre message: </label>
                    <textarea class="form-control" name="message" id="textarea" rows="5" required></textarea>
                </div>
            </div>
            <div class="py-4 mt-3 text-center">
                    <a href="index.php">Go Home</a>
                </div>
            <div class="py-4 mt-3 text-center">
                <button type="submit" class="btn btn-info">Envoyer</button>
            </div>
        </form>
    </div>
    <?php
    // if (isset($_GET['message'])) {
    //     $to      = "luciana.brancato@gmail.com";
    //     $sujet   = "Envoi depuis page Contact";
    //     // $entete  = 'MIME-Version: 1.0' ;
    //     // $entete .= 'Content-type: text/html;  charset=UTF-8' . "\r\n";
    //     $entete  = 'From: webmaster@example.com' . "\r\n";

    //     $message = 'Message envoyé depuis la page Contact de monsite';
    //     // echo "<p><b>Nom : </b>'" . $_POST['nom'] . '<br>
    //     // <b>Email : </b>' . $_POST['email'] . '<br>
    //     // <b>Message : </b>' . $_POST['message'] . '</p>';

    //     $retour = mail($to, $sujet, $message, $entete);
    //     echo $retour;
    //     if ($retour) {
    //         echo '<p>Votre message a bien été envoyé.</p>';
    //     } else echo '<p>erreur</p>';
    // }
};
function loginDisplay() //form log In
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
                <div class="col-12">
                    <a href="index.php">Go Home</a>
                </div>
                <div class="py-4 mt-3 text-center">
                    <input class="btn btn-info" type="submit" name="connecter" value="Log In" />
                </div>
            </form>
        </div>
    </div>
<?php };
function sendProject() //form to send new project
{ ?>
    <div class="row justify-content-center ">
        <div class="col-10 col-md-8 offset-1 py-5  ">
            <div class="py-5 ">
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
                <div class="py-4 mt-3 text-center">
                    <input class="btn btn-info" type="submit" name="valider" value="charger" />
                </div>
            </form>
        </div>
    </div>
<?php };
function card() //display cards
{ ?>
    <div class="col-10 offset-1 py-5">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
            $rows = displayCard();
            foreach ($rows  as  $row) {
                $id = $row['img_id'];
                $titre = $row['img_titre'];
                $description = $row['img_desc'];
                $img = base64_decode($row['img_blob']) ?>
                <!-- === Card === -->
                <div class="col">
                    <div class="card text-white mb-3" id="card">
                        <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($img); ?>" class="card-img-top" alt="gif">
                        <div class="card-body description">
                            <h5 class="card-title  col-10 offset-1"><?php echo $titre; ?></h5>
                            <p class="card-text col-10 offset-1"><?php echo $description; ?></p>
                        </div>
                        <form class="col-12" method="GET" action="index.php" id="btn-modal">
                            <button type="submit" name="modifier" id="btn-modal" class="btn col-5" value="<?php echo $id; ?>">Modifier</button>
                            <button type="submit" name="supprimer" id="btn-modal" class="btn col-6" value="<?php echo $id; ?>" onclick="showAlertDelete();">Supprimer</button>
                        </form>
                        <div class="col-12">
                        <button type="button" class=" col-12 btn py-3" id="btn-modal" data-toggle="modal" data-target="#message<?php echo $id; ?>">Voir mieux ...</button>
                        </div>
                        <!-- === Modal === -->
                        <div id="message<?php echo $id; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title text-dark"><?php echo $titre; ?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-dark"><?php echo $description; ?></p>
                                        <?php echo $id; ?>
                                        <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($img); ?>" class="card-img-top" alt="gif">
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php  } ?>
        </div>
    </div>

<?php }
function displayOne($id, $titre, $description) //display edit card
{ ;
?>
    <div class="row justify-content-center ">
        <div class="col-10 col-md-8 offset-1 py-5  ">
            <div class="py-5 ">
                <h1 class="fw-lighter fst-italic">Modifie ton projet ...</h1>
            </div>
            <form method="POST" action="#" enctype="multipart/form-data" class=" col-12 py-2">
                <div class=" py-2 col-12 ">
                    <input type="text" name="titre" value="<?php echo $titre; ?>" class="col-10 col-md-8 " />
                </div>
                <div class=" py-2 col-12">
                    <textarea name="description" rows="5" value="<?php echo $description; ?>" class="col-10 col-md-8 "><?php echo $description; ?></textarea>
                </div>
                <div class=" col-12 py-2">
                    <?php if(isset($_POST['update'])){ ?>
                        <a href="index.php">Va voir le résultat</a>
                    <?php } else { ?>
                    <a href="index.php">Go Home</a>
                    <?php } ?>
                </div>
                <div class=" col-12 py-2">
                    <button class="btn btn-info" id="btn-update" type="submit" name="update" value="<?php echo $id; ?>" onclick="showAlert();">Modifier</button>
                </div>
            </form>
        </div>
    </div>
<?php } ?>