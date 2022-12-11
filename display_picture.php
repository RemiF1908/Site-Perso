<?php
include_once("file.php");

function display_picture($pathPictures, $pathJson){
    $files = read_dir($pathPictures);
    $jsonCaptions = file_get_contents($pathJson);
    $captions = json_decode($jsonCaptions);

    echo '
        <div  class="pos-xs4 col-xs4 caroulix" id="picture-caroulix" data-ax="caroulix" data-ax-caroulix-autoplay-enabled="true" data-caroulix-indicators-enabled="true">
          <div class="caroulix-arrow caroulix-prev">
    <span class="iconify-inline font-s5" data-icon="mdi:chevron-left"></span>
  </div>
  <div class="caroulix-arrow caroulix-next">
    <span class="iconify-inline font-s5" data-icon="mdi:chevron-right"></span>
  </div>
  ';
    foreach($files as  $file){

        echo '
        <div class="caroulix-item pb-5 ">
        <div class="card light-shadow-2 white rounded-3">
            <div class="card-image">
                <img data-waves src="',$pathPictures,$file,'"\>
            </div>

            <div class="card-content viride light-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi suscipit harum repellat architecto unde vel
                numquam rem doloribus maiores deserunt tenetur labore.
                
                <br>
                
            </div>


        </div>
        </div>';
    }

    echo '</div>';
}
