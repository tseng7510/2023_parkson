<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain productsListBox wow" aria-label="main" itemscope>
      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
        <div class="unitTitleBox">
          <div class="title wow fadeInRight" data-wow-delay="0s">PRODUCTS</div>
          <div class="subTitle wow fadeInRight" data-wow-delay="0.2s">CATEGORY</div>
        </div>
      </div>

      <div class="mainBox innerPage wow">

        <div class="pageContent productsInfo">
          <div class="pageTitleBox">
            <h1 class="pageTitle wow fadeInUp">Keyword Search Result : XXXXXXXXXX</h1>
          </div>
          <div class="container">

        </div>


        <div class="products wow fadeInUp">
          <div class="container">
            <div class="listBox">

              <? for ($i = 0; $i < 11; $i++) { ?>
                <div class="item wow fadeInLeft">
                  <a href="products_list2.php">
                    <div class="pic"><img src="../images/in/product.png" alt=""></div>
                    <div class="info">
                      <h2 class="title">CNC Rotary Table And Tailstock</h2>
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
              <a href="products.php" itemprop="item">
                <span itemprop="name">Product Category</span>
              </a>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Flexible manufacturing system (FMS)</span>
              <meta itemprop="position" content="3">
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