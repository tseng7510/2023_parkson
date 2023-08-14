<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper newsPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain newsListBox wow" aria-label="main" itemscope>
      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_support.jpg" alt=""></div>
        <div class="unitTitleBox">
          <h1 class="title wow fadeInRight" data-wow-delay="0s">SUPPORT</h1>
          <div class="subTitle wow fadeInRight" data-wow-delay="0.2s">SOLUTIONS</div>
        </div>
      </div>

      <div class="mainBox innerPage wow">

        <div class="pageContent newsList">
          <div class="container">
            <div class="listBox">

              <? for ($i = 0; $i < 10; $i++) { ?>
                <div class="item wow fadeInLeft">
                  <a href="support_detail.php">
                    <div class="pic"><img src="../images/in/news.jpg" alt=""></div>
                    <div class="infoBox">
                      <div class="title">IMTOF2022 The 31st JAPAN INTERNATIONAL MACHINE TOOL FAIR</div>
                      <div class="description">Show Dates: November 8 (Tue.) ｰ November 13 (Sun.), 2022 6</div>
                      <div class="more"></div>
                    </div>
                  </a>
                </div>
              <? } ?>

            </div>
          </div>
        </div>

        <div class="pageBox wow fadeInUp" data-wow-delay="0.2s">
          <div class="container">
            <ul class="pagination">
              <li class="controls"><a class="prev" href="#" title="Previous"></a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li class="active"><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li class="controls"><a class="next" href="#" title="Next"></a></li>
            </ul>
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
              <span itemprop="name">Support</span>
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