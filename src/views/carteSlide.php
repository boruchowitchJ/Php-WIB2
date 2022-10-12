<!-- <div class="slide">
    Bonjour slide
</div>
<img id ="img" src="base64;" alt=""> -->
<section class="boxSlider">
<div class="HeaderBoxSlider">
            <div class="SearchSlider">
           
                <label for="rechercheSlide"></label>
                
                 <input id="rechercheSlide" type="search" placeholder="Search">
           
            </div>
            
            <a href="?page=carte"> <img class="CloseBox"  alt="Close" src="./assets/images/illu/close.png"></a>
</div>
<div class="BoxContainer">
        <figure class="BoxImagePOI">
        <img class="imagePOI" src="./assets/images/place/GrandPlace.jpg">
        </figure>
        <div class="container-aside">
        <!-- Infos POI  -->
                <h2 class="titlePOI">Grand Place</h2>
                    
                <p class="DescPOI">La Grand-Place (Grote Markt en flamand) est non seulement le centre géographique, historique et commercial de Bruxelles, mais aussi l’une des places les plus importantes en Europe. Cette place pavée animée fait partie du plus bel ensemble architectural du XVIIe siècle de Belgique.</p>
                <a href="https://goo.gl/maps/tQUjZMoiKTAdqzqT7" target="_blank"><div class="UrlPOI">
                    <img class="imgURL" src="./assets/images/illu/location.png">
                     <h3>ITINERAIRE</h3>
                </div></a>
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

            <a href=" https://www.hardrockcafe.com/location/brussels/" target="_blank">  <div class="titreImg">Hard Rock Cafe</div></a>
                 <img id="lastClone" src="./assets/images/bar/hard Rock Cafe.jpeg">
            
             </div>
             <div class="carteImg">
             <a href="https://www.thesistercafe-brussels.com/" target="_blank"><div class="titreImg">The Sister Restaurant</div></a>
                  <img src="./assets/images/restaurant/the sister.jpg">
                        
            </div> 
            <div class="carteImg">
            <a href="https://fr-fr.facebook.com/barlecercueil/" target="_blank"><div class="titreImg">Le Cercueil Bar</div> </a> 
               <img src="./assets/images/bar/Le Cercueil.png">
            </div>
            <div class="carteImg">
            <a href=" https://www.hardrockcafe.com/location/brussels/" target="_blank"><div class="titreImg">Hard Rock Cafe</div></a>
                 <img src="./assets/images/bar/hard Rock Cafe.jpeg"> 
            </div>
            <div class="carteImg">
            <a href="https://www.thesistercafe-brussels.com/" target="_blank"><div class="titreImg">The Sister Restaurant</div> </a> 
                <img id="firstClone" src="./assets/images/restaurant/the sister.jpg"> 
         
            </div> 
        </section>
     
    </div>
        
        <!-- Reviews -->
    <section class="containerReviews">
        <div class="ReviewsPOI">
        <h2 > Reviews</h2>
        </div> 
<div class="ReviewsUserName">
<h3>UserName</h3>

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
    $pois = [
        [ 'nom' => 'atomium', 'desc'=> 'test', 'img' => '/assets/images/place/atomium.jpg' ], 
        [ 'nom' => 'basilique', 'desc' => 'test2','img' => '/assets/images/place/basilique.jpg' ],

    ];
    $json = json_encode($pois);
?>

<script>
// permet de faire  appelle a la DB via un const qui va stocker la DB (pod)
    const pois = JSON.parse('<?= $json ?>');
    console.log(pois);
    
    $('.lien').on('click', e => {
        e.preventDefault();

        const currentEvent = pois.find(p => p.nom == e.currentTarget.getAttribute('data-place'));
        $('#img').attr('src', currentEvent.img);
        
        
    }); 
   
    
</script>




