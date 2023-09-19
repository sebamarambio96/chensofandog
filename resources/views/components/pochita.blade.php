<?php 
  $quotes = array('Kevin', 'Jeremy', 'Sara'); 
  $randoq = $quotes[array_rand($quotes)]; 
?> 

<section id="pochita">
  <div class="container-fluid text-center">
  <h6 class="text-center pt-2" id="sect-title"">Pochita's Picks</h6>

    <div class="container text-center mt-4">
      <div class="row row-cols-2 justify-content-around">

      <div class="col mt-5" id="gregg"> 
         <button id="popovitch" class="btn bg-transparent border-0  float-start" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="left" data-bs-content="<?=$randoq?>">
        <img src="{{asset('/images/imgsrc/pochita_img.png')}}" class="rounded float-start mt-3 ms-5" id="plcdd">
         </button> 
      </div>

        <div class="col" style="margin-left: -150px;">
           <ul class="image-list-small">
    <li>
     <a href="#" style="background-image: url('assets/images/pictures/bahnhoff.jpg');"></a>
     <!-- <div class="details">
        <h3><a href="#">In the subway</a></h3>
        <p class="image-author">Matt Stone</p>
      </div> -->
    </li>
    <li>
      <a href="#" style="background-image: url('assets/images/pictures/industrial-mech.jpg');"></a>
     <!-- <div class="details">
        <h3><a href="#">Industrial</a></h3>
        <p class="image-author">Earnest Leming</p>
      </div> -->
    </li>
    <li>
      <a href="#" style="background-image: url('assets/images/pictures/colosseum.jpg');"></a>
      <!-- <div class="details">
        <h3><a href="#">When in Rome..</a></h3>
        <p class="image-author">Edward Flint</p>
      </div> -->
    </li>
    <li>
      <a href="#" style="background-image: url('assets/images/pictures/sahale-wa.jpg');"></a>
     <!-- <div class="details">
        <h3><a href="#">Mountain Top</a></h3>
        <p class="image-author">Rick Alpine</p>
      </div> --> 
    </li>
    <li>
      <a href="#" style="background-image: url('assets/images/pictures/tonemapped.jpg');"></a>
     <!-- <div class="details">
        <h3><a href="#">Vienna Adventure</a></h3>
        <p class="image-author">Stacy River</p>
      </div> -->
    </li>
    <li>
      <a href="#" style="background-image: url('assets/images/pictures/sands-of-life.jpg');"></a>
     <!-- <div class="details">
        <h3><a href="#">Magnificent beach</a></h3>
        <p class="image-author">Frank Stone</p>
      </div> -->
    </li>
  <li>
      <a href="#" style="background-image: url('assets/images/pictures/sahale-wa.jpg');"></a>
     <!-- <div class="details">
        <h3><a href="#">Mountain Top</a></h3>
        <p class="image-author">Rick Alpine</p>
      </div> --> 
    </li>
    <li>
      <a href="#" style="background-image: url('assets/images/pictures/tonemapped.jpg');"></a>
     <!-- <div class="details">
        <h3><a href="#">Vienna Adventure</a></h3>
        <p class="image-author">Stacy River</p>
      </div> -->
    </li>
    <li>
      <a href="#" style="background-image: url('assets/images/pictures/sands-of-life.jpg');"></a>
     <!-- <div class="details">
        <h3><a href="#">Magnificent beach</a></h3>
        <p class="image-author">Frank Stone</p>
      </div> -->
    </li>
   </ul>
        </div>
      
      </div>
    </div> 
     
  </div>
</section>

<style>
#pochita {
  background-color: #FFD580;
}

#plcdd {
  height: 18.75rem; 
  padding-left: -10px; 
  pointer-events:none;
}

.image-list-small {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0 auto;
  text-align: center;
  max-width: 640px; 
  padding: 0;
}

.image-list-small li {
  display: inline-block;
  width: 131px; 
  margin: 0 12px 30px;
}

.image-list-small li > a {
  display: block;
  text-decoration: none;
  background: lightgray; 
  background-repeat: no-repeat;
  height: 137px;
  margin: 0;
  padding: 0;
  border: 1px solid #ffffff;
  outline: 1px solid #d0d0d0;
  box-shadow: 0 2px 1px #DDD; 
}

.image-list-small .details {
  margin-top: 13px;
}

.image-list-small .details h3 {
  display: block;
  font-size: 12px;
  margin: 0 0 3px 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.image-list-small .details h3 a {
  color: #303030;
  text-decoration: none;
}

.image-list-small .details .image-author {
  display: block;
  color: #717171;
  font-size: 11px;
  font-weight: normal;
  margin: 0;
}

.image-list-small:hover a {
  opacity:0.2;
}
.image-list-small a:hover {
  opacity:1;
}
</style>

<script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-3.5.1.min.js') }}"></script>

<script>
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));

document.getElementById("gregg").addEventListener("mouseleave", function() { 
 $('#popovitch').popover('dispose');
 $('#popovitch').popover({ placement : 'left', trigger: 'hover', content : 'Here it is!' }); 
});
</script>