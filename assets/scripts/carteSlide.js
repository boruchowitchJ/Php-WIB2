/*const boxSlider =document.querySelector('.boxSlider');
const CloseBox =document.querySelector('.CloseBox');


CloseBox.addEventListener('click',()=>{
    boxSlider.classList.add('.closeSlide');
    console.log(boxSlider);
})*/


const carouselSlide = document.querySelector('.carousel-slide');
const carouselImage = document.querySelector('.carousel-slide img');


//Buttons
const prevBtn = document.querySelector('#prevButton');
const nextBtn = document.querySelector('#nextButton');

//Counter

let counter = 1;
let size = 470;
carouselSlide.style.transform ='translateX(' + (-size * counter) + 'px)';

//Button Listeners

nextBtn.addEventListener('click',()=>{
  carouselSlide.style.transition = "transform 0.4s ease-in-out";
  counter++;
  carouselSlide.style.transform ='translateX(' + (-size * counter) + 'px)';

})

prevBtn.addEventListener('click',()=>{
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter--;
    carouselSlide.style.transform ='translateX(' + (-size * counter) + 'px)';
  
  })

  carouselSlide.addEventListener('transitionend',()=>{
    if(carouselImage[counter].id === 'lastClone'){
        console.log("none");
        carouselSlide.style.transition = "none";   
    }
  })
