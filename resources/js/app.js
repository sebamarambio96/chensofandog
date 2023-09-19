require('./bootstrap');
     
const myCarouselElement = document.querySelector('#carouselExampleIndicators');

  const carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: 2000,
    touch: false
  })
     
var powClass = document.getElementById('pow').className;
var status = powClass.includes('d-none'); 
  
document.getElementById("pow_menu").addEventListener("click", function() { 
  if(status === "true"){
    document.getElementById('pow').className = "_power";
    status = !status;
  } else if(status == "false"){
    document.getElementById('pow').className = "d-none";
    status = !!"false"; 
  } 
}); 
