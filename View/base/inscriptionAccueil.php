<!DOCTYPE html>
<html>

<head>
    <title>Connexion</title>

    <meta charset="utf-8" />

    <link rel="stylesheet" href="../View/assets/inscriptionType.css" />

</head>

<body>

<form method="post" class="contentInscription">
    <div class="title_container">
        <h3>Inscrivez-vous</h3>
    </div>
    <div class="form_container">
        <div class="instruction_container1">
            <h3>Code d'identification</h3>
        </div>
        <div class="IC_container">

            <div class="input_container">
                <input name="code" type="text" id="code" placeholder="I-C"  required pattern="[0-9]+" >
            </div>
            <div class="erreurM">
                <p><?=$_GET['erreurIcode']?></p>
            </div>
        </div>
    </div>
    <div class="logC">
        <input class="log" name="log" type="submit" )">
    </div>
</form>
</body>
</html>