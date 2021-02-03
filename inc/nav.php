<head>
  <link rel="stylesheet" href="/assets/css/custom.css">
</head>
<style>
</style>
<!-- NAVIGATION -->
<div class="nav-scroller bg-darkgreyish shadow-sm">
  <nav class="nav nav-underline">
    <div class="nav-link a-right small-p">Last builded on: 
      <?php echo date("D, d M Y H:i:s", strtotime($xml->channel->lastBuildDate)); ?>
    </div>
  </nav>
</div>
<nav class="navbar navbar-expand-lg px-3 navbar-dark nav-dark shadow-sm">
  <div class="container">
    <a href="#" class="navbar-brand">
      <img src="https://mr-seo.de/img/logo-netz98.png" width="60px" alt="" class="d-inline-block align-middle mr-2">
      RSS Feed 
      <i class="fas fa-rss">
      </i>
    </a>
    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
      <span class="navbar-toggler-icon">
      </span>
    </button>
    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li 
        <?php if ($_SERVER['SCRIPT_NAME'] == "/index.php") { ?>class="nav-item active">
        <?php } else { ?>class="nav-item">
        <?php } ?>
        <a href="/index" class="nav-link">Home
        </a>
        </li>
      <li 
      <?php if ($_SERVER['SCRIPT_NAME'] == "/magento-1") { ?>class="nav-item active">
      <?php } else { ?>class="nav-item">
      <?php } ?>
      <a href="/magento-1" class="nav-link">Magento 1
      </a>
      </li>
    <li 
    <?php if ($_SERVER['SCRIPT_NAME'] == "/magento-2") { ?>class="nav-item active">
    <?php } else { ?>class="nav-item">
    <?php } ?>
    <a href="/magento-2" class="nav-link">Magento 2
    </a>
    </li>
  <li 
  <?php if ($_SERVER['SCRIPT_NAME'] == "/devop") { ?>class="nav-item active">
  <?php } else { ?>class="nav-item">
  <?php } ?>
  <a href="/devop" class="nav-link">Devop
  </a>
  </li>      
</ul>
</div>
</div>
</nav>
<!-- END NAVIGATION-->
<!-- JUMBOTRON -->
<div class="jumbotron jumbotron-fluid jumbotron-custom">
  <div class="container">
    <a class="middle" href="<?php echo $xml->channel->link ?>">
      <h1 class="display-4 j-h1">
        <?php echo $xml->channel->title ?>
      </h1>
      <p class="lead small-p">
        <?php echo $xml->channel->description ?>
      </p>
    </a>
  </div>
</div>
<!-- END JUMBOTRON -->
