<html>
<head>
    <title>FORMULAIRE</title>
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
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .buttonc {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .b1 {
            background-color: #28a745;
            border: 5px dotted #28a745;
            border-radius: 2px;
            color: white;
        }
        .b1:hover {
            background-color: #6c757d;
        }
        .b2 {
            background-color: #dc3545;
            border: 5px solid #dc3545;
            border-radius: 2px;
            color: white;
        }
        .b2:hover {
            background-color: #6c757d;
        }
    </style>
</head>
<body>
    <h1>INSCRIPTION</h1>
    <form method="post" action="reponse.php">
        <div class="styleinput">
            <div class="inputcc"><label>NOM: </label> <input type="text" name="nom"></div>
            <div class="inputcc"><label>PRENOM: </label> <input type="text" name="prenom"></div>
            <div class="inputcc"><label>GROUPE: </label> <input type="number" name="grp"></div>
            <div class="inputcc"><label>FILLIERE: </label> <input type="text" name="Filliere"></div>
            <div class="inputcc"><label>SUJET: </label> <input type="text" name="sujet"></div>
            <div class="inputcc"><label>ENCADREMENT: </label> <input type="text" name="prof"></div>
            <div class="inputcc"><label>DATE DE DEBUT: </label> <input type="date" name="datededebut"></div>
            <div class="inputcc"><label>DATE DE FIN: </label> <input type="date" name="datedefin"></div>

            <div class="buttonc">
                <input type="submit" name="envoyer" value="ENVOYER" class="b1">
                <input type="reset" name="ANNULER" value="ANNULER" class="b2">
            </div>
        </div>
    </form>
</body>
</html>
