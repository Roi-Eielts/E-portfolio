<?php 
        $pagina = "";
	    if(isset($_GET["pagina"])) {
		    $pagina = $_GET["pagina"];
	    } else {
		    $pagina = "home";
	    }
?>
<nav id="navigatie" class="navbar navbar-expand-sm">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="content/img/roi_logo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"></a>
              <button class="navbar-toggler achtergrondkleur" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div  class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item" style="border-right: solid 3px orange;">
                    <a class="nav-link <?php if($pagina == "home") { echo"active"; }?>" href="home">home</a>
                  </li>
                  <li class="nav-item" style="border-right: solid 3px orange;">
                    <a class="nav-link <?php if($pagina == "overMij") { echo"active"; }?>" href="overMij">over mij & bijbaan</a>
                  </li>
                  <li class="nav-item" style="border-right: solid 3px orange;">
                    <a class="nav-link <?php if($pagina == "ww") { echo"active"; }?>" href="ww">project</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if($pagina == "contact") { echo"active"; }?>" href="contact">contact</a>
                  </li>
                </ul>
              </div>
            </div>
            <a class="btn btn-5" onclick="myFunction()">dark/light thema</a> 
            <iframe src="silence.mp3" allow="autoplay" id="audio" style="display: none"></iframe>
            <audio id="myAudio">
              <source src="content/javascript/audio.mp3" type="audio/mpeg">
            </audio>
</nav>
