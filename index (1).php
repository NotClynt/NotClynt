<html style="height:100%">
  <?php

    require_once __DIR__ . '/protected/config.php';
    error_reporting(0);
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != "on" ? "https" : "http" . "://";
    $fileurl = $protocol . domain . images . "/$hash.$type";

    function human_filesize($bytes, $decimals) {
        $size = array('B','KB','MB','GB','TB','PB','EB','ZB','YB');
        $factor = floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f ", $bytes / pow(1024, $factor)) . @$size[$factor];
    }

    $files = scandir(images . '/');

    if (isset($_GET["f"])) {

      $string = $_GET["f"];
      $type = strrchr($string, '.');
      $type = str_replace(".","",$type);

      foreach ($files as $file) {
        if ($file == $_GET["f"]) {

          $filesize = human_filesize(filesize(images . "/" . $_GET["f"]), 2);
          ?>

<head>
    <link rel="stylesheet" href="https://psyro.de/sharx/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.0.2/dist/css/bootstrap-night.min.css" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
              <title><?php echo $_GET["f"]; ?></title>
              <meta name='og:site_name' content='<?php echo toptitle; ?>'>
              <?php if ($type == "png" || $type == "gif" || $type == "jpeg" || $type == "jpg"): ?>
                <meta name='twitter:card' content='photo'>
                <meta name='twitter:title' content='<?php echo $_GET["f"]; ?> (<?php echo $filesize; ?>)'>
                <meta name='twitter:image' content='<?php echo $protocol .  domain . "/" . images. "/" . $_GET["f"]; ?>'>
              <?php elseif ($type == "mp4" || $type == "webm"): ?>
                <meta name='twitter:card' content='player'>
                <meta name='twitter:title' content='<?php echo $_GET["f"]; ?> (<?php echo $filesize; ?>)'>
                <meta name='twitter:player' content='<?php echo $protocol .  domain . "/" . images. "/" . $_GET["f"]; ?>'>
                <meta name='twitter:player:width' content='1280'>
                <meta name='twitter:player:height' content='720'>
              <?php else: ?>
                <meta name='twitter:card' content='suummary_large_image'>
                <meta name='twitter:title' content='<?php echo title; ?> (<?php echo $filesize; ?>)'>
              <?php endif; ?>
              <meta name='theme-color' content='<?php echo color; ?>'.
            </head>
            <body>
            <div class="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
        <nav class="uk-navbar-container uk-margin" uk-navbar="mode: click">
            <div class="uk-navbar-left">
                <a href="/" class="uk-navbar-item uk-logo">
                <?php echo name ?></a>
                <ul class="uk-navbar-nav">
                    <li><a href="index.php">Home</a></li>
                </ul>
            </div>
        </nav>
              <div class="content"><br><br><br><br>
		
                <center>
                <div class="d-flex justify-content-center align-items-center">
        <div class="card text-center">
<h1 class="subtitle"><?php echo $_GET["f"]; ?></h1>
                  <?php if ($type == "png" || $type == "gif" || $type == "jpeg" || $type == "jpg"): ?>
                    <img src='<?php echo $protocol . domain . "/" . images. "/" . $_GET["f"]; ?>'></img>
                    <a class="btn btn-primary" href="<?php echo $protocol . domain . "/" . images. "/" . $_GET["f"]; ?>"download>Download</a>
                  <?php elseif ($type == "mp4" || $type == "webm"): ?>
                    <video controls>
                      <source src='<?php echo $protocol . domain . "/" . images. "/" . $_GET["f"]; ?>'>
                    </video>
                    <a class="btn btn-primary" href="<?php echo $protocol . domain . "/" . images. "/" . $_GET["f"]; ?>"download>Download</a>
                  <?php elseif ($type == "mp3" || $type == "ogg"): ?>
                    <audio controls>
                      <source src='<?php echo $protocol . domain . "/" . images. "/" . $_GET["f"]; ?>'>
                    </audio>
                    <a class="btn btn-primary" href="<?php echo $protocol . domain . "/" . images. "/" . $_GET["f"]; ?>"download>Download</a>
                  <?php else: ?>
                    <a class="btn btn-primary" href="<?php echo $protocol . domain . "/" . images. "/" . $_GET["f"]; ?>"download>Download</a>
                  <?php endif; ?>                  
                </center>
              </div>
                  </body>
          <?php
        }
      }
    } else { ?>
				
<!DOCTYPE html> <html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, 
initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" 
content="ie=edge" />
        <title>Clynt</title>
		<link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="icon"
      type="ico"
      href="ico.ico" /
		<script 
src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" type="5c829589c979ce69f7eed28a-text/javascript"></script>
		<audio autoplay>
		    <source src="heartless.mp3" type="audio/mpeg">
		</audio>
	</head>
	    
    </font>
    
	<body style="background-color: #000000; overflow: hidden; 
user-select: none; font-family: nimbus_monoregular,Courier;">
		<style>
			@keyframes blink {
				0% {
					opacity: 1
				}
				
				50% {
					opacity: 0
				}
				
				100% {
					opacity: 1
				}
			}
			@-webkit-keyframes blink {
				0% {
					opacity: 1
				}
				
				50% {
					opacity: 0
				}
				
				100% {
					opacity: 1
				}
			}
			.pad {
				top: 588px;
			}
			@media only screen and (max-width: 600px) 
{ .pad { top: 200px; } }
		</style>
<div class="pad" style="text-align: center; 
position: absolute; width:100%;">
			<h1 style="color: #b84a4a; font-size: 
4.5rem; font-weight: 400; margin-bottom: 5px;">Clynt</h1>
			<div style="color: #b84a4a; font-weight: 
300;"><span style="font-size: 2rem;" id="typer"></span><span 
style="font-size: 3rem; animation: blink 1s infinite;" 
>|</span></div>

	<div style="color: #b84a4a; font-weight: 
300;"><span style="font-size: 2rem;" id="typer"></span><span 
style="font-size: 3rem; animation: blink 1s infinite;" 
>|</span></div>
		</div>
		<div id="particles-js"></div>
		<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js" type="5c829589c979ce69f7eed28a-text/javascript"></script>
		<script type="5c829589c979ce69f7eed28a-text/javascript">
			window.onload = function() {
				const particlesJSON = {
					"particles": {
						"number": {
							"value": 
80,
							"density": 
{
								
"enable": true,
								
"value_area": 800
							}
						},
						"color": {
							"value": 
"#a81111"
						},
						"shape": {
							"type": 
"star",
							"stroke": 
{
								
"width": 0,
								
"color": "#000000"
							},
							"polygon": 
{
								
"nb_sides": 12
							},
						},
						"opacity": {
							"value": 
1,
							"random": 
false,
							"anim": {
								
"enable": false,
								
"speed": 1,
								
"opacity_min": 0.1,
								
"sync": false
							}
						},
						"size": {
							"value": 
1,
							"random": 
true,
							"anim": {
								
"enable": false,
								
"speed": 40,
								
"size_min": 0.1,
								
"sync": false
							}
						},
						"line_linked": {
							"enable": 
true,
							
"distance": 190,
							"color": 
"#a81111",
							"opacity": 
1,
							"width": 1
						},
						"move": {
							"enable": 
true,
							"speed": 
6,
							
"direction": "none",
							"random": 
false,
							
"straight": false,
							
"out_mode": "out",
							"bounce": 
false,
							"attract": 
{
								
"enable": false,
								
"rotateX": 600,
								
"rotateY": 1200
							}
						}
					},
					"interactivity": {
						"detect_on": 
"canvas",
						"events": {
							"onhover": 
{
								
"enable": true,
								
"mode": "repulse"
							},
							"onclick": 
{
								
"enable": true,
								
"mode": "push"
							},
							"resize": 
true
						},
						"modes": {
							"grab": {
								
"distance": 400,
								
"line_linked": {
									
"opacity": 1
								}
							},
							"bubble": 
{
								
"distance": 400,
								
"size": 40,
								
"duration": 2,
								
"opacity": 8,
								
"speed": 3
							},
							"repulse": 
{
								
"distance": 150,
								
"duration": 0.4
							},
							"push": {
								
"particles_nb": 4
							},
							"remove": 
{
								
"particles_nb": 2
							}
						}
					},
					"retina_detect": true
				}
				particlesJS("particles-js", 
particlesJSON);
				var i = 0;
				var txt = 'No System Is Safe If I was there';
				function typeWriter() {
					if (i < txt.length) {
						
document.getElementById("typer").innerHTML += txt.charAt(i);
						i++;
						
setTimeout(typeWriter, 50);
					}
				}
				typeWriter();
			}
		</script>
	<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="5c829589c979ce69f7eed28a-|49" defer=""></script></body>
</html>
	<?php }
  ?>