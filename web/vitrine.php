<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="image/png" href="img/logo.png" />
        <title>Vitrine !</title>
    </head>

    <body>
        <?php include 'includes/header.php';
        include 'includes/db.php';?>
        <div class='gauche'>
            <h1 class='vitrine'>Vitrine :</h1>
            <div class='car'>
                <?php
                    $q = $db->query("SELECT photo FROM voitures WHERE nom_voiture='PORSCHE 911 GT3 RS'");
                    while ($photo = $q->fetch()) { ?>
                        <img src='img/voitures/<?=$photo['photo'];?>' width="300px"><?php
                    }
                ?>
                <div class='info-car'>
                    <h2 class='car'>
                        <?php
                                echo "PORSCHE 911 GT3 RS"
                            ?><br>
                            <?php $q = $db->query("SELECT couleur FROM voitures WHERE nom_voiture='PORSCHE 911 GT3 RS'");
                            while ($couleur = $q->fetch()) {
                                echo "Couleur : ".$couleur['couleur'];
                            }?><br>
                            <?php $q = $db->query("SELECT prix FROM voitures WHERE nom_voiture='PORSCHE 911 GT3 RS'");
                            while ($prix = $q->fetch()) {
                                echo "Prix : ".$prix['prix']."€";
                            }
                        ?>
                    </h2>
                </div>
                <br>
                <?php
                    $q = $db->query("SELECT photo FROM voitures WHERE nom_voiture='MASERATI GranCabrio MC'");
                    while ($photo = $q->fetch()) { ?>
                        <img src='img/voitures/<?=$photo['photo'];?>' width="300px"><?php
                    }
                ?>
                <div class='info-car'>
                    <h2 class='car'>
                        <?php
                                echo "MASERATI GranCabrio MC"
                            ?><br>
                            <?php $q = $db->query("SELECT couleur FROM voitures WHERE nom_voiture='MASERATI GranCabrio MC'");
                            while ($couleur = $q->fetch()) {
                                echo "Couleur : ".$couleur['couleur'];
                            }?><br>
                            <?php $q = $db->query("SELECT prix FROM voitures WHERE nom_voiture='MASERATI GranCabrio MC'");
                            while ($prix = $q->fetch()) {
                                echo "Prix : ".$prix['prix']."€";
                            }
                        ?>
                    </h2>
                </div>
                <br>
                <?php
                    $q = $db->query("SELECT photo FROM voitures WHERE nom_voiture='FERRARI 488 Pista'");
                    while ($photo = $q->fetch()) { ?>
                        <img src='img/voitures/<?=$photo['photo'];?>' width="300px"><?php
                    }
                ?>
                <div class='info-car'>
                    <h2 class='car'>
                        <?php
                                echo "FERRARI 488 Pista"
                            ?><br>
                            <?php $q = $db->query("SELECT couleur FROM voitures WHERE nom_voiture='FERRARI 488 Pista'");
                            while ($couleur = $q->fetch()) {
                                echo "Couleur : ".$couleur['couleur'];
                            }?><br>
                            <?php $q = $db->query("SELECT prix FROM voitures WHERE nom_voiture='FERRARI 488 Pista'");
                            while ($prix = $q->fetch()) {
                                echo "Prix : ".$prix['prix']."€";
                            }
                        ?>
                    </h2>
                </div>
                <br>
                <?php
                    $q = $db->query("SELECT photo FROM voitures WHERE nom_voiture='LAMBORGHINI Urus'");
                    while ($photo = $q->fetch()) { ?>
                        <img src='img/voitures/<?=$photo['photo'];?>' width="300px"><?php
                    }
                ?>
                <div class='info-car'>
                    <h2 class='car'>
                        <?php
                                echo "LAMBORGHINI Urus"
                            ?><br>
                            <?php $q = $db->query("SELECT couleur FROM voitures WHERE nom_voiture='LAMBORGHINI Urus'");
                            while ($couleur = $q->fetch()) {
                                echo "Couleur : ".$couleur['couleur'];
                            }?><br>
                            <?php $q = $db->query("SELECT prix FROM voitures WHERE nom_voiture='LAMBORGHINI Urus'");
                            while ($prix = $q->fetch()) {
                                echo "Prix : ".$prix['prix']."€";
                            }
                        ?>
                    </h2>
                </div>
                <br>
                <?php
                    $q = $db->query("SELECT photo FROM voitures WHERE nom_voiture='TOYOTA Supra'");
                    while ($photo = $q->fetch()) { ?>
                        <img src='img/voitures/<?=$photo['photo'];?>' width="300px"><?php
                    }
                ?>
                <div class='info-car'>
                    <h2 class='car'>
                        <?php
                                echo "TOYOTA Supra"
                            ?><br>
                            <?php $q = $db->query("SELECT couleur FROM voitures WHERE nom_voiture='TOYOTA Supra'");
                            while ($couleur = $q->fetch()) {
                                echo "Couleur : ".$couleur['couleur'];
                            }?><br>
                            <?php $q = $db->query("SELECT prix FROM voitures WHERE nom_voiture='TOYOTA Supra'");
                            while ($prix = $q->fetch()) {
                                echo "Prix : ".$prix['prix']."€";
                            }
                        ?>
                    </h2>
                </div>
                <br>
                <div class='info-car'>
                    <h2 class='car'>
                        <?php
                            $q = $db->query("SELECT prix_option FROM options WHERE nom_option='Pack Carbon'");
                            while ($prix_option = $q->fetch()) {
                                echo "Pack Carbon - ".$prix_option['prix_option']."€";
                            }
                        ?><br>
                        <?php
                            $q = $db->query("SELECT prix_option FROM options WHERE nom_option='Pack Alcantara'");
                            while ($prix_option = $q->fetch()) {
                                echo "Pack Alcantara - ".$prix_option['prix_option']."€";
                            }
                        ?><br>
                        <?php
                            $q = $db->query("SELECT prix_option FROM options WHERE nom_option='Jante Noir'");
                            while ($prix_option = $q->fetch()) {
                                echo "Jante Noir - ".$prix_option['prix_option']."€";
                            }
                        ?><br>
                        <?php
                            $q = $db->query("SELECT prix_option FROM options WHERE nom_option='Ailerons'");
                            while ($prix_option = $q->fetch()) {
                                echo "Ailerons - ".$prix_option['prix_option']."€";
                            }
                        ?><br>
                        <?php
                            $q = $db->query("SELECT prix_option FROM options WHERE nom_option='Echappement'");
                            while ($prix_option = $q->fetch()) {
                                echo "Echappement - ".$prix_option['prix_option']."€";
                            }
                        ?><br>
                    </h2>
                </div>
            </div>
            <br>
        </div>
        <div class='droite'>
            <h1 class='commande'>Je commande ma voiture :</h1>
            <form name='commande' method='POST' action='vitrine.php'>
        	    <h2 class='commande'>
                    Votre email <input type='email' name='email'/><br>
				    Voiture :
					<select name='voiture'>
                    <?php
		    	        $base = new mysqli('localhost', 'root', 'root', 'dans_le_mur');
		    	        $sql = 'SELECT * FROM voitures';
		    	        $req = $base->query($sql);
		    	        if ($req) {
                            while ($data = mysqli_fetch_array($req)) {
                                echo '<option>'.$data['nom_voiture'].'</option>';
                            }
                        }
		            ?>
					</select><br>
        	        Option :
					<select name='option'>
                    <?php
		    	        $sql = 'SELECT * FROM options';
		    	        $req = $base->query($sql);
		    	        if ($req) {
                            while ($data = mysqli_fetch_array($req)) {
                                echo '<option>'.$data['nom_option'].'</option>';
                            }
                        }
			            mysqli_close($base);
		            ?>
					</select><br>
        	    </h2>
        	    <input type='submit' name='valider' value="Commander"/>
			</form>
        <?php
			if (isset($_POST['valider'])) {
				$email = $_POST['email'];
				$voiture = $_POST['voiture'];
				$options = $_POST['option'];
                $numero = rand(10,875);
				$sql = 'INSERT INTO commandes (id,email,id_voiture,options) VALUES ("'.$numero.'","'.$email.'","'.$voiture.'","'.$options.'")';
				$req = $db->query($sql);
				if ($req) {
					echo '<p>Votre numéro de commande est : '.$numero.'</p>';
				};
			}
		?>
        </div>
        <?php include 'includes/footer.php';?>
    </body>
</html>