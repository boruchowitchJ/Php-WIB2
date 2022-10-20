<!-- <div class="slide">
    Bonjour slide
</div>
<img id ="img" src="base64;" alt="">style="display:none;" -->
<section class="boxSlider"  id="boxGauche">
    <div class="HeaderBoxSlider">
        <div class="SearchSlider">

            <label for="rechercheSlide"></label>

            <input id="rechercheSlide" type="search" placeholder="Search">

        </div>

        <a href="?page=carte"> <img class="CloseBox" alt="Close" src="./assets/images/illu/close.png"></a>
    </div>
    <div class="BoxContainer">
        <figure class="BoxImagePOI">
            <img class="imagePOI" id="imgPoi">
        </figure>
        <div class="container-aside">
            <!-- Infos POI  -->
            <h2 class="titlePOI" id="titre"></h2>
            <p class="DescPOI" id="description"></p>
            <a target="_blank" id="urlPoi">
                <div class="UrlPOI">
                    <img class="imgURL" src="./assets/images/illu/location.png">
                    <h3>ITINERAIRE</h3>
                </div>
            </a>
            <!-- The place around -->
            <h2 class="AdvPOI"> The Place Around</h2>
        </div>
        <div class="carousel-container">
            <div class="carouselNavigation">
                <div id="prevButton"></div>
                <div id="nextButton"></div>
            </div>
            <!-- image3-->
            <section class="carousel-slide">
                <div class="carteImg">

                    <a id="URLimg3" href=" https://www.hardrockcafe.com/location/brussels/" target="_blank">
                        <div  id="Titreimg3"  class="titreImg">Hard Rock Cafe</div>
                    </a>
                    <img id="img3" class="lastClone" src="./assets/images/bar/hard Rock Cafe.jpeg">

                </div>
                <!-- image1-->
                <div class="carteImg">
                    <a  id="URLimg1" href="https://www.thesistercafe-brussels.com/" target="_blank">
                        <div  id="Titreimg1" class="titreImg">The Sister Restaurant</div>
                    </a>
                    <img   id="img1" src="./assets/images/restaurant/the sister.jpg">

                </div>
                <!-- image2-->
                <div  class="carteImg">
                    <a  id="URLimg2"  href="https://fr-fr.facebook.com/barlecercueil/" target="_blank">
                        <div  id="Titreimg2"  class="titreImg">Le Cercueil Bar</div>
                    </a>
                    <img id="img2" src="./assets/images/bar/Le Cercueil.png">
                </div>
                   <!-- image3-->
                <div class="carteImg">
                    <a id="URLimg3" href=" https://www.hardrockcafe.com/location/brussels/" target="_blank">
                        <div id="Titreimg3" class="titreImg">Hard Rock Cafe</div>
                    </a>
                    <img  id="img3" src="./assets/images/bar/hard Rock Cafe.jpeg">
                </div>
                 <!-- image1-->
                <div class="carteImg">
                    <a  id="URLimg1" href="https://www.thesistercafe-brussels.com/" target="_blank">
                        <div id="Titreimg1" class="titreImg">The Sister Restaurant</div>
                    </a>
                    <img id="img1" class="firstClone" src="./assets/images/restaurant/the sister.jpg">

                </div>
            </section>

        </div>

        <!-- Reviews -->
        <section class="containerReviews">
            <div class="ReviewsPOI">
                <h2> Reviews</h2>
            </div>
            <div class="ReviewsUserName">
                <h3><?= $_SESSION['name'] ?></h3>

            </div>

            <input type="text" class="ReviewsText">

            </input>
            <div class="ReviewsComment">
                <input class="btn_comment" id="btn_comment" type="submit" name="comment" value="Comment">
            </div>
        </section>


    </div>
</section>







<!-- commentaire  mettre tous les $pois dans une DB -->
<?php
// récupérer depuis la db
include("src/db/db.php");

$requete = "SELECT * FROM poi";
$stmt = $mysqlClient->prepare($requete);
$stmt->execute();
$data = $stmt->fetchAll();
// var_dump($data);
// die;
$json = json_encode($data);
// var_dump($json);




// récupérer les Dev-poi depuis la db
$requeteDiv = "SELECT * FROM poi_Div";

$stmtDiv = $mysqlClient->prepare($requeteDiv);
$stmtDiv->execute();
$data2 = $stmtDiv->fetchAll();
$json2 = json_encode($data2);
 //var_dump($json2);

?>

<script>
    let datas = <?= $json ?>;
    //console.log(datas);
    let datasDiv =<?= $json2 ?>;
    console.log(datasDiv);

    // permet de faire  appelle a la DB via un const qui va stocker la DB (pod)


    $('.lien').on('click', e => {
        e.preventDefault();
        let id = e.currentTarget.getAttribute('data-id')
        //console.log(id);
        // récupérer dans le tableau
        let lieu = datas.find(p => p[0] == id);

      
      
        let Div= datasDiv.find(d =>d[0] == id );
        console.log(Div);
        //console.log(lieu);
        titre.innerText = lieu[1];
        description.innerText = lieu[2];
        imgPoi.src = "." + lieu[4];
        urlPoi.href = lieu[3];
        // boxGauche.style.display = "block";

      // récupérer les DevPOI dans le tableau 


    });

    $('.CloseBox').on('click', e => {
        boxGauche.style.display = "none";
    });
</script>