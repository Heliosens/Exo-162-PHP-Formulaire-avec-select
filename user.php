<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Récupération des info</h2>
    <h3>methode get :</h3>
    <div>
        <?php
        if(isset($_GET['userName'], $_GET['userFirstName'])){
            echo $_GET['userName'] . " " . $_GET['userFirstName'];
        }
        ?>
    </div>

    <h3>methode post :</h3>
    <div>
        <?php
        if(isset($_POST['userName'], $_POST['userFirstName'])){
            echo $_POST['userName'] . " " . $_POST['userFirstName'];
        }
        ?>
    </div>

</body>
</html>
