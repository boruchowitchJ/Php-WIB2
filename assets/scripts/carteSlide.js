/*const boxSlider =document.querySelector('.boxSlider');
const CloseBox =document.querySelector('.CloseBox');


CloseBox.addEventListener('click',()=>{
    boxSlider.classList.add('.closeSlide');
    console.log(boxSlider);
})*/


const carouselSlide = document.querySelector('.carousel-slide');
const carouselImage = document.querySelectorAll('.carousel-slide img');



//Buttons
const prevBtn = document.querySelector('#prevButton');
const nextBtn = document.querySelector('#nextButton');

//Counter

let counter = 1;
let size = carouselImage[0].clientWidth;
carouselSlide.style.transform ='translateX(' + (-size * counter) + 'px)';

//Button Listeners

nextBtn.addEventListener('click',()=>{
  if(counter >= carouselImage.length-1) return;
  carouselSlide.style.transition = "transform 0.4s ease-in-out";
  counter++;
  carouselSlide.style.transform ='translateX(' + (-size * counter) + 'px)';

})

prevBtn.addEventListener('click',()=>{
  if (counter <= 0)return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter--;
    carouselSlide.style.transform ='translateX(' + (-size * counter) + 'px)';
  
  })

  carouselSlide.addEventListener('transitionend',()=>{

    if(carouselImage[counter].id === 'lastClone'){
        carouselSlide.style.transition = "none";
        counter = carouselImage.length -2;  
        carouselSlide.style.transform ='translateX(' + (-size * counter) + 'px)';
   
    }
    if(carouselImage[counter].id === 'firstClone'){
      carouselSlide.style.transition = "none";
      counter = carouselImage.length - counter;  
      carouselSlide.style.transform ='translateX(' + (-size * counter) + 'px)';
 
  }
  })
 
