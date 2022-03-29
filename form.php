<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Saisir son nom :</p>
        <input type="text" name="nom">
        <p>Saisir son genre :</p>
        <select name="genre" >
            <option value="1">
                Femme
            </option>
            <option value="2">
                Homme
            </option>
            <option value="3">
                Autre
            </option>   
        </select>
        <p><input type="submit" value="Afficher"></p>
    </form>
    <?php
    //test l'existence des variables (super globales $_POST)
    if(isset($_POST['nom']) AND $_POST['nom'] != ""
    AND isset($_POST['genre']) AND $_POST['genre'] != ""){
        //variables (champs du formulaire)
        $nom = $_POST['nom'];
        $genre = $_POST['genre'];
        //test de la valeur du genre (select)
        switch($genre){
            case 1:
                echo "<p>$nom est une Femme</p>";
                break;
            case 2:
                echo "<p>$nom est un Homme</p>";
                break;
            case 3:
                echo "<p>$nom est ni un Homme, ni une Femme</p>";
                break;
        }
    }
    //test si les champs sont vident
    else{
        echo "<p>Veuillez remplir les champs du formulaire</p>";
    }
    ?>
</body>
</html>