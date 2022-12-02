<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_jeu/styles_jeu.css">
    
    <title>JEU</title>
</head>
<body>
    <div class="all">
        <div class="form">
            <h3>pour vaincre l’adversaire il faut le connaître. Qu’elle virus provoque les maladies sexuellement transmissibles ?</h3>
            <form action="jeu.php" method="post">
                <p>1)Coronavirus</p>
                <p>2)VIH( Virus de l'Immunodéficience Humaine)</p>
                <p>3)la grippe</p>
                <p>4) La variole du singe</p>
                
                <input type="text" name="Q1">

                <input type="submit" name="submit1" value= "verifier">
                <?php
                
                    if (isset($_POST["submit1"])){
                        if($_POST["Q1"]==2){
                            echo "bien jouer ! ";
                        }
                        else{
                            echo "c'etait la reponse 2";
                        }
                    }
                    
                ?>
            </form>

        </div>
        <div class="form">
            <h3>S’est tu si parmi les solutions le virus se transmet ?</h3>
            <form action="jeu.php" method="post">
                <p>1)Par vois rectale</p>
                <p>2) Par une poigné de main</p>
                <p>3) Par un baissé </p>
                <p>4) Par la nourriture</p>

                <input type="text" name="Q2">
                <input type="submit" name="submit2" value= "verifier">
                <?php
                
                    if (isset($_POST["submit2"])){
                        if($_POST["Q2"]==1){
                            echo "bien jouer ! ";
                        }
                        else{
                            echo "c'etait la reponse 1";
                        }
                    }
                    
                ?>
            </form>

        </div>
        <div class="form">
            <h3>Connait tu un moyen de te protéger face à ce virus ?</h3>
            <form action="jeu.php" method="post">
                <p>1)Uriner avant un rapport</p>
                <p>2)Par une poigné de main </p>
                <p>3)Par un baissé </p>
                <p>4)Par la nourriture</p>
                

                <input type="text" name="Q3">
                <input type="submit" name="submit3" value= "verifier">

                <?php
                
                if (isset($_POST["submit3"])){
                    if($_POST["Q3"]=2){
                        echo "bien jouer ! ";
                    }
                    else{
                        echo "c'etait la reponse 2";
                    }
                }
                
            ?>
            </form>

        </div>
        <div class="form">
            <h3>Quel sont un des symptômes ?</h3>
            <form action="jeu.php" method="post">
                <p>1)Avoir la vision trouble </p>
                <p>2) Le gland de lait </p>
                <p>3)Les yeux rouges  </p>
                <p>4)des douleurs articulaires</p>
                

                <input type="text" name="Q4">

                <input type="submit" name="submit4" value= "verifier">
                
                <?php
                
                if (isset($_POST["submit4"])){
                    if($_POST["Q4"]=4){
                        echo "bien jouer ! ";
                    }
                    else{
                        echo "c'etait la reponse 4";
                    }
                }
                
                ?>
            </form>
            


    </div>

</body>
</html>