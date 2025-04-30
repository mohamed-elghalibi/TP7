<!DOCTYPE html>
<html>
<head>
    <title>RÉPONSE FORMULAIRE</title>
    <style>
        body {
            background-color: #f0f4f8;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        .inputcc {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 400px;
            margin: 10px;
        }
        .styleinput {
            background-color: #ffffff;
            padding: 12px;
            border-radius: 12px;
            border: 5px dotted #aed6f1;
        }
        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
    <h1>VOS INFORMATIONS</h1>

    <div class="form">
        <div class="styleinput">
            <?php 
            if ($_SERVER['REQUEST_METHOD']== "POST"){
                $nom = strip_tags($_POST['nom']);
                $prenom = strip_tags($_POST['prenom']);
                $groupe = strip_tags($_POST['grp']);
                $filliere = strip_tags($_POST['Filliere']);
                $sujet = strip_tags($_POST['sujet']);
                $encadrement = strip_tags($_POST['prof']);
                $dateD = strip_tags($_POST['datededebut']);
                $dateF = strip_tags($_POST['datedefin']);
            }
            ?>
            <div class="inputcc"><label>NOM:</label> <span><?php echo $nom; ?></span></div>
            <div class="inputcc"><label>PRÉNOM:</label> <span><?php echo $prenom; ?></span></div>
            <div class="inputcc"><label>GROUPE:</label> <span><?php echo $groupe; ?></span></div>
            <div class="inputcc"><label>FILIÈRE:</label> <span><?php echo $filliere; ?></span></div>
            <div class="inputcc"><label>SUJET:</label> <span><?php echo $sujet; ?></span></div>
            <div class="inputcc"><label>ENCADREMENT:</label> <span><?php echo $encadrement; ?></span></div>
            <div class="inputcc"><label>DATE DE DÉBUT:</label> <span><?php echo $dateD; ?></span></div>
            <div class="inputcc"><label>DATE DE FIN:</label> <span><?php echo $dateF; ?></span></div>
        </div>
    </div>
</body>
</html>
