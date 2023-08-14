<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/download.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper newsPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain downloadBox wow" aria-label="main" itemscope>
      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_brochure.jpg" alt=""></div>
        <div class="unitTitleBox">
          <h1 class="title wow fadeInRight" data-wow-delay="0s">BROCHURE</h1>
          <div class="subTitle wow fadeInRight" data-wow-delay="0.2s">MEDIA</div>
        </div>
      </div>

      <div class="mainBox innerPage wow">

        <div class="pageContent download">
          <div class="container">
            <div class="listBox">

              <? for ($i = 0; $i < 10; $i++) { ?>
                <div class="item wow fadeInUp" data-wow-delay="0s">
                  <a href="#">
                    <div class="picBox">
                      <div class="pic"><img src="../images/in/brochure.jpg" alt=""></div>
                      <div class="infoBox">
                        <h2 class="title">FMS Series</h2>
                        <div class="downloadBtn"></div>
                      </div>
                    </div>
                  </a>
                </div>
              <? } ?>

            </div>
          </div>
        </div>

      </div>

      <div class="breadcrumbBox">
        <div class="container">
          <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <a href="index.php" title="index" itemprop="item">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Media</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Brochure</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>
    </main>



    <?php include('include_login.php'); ?>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>