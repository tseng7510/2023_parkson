<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/solution.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain applicationBox wow" aria-label="main" itemscope>
      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_applications.jpg" alt=""></div>
        <div class="unitTitleBox">
          <div class="title wow fadeInRight" data-wow-delay="0s">APPLICATION</div>
          <div class="subTitle wow fadeInRight" data-wow-delay="0.2s">SOLUTIONS</div>
        </div>
      </div>

      <div class="mainBox innerPage wow">

        <div class="pageContent applicationInfo">
          <div class="container">
            <div class="infoBox">
              <h1 class="pageTitle wow fadeInUp">Aerospace Processing and Application Industry</h1>
              <div class="description wow fadeInUp" data-wow-delay="0.2s">The machining parts of the 5th axis rotating table with the machine tool include engine blades, casings, ring parts, aircraft cabin seat structural parts, national defense aerospace, unmanned aerial vehicles, and other processing industries.The machining parts of the 5th axis rotating table with the machine tool include engine blades, casings, ring parts, aircraft cabin seat structural parts, national defense aerospace, unmanned aerial vehicles, and other processing industries.The machining parts of the 5th axis rotating table with the machine tool include engine blades, casings, ring parts, aircraft cabin seat structural parts, national defense aerospace, unmanned aerial vehicles, and other processing industries.The machining parts of the 5th axis rotating table with the machine tool include engine blades, casings, ring parts, aircraft cabin seat structural parts, national defense aerospace, unmanned aerial vehicles, and other processing industries.The machining parts of the 5th axis rotating table with the machine tool include engine blades, casings, ring parts, aircraft cabin seat structural parts, national defense aerospace, unmanned aerial vehicles, and other processing industries.</div>
            </div>
            <div class="picBox">
              <div class="pic wow fadeInUp"><img src="../images/index/application.jpg" alt=""></div>
            </div>
          </div>
        </div>


        <div class="application wow fadeInUp">
          <div class="container">
            <div class="subTitle">Recommended Products</div>
            <div class="listBox">
              <? for ($i = 0; $i < 11; $i++) { ?>
                <div class="item">
                  <a href="products_detail.php">
                    <div class="picBox">
                      <div class="pic"><img src="../images/in/product2.jpg" alt=""></div>
                      <div class="title">APCL Series / Flexible manufacturing system (FMS)-Matrix Type</div>
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
              <span itemprop="name">Solutions</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Applications</span>
              <meta itemprop="position" content="3">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Aerospace Processing and Application Industry</span>
              <meta itemprop="position" content="4">
            </li>

          </ul>
        </div>
      </div>
    </main>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>