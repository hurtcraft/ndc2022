<!doctype html>
<html lang="en">

	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap demo</title>
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
		<link rel = "stylesheet" type = "text/css" href= "css_bootstrap/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href= "css/style.css">
	</head>

    <body>
<!----------------------------------------------Début de la navbar------------------------------------------------------>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./img/logo_sida.jpg" alt="sida" width="40" height="40">
                  </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="jeu.php">Jeu</a>

                        
                    </ul>
                    <form class="livre" >
                        <button class="openButton" onclick="openForm('myForm')"><img src="./img/logo_sida.jpg" alt="livre" width="40" height="40"></button>  
                    </form>
                </div>
            </div>
        </nav>
<!----------------------------------------------Fin de la navbar------------------------------------------------------>

<!----------------------------------------------Début du menu caché------------------------------------------------------>

        <div class="popup" id="myForm">
            <div>
                <h2>gqeqef</h2>

            </div>




            <button class="closeButton" onclick="closeForm('myForm')">Fermer</button>  
        </div>

<!----------------------------------------------Fin du menu caché------------------------------------------------------>




<!----------------------------------------------Début des paragraphes------------------------------------------------------>

        <div class="blocs">
            <div id ='premier_para'>
                <article id="titre">
                    <h1>Les infections sexuellement</h1>
                    <h1>transmissibles</h1>
                    <section>Les infections sexuellement transmissibles (IST), autrefois appelées maladies 
                        sexuellement transmissibles (MST), sont des infections pouvant être transmises lors des relations sexuelles, 
                        avec ou sans pénétration. Il existe plus d'une trentaine d'IST.
                    </section>
                </article>
            </div>

            <div id ='deuxieme_para'>
                <article id="information">
                    <h1>Description du jeu</h1>

                </article>

            </div>
            <a href="jeu.php"><button type="button" class="bouton">Jouer au jeu</button></a>

            
        </div>
        
       
        
<!----------------------------------------------Fin des paragraphes------------------------------------------------------>  

<!----------------------------------------------Début du footer------------------------------------------------------>
        <footer>
            <h3>Liens vers les sites d'aide </h3>
            <a href="https://www.sida-info-service.org/">
                <img src="./img/sida_info_service.png" alt="sida_info_service" width="40" height="40">

            </a>
            <a href="https://www.sexualites-info-sante.fr/sexualites-osons-en-parler/" width="40" height="40">
                <img src="./img/SIS.png" alt="SIS">

            </a>
            <p>Numéro de contact : <b>0 800 000 69 07</b></p>
        </footer>
<!----------------------------------------------Fin du footer------------------------------------------------------>
<!----------------------------------------------Début des codes JS------------------------------------------------------>

        <script>
            function openForm(id){
            document.getElementById(id).style.display="block";
            }
            function closeForm(id){
            document.getElementById(id).style.display="None";
            }
            
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!----------------------------------------------Fin des codes JS------------------------------------------------------>
    </body>





</html>