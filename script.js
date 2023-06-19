let menu=document.querySelector('.header i');
let navbar=document.querySelector('.header .navbar');
menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
var swiper = new Swiper(".home-slider", {
  loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


var swiper = new Swiper(".reviews-slider",{
    loop:true,
    spaceBetween: 20,
    autoHeight:true,
    grabCursor:true,
    breakpoints: {
        450: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        991: {
          slidesPerView: 4,
        },
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
});

let loadMorebtn=document.querySelector('.packages .load-more .btn');
let currentItem=6;

loadMorebtn.onclick=()=>{
    let boxes=[...document.querySelectorAll('.packages .box-container .box')];
    for(var i=currentItem;i<currentItem+6;i++){
      boxes[i].style.display='inline-block';
    };
    currentItem+=6;
    if(currentItem>=boxes.length){
      loadMorebtn.style.display='none';
    }
};