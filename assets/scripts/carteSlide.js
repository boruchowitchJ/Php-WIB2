

const carouselSlide = document.querySelector('.carousel-slide');
const carouselImage = document.querySelectorAll('.carousel-slide img');

//Buttons
const prevBtn = document.querySelector('#prevButton');
const nextBtn = document.querySelector('#nextButton');

//Counter

let count = 1;// commencer par l'image n°1
let size1 = carouselImage[0].clientWidth;
carouselSlide.style.transform ='translateX(' + (-size1 * count) + 'px)';

//Button Listeners

nextBtn.addEventListener('click',()=>{
  if(count >= carouselImage.length-1) return;
  carouselSlide.style.transition = "transform 0.4s ease-in-out";
  count++;
  carouselSlide.style.transform ='translateX(' + (-size1 * count) + 'px)';

})

prevBtn.addEventListener('click',()=>{
  if (count <= 0)return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    count--;
    carouselSlide.style.transform ='translateX(' + (-size1 * count) + 'px)';
  
  })

  carouselSlide.addEventListener('transitionend',()=>{

    if(carouselImage[count].id === 'lastClone'){
        carouselSlide.style.transition = "none";
        count = carouselImage.length -2;  
        carouselSlide.style.transform ='translateX(' + (-size1 * count) + 'px)';
   
    }
    if(carouselImage[count].id === 'firstClone'){
      carouselSlide.style.transition = "none";
      count = carouselImage.length - count;  
      carouselSlide.style.transform ='translateX(' + (-size1 * count) + 'px)';
 
  }
  })
 
