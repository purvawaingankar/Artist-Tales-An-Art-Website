<?php?>
  
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.header {
  position: relative;
  width: 100%;
  height: 100vh;
  padding: 0 2%;
  background-color: transparent;
}

.header a {
  float: left;
  padding: 15px; 
} 

.header-right {
  position: relative;
  padding: 10 0%;
}

.header-right a {
  float: right;
  color: #040720;
  font-size: 30px;
}

.back-video {
  position: absolute;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: -100;
}

@media(min-aspect-ratio: 16/9){
  .back-video{
    width: 100%;
    height: auto;
  }
}

@media(max-aspect-ratio: 16/9){
  .back-video{
    width: auto;
    height: 100%;
  }
}

.media-icons{
  display: flex;
  justify-content: center;
  align-items: center;
  margin: auto;
  position: fixed;
  bottom: 0;
  width: 100%;
  height: 80px;
  background-color: transparent;
}

.media-icons a{
  position: relative;
  color: #040720;
  font-size: 30px;
}

.media-icons a:not(last-child){
  margin-right: 50px;
}

.media-icons a:hover{
  transform: scale();
}

</style>
</head>
<body>
<div class="header">
  <a href=""><img src="LOGO1.png" alt="logo" height="50px" width="180px" ></a>

  <div class="header-right">
    <a href="account.php"><i class="fas fa-user-circle"></i></a>
    <a href="index_tips.php"><i class="far fa-sticky-note"></i></a>
    <a href="index_sell.php"><i class="fas fa-tags"></i></a>
    <a href="index_blog.php"><i class="fas fa-blog"></i></a>
    <a href="index_img.php"><i class="fas fa-image"></i></a>
  </div>

  <video autoplay loop class="back-video" muted plays-inline>
  <source src="video.mp4" type="video/mp4">
  </video>

</div>

<footer>
<div class="media-icons" >
<a href="#"><i class="fab fa-facebook"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-instagram-square"></i></a>
<a href="#"><i class="fab fa-tumblr"></i></a>
</div>
</footer>
</body>
</html>





