<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once 'includes/head.php' ?>
    <title>Personal Herborist</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
    <script>
           get_content 		= async function(url) {
            return await fetch(url).then(function (response) {
              // The API call was successful!
              return response.text();
            }).then(function (html) {
              // This is the HTML from our response as a text string
              return html;
            }).catch(function (err) {
              // There was an error
              console.warn('Something went wrong.', err);
            });
        }  

		display_result	= async function(){
          	var result_text 	= await get_content('http://localhost:3000/api/read.php')	// onrecupere les data sous forme de texte
            console.log(result_text)
            var result_json		= JSON.parse(result_text.trim())
            console.log(result_json)

            var html 			= '<div class="wrapper" style="display:inline-block;width:100%;">' +'\n'
            for(let elem of result_json){
    	       	// html += '<div style="display:inline-block;width:30%;">'+elem.id+'</div>'
	            html +=' <div class="carre-coaching" style="">'+elem.nom+'</div> ' +'<br>\n'
            }
          	html +='</div>'
            
          	$('.list_elem').html(html)
            return result
        }
		setTimeout(function(){
          	display_result()
        },2000)
      
  	</script>
</head>


<body>
   <div class="container">
        <?php require_once 'includes/header.php' ?>

        <div class="content">
            <!--section bienvenue -->
            <section class="bienvenue">
                <div class="img-opacity">    
                    <p>Bienvenue chez</p>
                    <p>Personal Herborist</p>
                </div>
            </section>
            <!--section decouverte -->
            <section class="decouverte">
                <div class="round-container">
                    <p class="round animation" ><a  href="#">Découverte des plantes</a></p>
                    <p class="round animation"><a  href="#">Plantes <br> sur mesure</a></p>
                    <p class="round animation"><a  href="#">Potager <br> médicinal</a></p>
                </div>
            </section>
            <!--section citation -->
            <section>
                <h1 class="citation">Citation du jour...</h1>    
                <div>
                    <blockquote>"Une mauvaise herbe est une plante dont on n'a pas encore trouvé  les vertus."</blockquote>
                    <p>Ralph Waldo Emerson</p>
                </div>
            </section>
            <!--section coachings -->
            <section>
                <h2 class="h-section">Nos coachings</h2>
                <div class="liste-coaching">
                    <div>
                        <!--version test php pour affichage table coachings via lien api read -->
                        <?php
                            // $api_url = 'http://localhost:3000/api/read.php';
                            // $response = file_get_contents($api_url);
                            // $coachings = json_decode($response, true);
                            // foreach ($coachings as $coaching) {
                                // echo '<div class="coaching-block">'. $coaching['nom'] . '</div>';
                            // }
                        ?>
                        <span class="list_elem"></span>
                    </div>

                </div>
            </section>
            <!--section box -->
            <section>
            </section>
        </div>

        <?php require_once 'includes/footer.php' ?>
   </div> 

</body>

</html>