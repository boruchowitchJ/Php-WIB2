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
       
                <div id="prevButton"></div>
                <div id="nextButton"></div>
            
            
           
            <section class="carousel-slide">
                <!-- image3-->

                <!-- <div class="carteImg">
                    <a id="URLimg3" target="_blank">
                        <div id="Titreimg3" class="titreImg" ></div>
                    </a>
                    <img id="img3" >

                </div> -->
                    <!-- image2-->
                    <div class="carteImg">
                        <div class="boxNavigation"></div>
                    <a  id="URLimg2"  target="_blank">
                        <div id="Titreimg2" class="titreImg" ></div>
                    </a>
                    <img id="img2" >
                </div>
                 <!-- image1-->
                <div class="carteImg">
                <div class="boxNavigation"></div>
                    <a id="URLimg1" target="_blank">
                        <div  id="Titreimg1" class="titreImg" ></div>
                    </a>
                    <img id="img1" class="lastClone" >

                </div>
              
                <!-- image3-->
                <div class="carteImg">
                <div class="boxNavigation"></div>
                    <a id="URLimg3"  target="_blank">
                        <div  id="Titreimg3" class="titreImg"></div>
                    </a>
                    <img id="img3"     class="firstClone">
                </div>
                <!-- image1-->
                <!-- <div class="carteImg">
                    <a id="URLimg1" target="_blank">
                        <div  id="Titreimg1" class="titreImg" ></div>
                    </a>
                    <img  id="img1"  >

                </div> -->
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



<script src="./assets/scripts/carteSlide.js"></script>




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
    let datasDiv = <?= $json2 ?>;
    //console.log(datasDiv);

    // permet de faire  appelle a la DB via un const qui va stocker la DB (pod)


    $('.lien').on('click', e => {
        e.preventDefault();



        boxGauche.style.display = "flex";

        let id = e.currentTarget.getAttribute('data-id')


        datasDivPOI = datasDiv.filter((item) => { 
           
            if (item.id_poi == id)
                return item
                
                
        })

        
       console.table(datasDivPOI);
       for (let i = 0; i < datasDivPOI.length; i++) {
        const element = datasDivPOI[i];
//   const divName=datasDivPOI[2][2];
// console.table(element)
//    console.log(divName);
        
   Titreimg1.innerText = datasDivPOI[0][2];
     img1.src =datasDivPOI[0][3];
    URLimg1.href =datasDivPOI[0][4];
    //im2
    Titreimg2.innerText = datasDivPOI[1][2];
     img2.src =datasDivPOI[1][3];
    URLimg2.href =datasDivPOI[1][4];
    //img3
    Titreimg3.innerText = datasDivPOI[2][2];
     img3.src =datasDivPOI[2][3];
    URLimg3.href =datasDivPOI[2][4];

       }
     
        // datasDivPOI.forEach(element => {
        //     console.table(datasDivPOI[0].element[2]);
            	
           //let Div0=element[0][2];
            //console.table(Div0);
        //     Titreimg3.innerText = element[2];
        // img3.src =element[3];
        // URLimg3.href =element[4];

        // });
       


        // let slideImage = document.getElementById("idImage")
        // datasDiv.forEach((block) => {
        //     slideImage.innerHTML += slideImage.innerHTML = `<div class="carteImg">
        //                                                         <a id="URLimg${block.id}" href="${block.URL}" target="_blank">
        //                                                             <div  id="Titreimg${block.id}"  class="titreImg">${block.title}</div>
        //                                                         </a>
        //                                                         <img id="img${block.id}" class="lastClone" src="${block.images}">
        //                                                     </div>`
        // })

        // console.log(slideImage)




        //console.log(id);
        // récupérer dans le tableau
        let lieu = datas.find(p => p[0] == id);
        //console.log(lieu);
        titre.innerText = lieu[1];
        description.innerText = lieu[2];
        imgPoi.src = "." + lieu[4];
        urlPoi.href = lieu[3];


        // récupérer les DevPOI dans le tableau 


    });

    $('.CloseBox').on('click', e => {
        boxGauche.style.display = "none";
    });
</script>
