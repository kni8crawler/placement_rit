
<?php
   include('session.php');
?>
<html>
   
   <head>
   	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <title>Gallery</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="custom.css">
    <link rel="shortcut icon" href="images/favicon.png">
    <link ref="stylesheet" href="css/material.min.css">
    <link ref="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/material.css">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script type="text/javascript" src="js/material.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery/jquery-1.8.3.min"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
   <style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}

body{
  background: #000;
  color: #fff;
  padding: 40px;
  font-family: sans-serif;
  max-width: 960px;
  margin: 0 auto;
  background: url('images/back1.jpg');
  background-size: cover;
  background-attachment: 
}

.gallery{
  margin: 0;
  padding: 0;
  height: 100%;
}

[class*='thumbnail-']{
  background: #000;
  width: 33.33%;
  height: auto;
  float: left;
  padding: 5px 5px 3px 5px;
  cursor: zoom-in;
}

[class*='thumbnail-'] img{
  max-width: 100%;
}

[class*='large-']{
  background: #000;
  width: 90%;
  margin: 0 auto;
  padding: 30px;
  display: none;
}

[class*='large-'] img{
  width: 100%;
  max-width: 100%;
  margin: 0 auto;
}

.prev{
  color: #fff;
  font-size: 60px;
  position: absolute;
  top: 45%;
  left: 10px;
  float: left;
}

.next{
  color: #fff;
  font-size: 60px;
  position: absolute;
  top: 45%;
  right: 10px;
  float: right;
}

.close{
  color: #fff;
  font-size: 30px;
  position: absolute;
  top: 5px;
  right: 10px;
  float: right;
  cursor: zoom-out;
}

[class*='thumbnail-']{
  overflow: hidden;
  padding: 0;
  position: relative;
  cursor: zoom-in;
}

[class*='thumbnail-']:hover img{
  transition: .3s linear;
  transition-delay: 300ms;
  transform: /* rotate(5deg) */ scale(1.4);
}

[class*='thumbnail-'] > .caption{
  display: none;
  position: absolute;
  bottom: 0;
  padding: 15px;
  width: 100%;
  background-color: black;
  color: white;
  opacity: 0.8;
}

[class*='thumbnail-']:hover > .caption{
  display: block;
 
}

@media screen and (max-width:480px){
  .caption h3{
    font-size: 12px;
  }
}

 </style>
   </head>
<body >
<div class="gallery">
  <div class="thumbnail-1 wow fadeInLeft">
    <img src="http://lorempixel.com/output/city-q-c-640-480-9.jpg" alt="" />
    <div class="caption">
      <h3 class="wow fadeInUp">San Francisco</h3>
    </div>  
  </div>
  <div class="large-1 wow bounceInLeft">
    <img src="http://lorempixel.com/output/city-q-c-640-480-9.jpg" alt="" />
    <span class="close">✕</span>
  </div>
  <div class="thumbnail-2 wow fadeInDown">
    <img src="http://lorempixel.com/output/city-q-c-640-480-6.jpg" alt="" />
    <div class="caption">
      <h3 class="wow fadeInUp">Paris</h3>  
    </div> 
  </div>
  <div class="large-2 wow bounceInDown">
    <img src="http://lorempixel.com/output/city-q-c-640-480-6.jpg" alt="" />
    <span class="close">✕</span>
  </div>
  <div class="thumbnail-3 wow fadeInRight">
    <img src="http://lorempixel.com/output/city-q-c-640-480-7.jpg" alt="" />
    <div class="caption">
      <h3 class="wow fadeInUp">Sydney</h3>  
    </div> 
  </div>
  <div class="large-3 wow bounceInRight">
    <img src="http://lorempixel.com/output/city-q-c-640-480-7.jpg" alt="" />
    <span class="close">✕</span>
  </div>
  <div class="thumbnail-4 wow fadeInLeft">
    <img src="http://lorempixel.com/output/city-q-c-640-480-5.jpg" alt="" />
    <div class="caption">
      <h3 class="wow fadeInUp">Tokyo</h3>  
    </div> 
  </div>
  <div class="large-4 wow bounceInLeft">
    <img src="http://lorempixel.com/output/city-q-c-640-480-5.jpg" alt="" />
    <span class="close">✕</span>
  </div>  
  <div class="thumbnail-5 wow flipInX">
    <img src="http://lorempixel.com/output/city-q-c-640-480-1.jpg" alt="" />
    <div class="caption">
      <h3 class="wow fadeInUp">Berlin</h3>  
    </div> 
  </div>
  <div class="large-5 wow bounceIn">
    <img src="http://lorempixel.com/output/city-q-c-640-480-1.jpg" alt="" />
    <span class="close">✕</span>
  </div> 
  <div class="thumbnail-6 wow fadeInRight">
    <img src="http://lorempixel.com/output/city-q-c-640-480-4.jpg" alt="" />
    <div class="caption">
      <h3 class="wow fadeInUp">New York</h3>  
    </div> 
  </div>
  <div class="large-6 wow bounceInRight">
    <img src="http://lorempixel.com/output/city-q-c-640-480-4.jpg" alt="" />
    <span class="close">✕</span>
  </div> 
  <div class="thumbnail-7 wow fadeInLeft">
    <img src="http://lorempixel.com/output/city-q-c-640-480-3.jpg" alt="" />
    <div class="caption">
      <h3 class="wow fadeInUp">New York</h3>  
    </div> 
  </div>
  <div class="large-7 wow bounceInLeft">
    <img src="http://lorempixel.com/output/city-q-c-640-480-3.jpg" alt="" />
    <span class="close">✕</span>
  </div> 
  <div class="thumbnail-8 wow fadeInUp">
    <img src="http://lorempixel.com/output/city-q-c-640-480-2.jpg" alt="" />
    <div class="caption">
      <h3 class="wow fadeInUp">New York</h3>  
    </div> 
  </div>
  <div class="large-8 wow bounceInUp">
    <img src="http://lorempixel.com/output/city-q-c-640-480-2.jpg" alt="" />
    <span class="close">✕</span>
  </div> 
  <div class="thumbnail-9 wow fadeInRight">
    <img src="http://lorempixel.com/output/city-q-c-640-480-8.jpg" alt="" />
    <div class="caption">
      <h3 class="wow fadeInUp">Brisbane</h3>  
    </div> 
  </div>
  <div class="large-9 wow bounceInRight">
    <img src="http://lorempixel.com/output/city-q-c-640-480-8.jpg" alt="" />
    <span class="close">✕</span>
  </div> 
    <div class="thumbnail-10 wow fadeInLeft">
    <img src="http://lorempixel.com/output/city-q-c-640-480-8.jpg" alt="" />
    <div class="caption">
      <h3 class="wow fadeInUp">Brisbane</h3>  
    </div> 
  </div>
  <div class="large-10 wow bounceInLeft">
    <img src="http://lorempixel.com/output/city-q-c-640-480-8.jpg" alt="" />
    <span class="close">✕</span>
  </div>   
</div>
<script type="text/javascript">
	$(document).ready(function(){
  $("[class^='thumbnail-']").click(function(){
    $("[class^='thumbnail-']").slideToggle("fast");
    $(this).next("[class^='large-']").slideToggle();
  });
  
  $(".close").click(function(){
    $("[class^='large-']:visible").toggle();
    $("[class^='thumbnail-']").fadeToggle("fast");; 
  }); 
  
});

new WOW().init();
</script>
</body>
   
</html>