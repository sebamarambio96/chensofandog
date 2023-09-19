<section style="height: auto;" id="frames"> 

<div class="container" id="framed">
      <div class="sidebar">
        <div style="background: linear-gradient(229.99deg, #11dee9 -26%, #017e8b 145%);">
          <h1>Hayakawa Aki</h1>
        </div>
        <div style="background: linear-gradient(215.32deg, #f90306 -1%, #9e0706 124%);">
          <h1>Makima</h1>
        </div>
        <div style="background: linear-gradient(221.87deg, #e499e3 1%, #e4509f 128%);">
          <h1>Pawā</h1>
        </div>
        <div style="background: linear-gradient(220.16deg, #ffe101 -8%, #f39102 138%);">
          <h1>Denji</h1>
         
        </div>
      </div>
      <div class="main-slide">
        <div style="background-image: url('{{asset('/images/frm_denji.jpg')}}');">
       </div>
        <div style="background-image: url('{{asset('/images/frm_power.png')}}');">
        </div>
        <div style="background-image: url('{{asset('/images/frm_makima.png')}}');">
        </div>
        <div style="background-image: url('{{asset('/images/frm_hayakawa.png')}}');">
        </div>
      </div>
      <div class="controls">
        <button class="down-button">
          <i class="fas fa-arrow-down"></i>
        </button>
        <button class="up-button">
          <i class="fas fa-arrow-up"></i>
        </button>
      </div>
    </div>

</section>

<style>
#framed {
  position: relative; 
  overflow: hidden;
  max-width: 100vw;
  height: 100vh;         
}

.sidebar {
  height: 100%;
  width: 35%;
  position: absolute;
  top: 0;
  left: 0;
  transition: transform 0.5s ease-in-out;
}

.sidebar > div {
  height: 100%;
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  color: #fff;
}

.sidebar h1 {
  font-size: 40px;
  margin-bottom: 10px;
  margin-top: -30px;
}

.main-slide {
  height: 100%;
  position: absolute;
  top: 0;
  left: 35%;
  width: 65%; 
  transition: transform 0.5s ease-in-out;
}

.main-slide > div {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  height: 100%;
  width: 100%;
}

button {
  background-color: #fff;
  border: none;
  color: #aaa;
  cursor: pointer;
  font-size: 16px;
  padding: 15px;
}

button:hover {
  color: #222;
}

button:focus {
  outline: none;
}

.container .controls button {
  position: absolute;
  left: 35%;
  top: 50%;
  z-index: 100;
}

.container .controls .down-button {
  transform: translateX(-100%);
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
}

.container .controls .up-button {
  transform: translateY(-100%);
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}
</style>

<script>
const upBtn = document.querySelector('.up-button')
const downBtn = document.querySelector('.down-button')
const sidebar = document.querySelector('.sidebar')
const mainSlide = document.querySelector('.main-slide')
const slidesCount = mainSlide.querySelectorAll('div').length
const container = document.querySelector('.container')

let activeSlideIndex = 0

sidebar.style.top = `-${ (slidesCount - 1) * 100}vh`

upBtn.addEventListener('click', ( ) => {
    changeSlide('up')
})

downBtn.addEventListener('click', ( ) => {
    changeSlide('down')
})

function changeSlide(direction){

    if (direction === 'up') {
        activeSlideIndex++
        if (activeSlideIndex === slidesCount){
            activeSlideIndex = 0
        }
    } else if (direction === 'down'){
        activeSlideIndex--
        if (activeSlideIndex < 0){
            activeSlideIndex = slidesCount - 1
        }
    }

    const height = container.clientHeight

    mainSlide.style.transform = `translateY(-${activeSlideIndex * height}px)`
    sidebar.style.transform = `translateY(${activeSlideIndex * height}px)`
}
</script>