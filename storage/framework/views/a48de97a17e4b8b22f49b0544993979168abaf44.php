<!DOCTYPE html>
<html>
<title><?php echo e($judul); ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="https://www.facebook.com/kpmkrykkb?fref=search" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="https://www.instagram.com/kpmkry_kkb/" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>
</div>

<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b><?php echo e($judul); ?></b></h1>
    <h6><?php echo e($caption); ?> <span class="w3-tag">KPMKRY-KKB</span></h6>
  </header>

  <!-- Image header -->


  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">

        <ul class="w3-ul w3-hoverable w3-white">
          <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="w3-padding-16">
              <img src="/Logo2.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
              <a href="/galleries/<?php echo e($album->id); ?>"class="w3-large"><?php echo e($album->nama); ?></a>
              <br>
              <span><?php echo e($album->created_at); ?></span>
            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>


      </div>
      <hr>
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">
      <!-- About Card -->

      <hr>

      <!-- Posts -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Latest Albums</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
          <?php $__currentLoopData = $latestAlbums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestAlbum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="w3-padding-16">
              <img src="/Logo2.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
              <a href="/post/<?php echo e($latestAlbum->id); ?>"class="w3-large"><?php echo e($latestAlbum->nama); ?></a>
              <br>
              <span><?php echo e($latestAlbum->created_at); ?></span>
            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
      </div>

      <hr>
      <!-- Tags -->
      <hr>
      <!-- Inspiration -->
      <hr>

      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Follow Us</h4>
        </div>
        <div class="w3-container w3-xlarge w3-padding">
          <a href="https://www.facebook.com/kpmkrykkb?fref=search" class="w3-bar-item w3-button"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
          <a href="https://www.instagram.com/kpmkry_kkb/" class="w3-bar-item w3-button"><i class="fa fa-instagram w3-hover-opacity"></i></a>
        </div>
      </div>
      <hr>

      <!-- Subscribe -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Subscribe</h4>
        </div>
        <div class="w3-container w3-white">
          <p>Enter your e-mail below and get notified on the latest blog posts.</p>
          <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
          <p><button type="button" onclick="document.getElementById('subscribe').style.display='block'" class="w3-button w3-block w3-red">Subscribe</button></p>
        </div>
      </div>

    <!-- END About/Intro Menu -->
    </div>
<?php echo e($albums->links()); ?>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey" style="padding:32px">
  <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function likeFunction(x) {
    x.style.fontWeight = "bold";
    x.innerHTML = "✓ Liked";
}
</script>

</body>
</html>
