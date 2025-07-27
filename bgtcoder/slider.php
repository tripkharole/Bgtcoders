<!DOCTYPE html>
<html>
<head>
<title>Slider in CSS</title>
<style>

body{
    background-color: rgb(58, 58, 58);
    margin:0;
    padding: auto;
}
.carousel-container {

  position:relative ;
  margin: 0 0;

}

.navigation-buttons .previous {
  position: absolute;
  z-index: 10;
  font-size: 25px;
  top: 40%;
  left: 10px;
  font-weight: 700;
}

.navigation-buttons .next {
  right: 10px;
  position: absolute;
  font-size: 25px;
  z-index: 10;
  top: 50%;
}

.navigation-buttons .nav-btn {
  background: rgba(255, 255, 255, 0.55);
  cursor: pointer;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 5px;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.4);
}

.navigation .nav-btn:hover {
  background: white;
}

.slider-carousel {
  margin-top: 0;
  transition: all 0.10s ease;

}
.slider-carousel img {
  height: 686px;
  width: 1920px; ;
  transition: all 0.10s ease;
  filter:brightness(80%);
  -webkit-filter: blur(4px);
  

}

.images {
  position: relative;
  display: none;
}

.main {
  display: block;
}
.text {
  color: #0a5071;
  font-size: 60px;
  padding: 8px 12px;
  position: absolute;
  bottom: 40%;
  width: 100%;
  text-align: center;
  
  
}

</style>
</head>
<body>
    

<div id="parent-container">

<div class="navigation-buttons">
  <div class="previous nav-btn"><</div>
  <div class="next nav-btn">></div>
</div>

<div class="slider-carousel">
  <div class="images main">
    <img src="1.jpg" alt="flower 1" />
    <div class="text"><b> WELCOME <br>
     TO 
    <br> 
    BGTCODERS</b></div>

    
  </div>
<div class="images">
    <img src="2.jpg" alt="flower 2" />
    <div class="text"><b> WELCOME <br>
     TO 
    <br> 
    BGTCODERS</b></div>
  </div>
  <div class="images">
    <img src="3.jpg" alt="flower 3" />
    <div class="text"><b> WELCOME <br>
     TO 
    <br> 
    BGTCODERS</b></div>

    
  </div>      
</div>

</div>

<script>

    const previous = document.querySelector('.previous');
    const next = document.querySelector('.next');
    const images = document.querySelector('.slider-carousel').children;
    const totalImages = images.length;
    let currentIndex = 0;


	// Event Listeners to previous and next buttons
    previous.addEventListener('click', () => {
      previousImage()
    })

    next.addEventListener('click', () => {
      nextImage();
    })
    
    setInterval(()=>{
    	nextImage();
    },2000);
    
    // Function to go to next Image
    function nextImage(){

      images[currentIndex].classList.remove('main');
    	if(currentIndex == totalImages-1){
        	currentIndex = 0;
        }
        else{
        	currentIndex++;
        }

      images[currentIndex].classList.add('main');
      
    }
    
    // Function to go to previous Image
    function previousImage(){

      images[currentIndex].classList.remove('main');
    	if(currentIndex == 0){
        	currentIndex = totalImages-1;
        }
        else{
        	currentIndex--;
        }
    
      images[currentIndex].classList.add('main');

    }
    
</script>

</body>
</html>
