<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire avec select</title>
</head>
<body>
    <h1>formulaire</h1>
    <h2>methode get :</h2>
    <form action="user.php" method="get">
        <input type="text" name="userName" placeholder="nom">
        <input type="text" name="userFirstName" placeholder="prenom">
        <input type="submit">
    </form>
    
    <h2>methode post</h2>
    <form action="user.php" method="post">
        <input type="text" name="userName" placeholder="nom">
        <input type="text" name="userFirstName" placeholder="prenom">
        <input type="submit">
    </form>
    
    <h2>select</h2>

    <?php
        if(isset($_POST['civility'], $_POST['userName'], $_POST['userFirstName'])){
            echo $_POST['civility'] . " " . $_POST['userName'] . " " . $_POST['userFirstName'] . "<br>";
            if (isset($_FILES['userFile'])){
                $file = $_FILES['userFile']['name'];
                echo "nom du fichier : " . $file;
                echo '<br>';
                $info = pathinfo($file);
                echo $info['extension'] === "pdf" ? "Le fichier est bien un pdf" : "Le fichier n'est pas un pdf";
            }
        }
        else {?>
            <div id="selectForm">
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <select name="civility" id="civility">
                        <option value="Mr">Mr</option>
                        <option value="Mme">Mme</option>
                    </select>
                    <input type="text" name="userName" placeholder="nom">
                    <input type="text" name="userFirstName" placeholder="prenom">
                    <input type="file" name="userFile" accept="application/pdf" >
                    <input type="submit">
                </form>
            </div><?php
        }?>

</body>
</html>
