<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="image/png" href="img/logo.png" />
        <title>Suivi de commande</title>
    </head>

    <body>
        <?php include 'includes/header.php';?>
        <h1>Numéro de commande :</h1>
        <p>
            <form method="post" action="suivi.php">
                <input type='int' name='bon_commande'/><br>
                <input type='submit' name='valider' value='ok'/>
                <?php
                    if (isset($_POST['valider'])) {
                        $bon_commande = $_POST['bon_commande'];
			            $base = new mysqli('localhost', 'root', 'root', 'dans_le_mur');
			            $sql = 'SELECT etat FROM commandes WHERE id="'.$bon_commande.'"';
			            $req = $base->query($sql);
			            if ($req) {
			        	    while ($data = mysqli_fetch_array($req)) {
                                $id = $data[0];
                                echo '<p>Votre commande est actuellement sous l état suivant : "'.$id.'"</p>';
                            }
			    	    }
                        else{
                            echo "Vous n'avez pas rentré le bon numéro de commande";
                        }
			            mysqli_close($base);
                    }
		        ?>
            </form>
        </p>
        <?php include 'includes/footer.php';?>
    </body>
</html>