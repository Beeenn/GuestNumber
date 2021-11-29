<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Jeu Trouver le nombre</h1>


    <input type="text" name="" id="number">
    <button onclick="calcul()">OK</button>
    <div id="ok"></div>
    <script>
            




        function calcul(){
            const nombre = parseInt(document.getElementById("number").value)
            if (nombre == nbAlea){
                document.getElementById("ok").innerHTML = "Ok"
            }else if(nombre < nbAlea){
                document.getElementById("ok").innerHTML = "Non Ok la valeur chercher est plus grande"
            }else if(nombre > nbAlea){
                document.getElementById("ok").innerHTML = "Non Ok la valeur chercher est plus petite"
            }
        }
    </script>
</body>
</html>