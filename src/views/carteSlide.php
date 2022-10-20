<!-- <div class="slide">
    Bonjour slide
</div>
<img id ="img" src="base64;" alt=""> -->
<section class="boxSlider" style="display:none;" id="boxGauche">
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
            <section class="carousel-slide">
                <div class="carteImg">

                    <a href=" https://www.hardrockcafe.com/location/brussels/" target="_blank">
                        <div class="titreImg">Hard Rock Cafe</div>
                    </a>
                    <img id="lastClone" src="./assets/images/bar/hard Rock Cafe.jpeg">

                </div>
                <div class="carteImg">
                    <a href="https://www.thesistercafe-brussels.com/" target="_blank">
                        <div class="titreImg">The Sister Restaurant</div>
                    </a>
                    <img src="./assets/images/restaurant/the sister.jpg">

                </div>
                <div class="carteImg">
                    <a href="https://fr-fr.facebook.com/barlecercueil/" target="_blank">
                        <div class="titreImg">Le Cercueil Bar</div>
                    </a>
                    <img src="./assets/images/bar/Le Cercueil.png">
                </div>
                <div class="carteImg">
                    <a href=" https://www.hardrockcafe.com/location/brussels/" target="_blank">
                        <div class="titreImg">Hard Rock Cafe</div>
                    </a>
                    <img src="./assets/images/bar/hard Rock Cafe.jpeg">
                </div>
                <div class="carteImg">
                    <a href="https://www.thesistercafe-brussels.com/" target="_blank">
                        <div class="titreImg">The Sister Restaurant</div>
                    </a>
                    <img id="firstClone" src="./assets/images/restaurant/the sister.jpg">

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
?>

<script>
    let datas = <?= $json ?>;
    console.log(datas);

    // permet de faire  appelle a la DB via un const qui va stocker la DB (pod)


    $('.lien').on('click', e => {
        e.preventDefault();
        let id = e.currentTarget.getAttribute('data-id')
        console.log(id);
        // récupérer dans le tableau
        let lieu = datas.find(p => p[0] == id);
        console.log(lieu);
        titre.innerText = lieu[1];
        description.innerText = lieu[2];
        imgPoi.src = "." + lieu[4];
        urlPoi.href = lieu[3];
        boxGauche.style.display = "block";

        // $('#img').attr('src', currentEvent.img);


    });

    $('.CloseBox').on('click', e => {
        boxGauche.style.display = "none";
    });
</script>