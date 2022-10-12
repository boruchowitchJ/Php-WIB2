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
                <div class="UrlPOI">
                    <img class="imgURL" src="./assets/images/illu/location.png">
                    <h3>ITINERAIRE</h3>
                </div>
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

                <div class="titreImg">Hard Rock Cafe</div>
                <img id="lastClone" src="./assets/images/bar/hard Rock Cafe.jpeg">
            
             </div>
             <div class="carteImg">
                <div class="titreImg">The Sister Restaurant</div>
                <img src="./assets/images/restaurant/the sister.jpg">
                        
            </div> 
            <div class="carteImg">
                <div class="titreImg">Le Cercueil Bar</div>  
                <img src="./assets/images/bar/Le Cercueil.png">
            </div>
            <div class="carteImg">
                <div class="titreImg">Hard Rock Cafe</div>
                <img src="./assets/images/bar/hard Rock Cafe.jpeg"> 
            </div>
            <div class="carteImg">
                <div class="titreImg">The Sister Restaurant</div>  
                <img id="firstClone" src="./assets/images/restaurant/the sister.jpg"> 
         
            </div> 
        </section>
     
    </div>
        
        
        
        
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




