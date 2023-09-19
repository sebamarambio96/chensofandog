<?php 
  $birthDate = "10/10/1992";
  $birthDate = explode("/", $birthDate);
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
?>

<section id="fujimoto">
  <div class="container-fluid text-center">
      <h6 class="text-center pt-2" id="sect-title">Tatsuki Fujimoto</h6>

      <div class="container-fluid">
        <div class="row mt-4">
          <div class="col-md-3">
            <img src="{{asset('/images/imgsrc/tatsfuji.jpg')}}" class="rounded float-start mt-3 ms-5" alt="Tatsuki Fujimoto" style="height: 18.75rem; padding-left: 60px;"> 
          </div>
          <div class="col-md-6 offset-md-1 mt-2">
            <p class="p-2 small">Tatsuki Fujimoto is a currently active mangaka best known for <u>Fire Punch</u> and <u>Chainsaw Man</u>. Fujimoto's works are noted for referencing his love of movies, a distinctively "scratchy" artstyle with high levels of detail, and writing rich worlds with distinctive characters. They're also well-known for having a commonality of existential dread and nihilistic despair... and yet a surprising amount of hope when faced against such overwhelming odds and sadness.</p>
            <p class="p-2 small"> Fujimoto started drawing at an early age. He had no preparatory schools available near his home, so he went to painting classes and graduated in Western painting from Tohoku University of Art and Design in Yamagata, Yamagata Prefecture in 2014. After graduating, he made several one shots, participated in Manga Awards Contents, winning some of them, and was eventually noticed by ONE and Sui Ishida.  He made his official debut in Jump SQ.19 with <u>"Shikaku"</u> in 2014 and the following year published <u>"Yogen no Nayuta"</u> in Jump SQ. </p> 
            <p class="p-2 small"> Tatsuki made his first serialization with <u>Fire Punch</u> in 2016 which ran for eight volumes and was published on the Jump+ site. After his Fire Punch serialization ended, Tatsuki published a new oneshot for Jump SQ titled <u>Imouto no Ane</u>. In December 2018, he started a new serialization <u>Chainsaw Man</u> in Weekly Shonen Jump. It's popularity has thrived across many streaming platforms around the world. A two-volume collection of Fujimoto's previous one-shots, entitled <u>Tatsuki Fujimoto Before Chainsaw Man</u>, was released at the end of 2021.</p>
          </div>
         </div>
          <div class="row p-2 small" style="margin-top: -120px;">
            <div class="col-4 ms-0 mt-3 pb-2"><u>Personal Info</u></div> 
              <div class="persinfo">
                <h6 class="float-start offset-md-1 fw-bold">Born: October 10, 1992<br>Age:&nbsp;<?=$age?>&nbsp;Years Old<br>Location: Nikaho, Akita Prefecture, Japan<br>Awards: Shogakukan Manga Award (2020)<br>Harvey Awards (2021, 2022)</h6> 
              </div>
          </div>
      </div>   

  </div>
</section>

<style>
#fujimoto {
  background-color: #E8DCB8; 
}

img.rounded:hover {
  animation: levitate 1.2s alternate ease-in-out infinite; 
}
  
@keyframes levitate {
  0% {
    transform: translate(0, 0); }
  100% {
    transform: translate(0, 10px); } }

</style>