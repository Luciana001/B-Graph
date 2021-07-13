<?php 
    function connectBdd() {
        try {
            $pdo = new PDO("mysql:host=mysql;dbname=B-Graph", "root", "root");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }return $pdo;
    };
 
    function insert(){
        $ret        = false;
        $img_blob   = '';
        $img_taille = 0;
        $img_type   = '';
        $img_desc   = '';
        $img_nom    = '';
        $img_titre  = '';
        $taille_max = 10000000;
        $ret        = is_uploaded_file($_FILES['image']['tmp_name']);
        
        if (!$ret) {
            echo "Problème de transfert";
            return false;
        } else {
            // Le fichier a bien été reçu
            $img_taille = $_FILES['image']['size'];
            
            if ($img_taille > $taille_max) {
                echo "Trop gros !";
                return false;
            }
            $img_type = $_FILES['image']['type'];
            $img_nom  = $_FILES['image']['name'];
        }
        $img_desc  = $_POST['description'];
        $img_titre = $_POST['titre'];
        $img_type  = $_FILES['image']['type'];
        $img_nom   = $_FILES['image']['name'];
        
        $img_blob = file_get_contents ($_FILES['image']['tmp_name']);
        $pdo=connectBdd();
        $req = " ";
        $req = $pdo->prepare("INSERT INTO images (img_titre,img_nom, img_taille, img_type, img_desc, img_blob ) 
                                VALUES (:img_titre, :img_nom , :img_taille ,:img_type ,:img_desc,:img_blob)");
        $req->bindValue(':img_titre', $img_titre);
        $req->bindValue(':img_nom', $img_nom);
        $req->bindValue(':img_taille', $img_taille);
        $req->bindValue(':img_type', $img_type);
        $req->bindValue(':img_desc', $img_desc);
        $req->bindValue(':img_blob', base64_encode($img_blob));
        $req->execute();
        $pdo = NULL;
    }
    function display ()
    {
        $pdo = connectBdd();
        $req = " ";
        //header("Content-type: image/jpg");
        $req = $pdo->query("SELECT * FROM images");
        //while($rows = mysql_fetch_array($req)){
        $req -> execute();
        $rows = $req->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($rows as $row){
            $row['img_blob'] = base64_decode($row['img_blob']);
            echo $row['img_titre'];
            echo '<br/>';
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['img_blob'] ).'"/>';
        }
        //     //header("Content-type: ".$row[2]);
        //     //echo $row[3] ;
        // }

        //header("Content-type: image/jpg"); 
        //var_dump($rows);
        $pdo = NULL;
    }
    function update ()
    {
        $pdo = connectBdd();
        $req = " ";
        $req = $pdo->prepare("SELECT img_blob FROM images");
        $req -> execute();
        $rows = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach($rows as  $row){
            //$row['img_blob'] = base64_decode($row['img_blob']);
            $req = $pdo->prepare("UPDATE images SET img_blob = :img_blob");
            $req -> bindValue(':img_blob', base64_encode($row['img_blob']));
            $req -> execute();
    }
        };
        

    ?>