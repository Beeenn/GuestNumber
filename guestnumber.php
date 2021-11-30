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
    <h3>Difficulté</h3>
    <button onclick="facile()" id="btn1">Facile</button>
    <button onclick="Moyen()" id="btn2">Moyen</button>
    <button onclick="Difficile()" id="btn3">Difficile</button>
    <button onclick="rafraichir()" id="btn4">recommencer</button>
    <h3>Nombre d'essaies</h3>
    <button onclick="cinq()" id="cinq">5 </button>
    <button onclick="dix()" id="dix">10</button>
    <button onclick="vingt()" id="vingt">20</button>
    
    <p id="niveau" ></p>
<div class="flexbox">
    <div class="flexc" id="bgjeu">
        <div id="bgjeu" class="bg-color">
            <input type="text" name="" id="number">
            <button onclick="calculfacile()">OK</button>
            <div id="ok"></div>
        </div>
    </div>
    <div class="flexhisto">
        <p>Historique:</p>
        <div class="histori">
                
        </div>
    </div>
        
</div>
    

    <style>
        .flexc{
            width:250px;
            height:100px
        }
        .flexhisto{
            margin-left: 20px;
        }

        #btn1{
            background-color: green;
        }

        #btn2{
            background-color: yellow;
        }

        #btn3{
            background-color: red;
        }

        #histo{
            height:10px;
        }

        .flexbox{
            display:flex;
        }
    </style>
</body>

<script>

        let bgjeu = document.getElementById('bgjeu')
        let btn1 = document.getElementById('btn1');
        let btn2 = document.getElementById('btn2');
        let btn3 = document.getElementById('btn3');

        btn1.addEventListener('click', function() {
        bgjeu.style.backgroundColor = "green";
        });

        btn2.addEventListener('click', function() {
        bgjeu.style.backgroundColor = "yellow";
        });

        btn3.addEventListener('click', function() {
        bgjeu.style.backgroundColor = "red";
        });

        function rafraichir(){
            location.reload()
        }
        document.getElementById('btn4').style.display = 'none'
        function facile(){
            nbAlea= Math.floor(Math.random() * 11)+1
            document.getElementById("niveau").innerHTML =" Niveau facile : entre 1 et 10 !! Bonne chance"
            document.getElementById('btn2').style.display = 'none'
            document.getElementById('btn3').style.display = 'none'
            document.getElementById('btn4').style.display = ''
            
            
        }

        function Moyen(){
        
            nbAlea= Math.floor(Math.random() * 101)+1
            document.getElementById("niveau").innerHTML =" Niveau Moyen : entre 1 et 100 !! Bonne chance"
            document.getElementById('btn1').style.display = 'none'
            document.getElementById('btn3').style.display = 'none'
            document.getElementById('btn4').style.display = ''
            
        }

        function Difficile(){
            nbAlea= Math.floor(Math.random() * 1001)+1
            document.getElementById("niveau").innerHTML =" Niveau Difficile : entre 1 et 1000 !! Bonne chance"
            document.getElementById('btn1').style.display = 'none'
            document.getElementById('btn2').style.display = 'none'
            document.getElementById('btn4').style.display = ''
            
        }

        
        let nbessaie

        function cinq(){
            nbessaie = 4 
            for (let index = 0; index < nbessaie ; index++) {

                let creationDiv = document.createElement('div');
                creationDiv.innerHTML = '<div'
                creationDiv.id = "histon"+index
                creationDiv.style.height = "30px"
                document.querySelector('.histori').append(creationDiv);
            }
        }

        function dix(){
            nbessaie = 9 
            for (let index = 0; index < nbessaie ; index++) {

                let creationDiv = document.createElement('div');
                creationDiv.innerHTML = '<div'
                creationDiv.id = "histon"+index
                creationDiv.style.height = "30px"
                document.querySelector('.histori').append(creationDiv);
            }
        }

        function vingt(){
            nbessaie = 19
            for (let index = 0; index < nbessaie ; index++) {

                let creationDiv = document.createElement('div');
                creationDiv.innerHTML = '<div'
                creationDiv.id = "histon"+index
                creationDiv.style.height = "30px"
                document.querySelector('.histori').append(creationDiv);
            }
        }

        let historique=[];

        function calculfacile(){
            
            const nombre = parseInt(document.getElementById("number").value)
            
            
            var longueur = historique.push(document.getElementById("number").value)
            for (let i = 0; i < historique.length; i++) {
                if (i<nbessaie){
                const element = historique[i];
                document.getElementById("histon"+i).innerHTML = ` proposition ${i+1} : ${element}`
                }else{
                    alert("Vous Avez Perdu, veuillez rechoisir une difficulté");
                    location.reload()
                }
                
                
            }
            if (nombre == nbAlea){
                document.getElementById("ok").innerHTML = "Felicitation !!!!"
                
            }else if(nombre < nbAlea){
                document.getElementById("ok").innerHTML = "Non Ok la valeur chercher est plus grande"
            }else if(nombre > nbAlea){
                document.getElementById("ok").innerHTML = "Non Ok la valeur chercher est plus petite"
            }
        }


            
        

        
    </script>
</html>