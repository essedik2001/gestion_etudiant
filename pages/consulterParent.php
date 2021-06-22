<?php
    require_once('identifier.php');
    require_once('connexiondb.php');
    $idEtudiant=isset($_GET['id'])?$_GET['id']:0;

    $requete="select codeParent from etudiant where idEtudiant = $idEtudiant";
    $resultat=$pdo->query($requete);
    $ParentList=$resultat->fetch();
    $codeParent=$ParentList['codeParent'];

    $requeteParent="select * from Parent where idParent = $codeParent";
    $resultatParent=$pdo->query($requeteParent);
    $Parent=$resultatParent->fetch();

    $nomPere=$Parent['nomPere'];
    $prenomPere=$Parent['prenomPere'];
    $emailPere=$Parent['emailPere'];
    $phonePere=$Parent['telPere'];
    $nomMere=$Parent['nomMere'];
    $prenomMere=$Parent['prenomMere'];
    $emailMere=$Parent['emailMere'];
    $phoneMere=$Parent['telMere'];
?>

<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title>Consultation des information des parents:</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
        <script src="../js/jquery-3.3.1.js"></script>
        <script src="../js/moment.min.js"></script>
        <script src="../js/bootstrap-datetimepicker.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include("menu.php");?>
        <div class="container margetop">
            <div class="panel panel-primary">
                <div class="panel-heading">Consultation des information des parents: </div>
                <div class="panel-body">
                <form action="" class="form">
                    <div class="form-group">
                        <label>Identifiant de l'étudiant : <?php echo $idEtudiant; ?></label>
                        <input type="hidden" name="idEtudiant"
                        class="form-control" value="<?php echo $idEtudiant; ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Nom du père:</label>
                        <input type="text" name="nomPere"
                        class="form-control" value="<?php echo $nomPere; ?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label>Prénom du père:</label>
                        <input type="text" name="prenomPere"
                        class="form-control" value="<?php echo $prenomPere; ?>" readonly/>
                    </div>
                    <div class="form-group">
                            <label>Email du père:</label>
                            <input type="text" name="mailPere" value="<?php echo $emailPere; ?>" class="form-control" readonly/>
                        </div>
                        <div class="form-group">
                            <label>Tel du père:</label>
                            <input type="text" name="phonePere" value="<?php echo $phonePere; ?>" class="form-control" readonly/>
                        </div>
                        <div class="form-group">
                        <label>Nom du mère:</label>
                        <input type="text" name="nomMere"
                        class="form-control" value="<?php echo $nomMere; ?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label>Prénom du mère:</label>
                        <input type="text" name="prenomMere"
                        class="form-control" value="<?php echo $prenomMere; ?>" readonly/>
                    </div>
                    <div class="form-group">
                            <label>Email du mère:</label>
                            <input type="text" name="mailMere" value="<?php echo $emailMere; ?>" class="form-control" readonly/>
                        </div>
                        <div class="form-group">
                            <label>Tel du mère:</label>
                            <input type="text" name="phoneMere" value="<?php echo $phoneMere; ?>" class="form-control" readonly/>
                        </div>
                        <button type="button" class="btn btn-success">
                            <span class="glyphicon glyphicon-backward"></span>
                            <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Retour</a>
                        </button>
                   </form>
                </div>
            </div>
        </div>
    </body>
</HTML>
