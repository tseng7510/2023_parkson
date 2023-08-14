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

    <main class="siteMain productsDetailBox wow" aria-label="main" itemscope>
      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
        <div class="unitTitleBox">
          <div class="title wow fadeInRight" data-wow-delay="0s">PRODUCTS</div>
          <div class="subTitle wow fadeInRight" data-wow-delay="0.2s">CATEGORY</div>
        </div>
      </div>

      <div class="mainBox innerPage wow">

        <div class="pageContent productsInfo">
          <div class="container">
            <div class="infoBox">
              <div class="titleBox">
                <h1 class="pageTitle">Flexible manufacturing system (FMS)</h1>
                <div class="subTitle">APCL-400 P7D6</div>
              </div>
              <div class="picBox">
                <div class="swiper">
                  <div class="swiper-wrapper">
                    <div class="pic swiper-slide"><img src="../images/in/product2.jpg" alt=""></div>
                    <div class="pic swiper-slide"><img src="../images/in/product2.jpg" alt=""></div>
                    <div class="pic swiper-slide"><img src="../images/in/product2.jpg" alt=""></div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
              <div class="description">The FMS takes the pallet as the storage unit, takes out the pallet of the tray and put it into the suitable storage or processing position through the lifting and horizontal movement and rotation movement of central axis. The FMS has a wide range of applications, can be stored a variety of tray, such as pallet and fixture, which are suitable for all kinds of machine tools, such as horizontal machining center, vertical machining center and every kind of five-axis machining center.</div>
              <div class="btnBox">
                <button class="btnStyle" title="VIEW MORE">ADD TO INQUIRY</button>
                <button class="btnStyle" title="VIEW MORE">PDF DOWNLOAD</button>
              </div>
            </div>
          </div>
        </div>

        <div class="feature">
          <div class="container">
            <div class="subTitle">Product Feature</div>
            <ul>
              <li>Able to work with horizontal machine tools, vertical machine tools, and various 5-axis machine tools</li>
              <li>For both materials standby area for machining and storage for completed products</li>
              <li>Able to be combined with existing machine tools</li>
              <li>Designed for various sites and applications</li>
              <li>Designed for various machine tools</li>
              <li>Warehouse storage management with intelligent chips</li>
              <li>Indicative function for table storage position</li>
              <li>Reduce the time for manual replacement of work piece</li>
              <li>Increase machining efficiency</li>
              <li>Efficiency utilize spaces in workshop</li>
            </ul>
          </div>
        </div>

        <div class="products">
          <div class="container">
            <div class="subTitle">Specifications</div>
            <div class="productsList">
              <div class="tableBox">
                <table>
                  <thead>
                    <tr>
                      <th>Model NO</th>
                      <th>Pallet Diameter</th>
                      <th>Exchange Way</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="products_detail.php">APCL-400 P7D6</a></td>
                      <td>400×400</td>
                      <td>Lift and rotation</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="info">
              <ol>
                <li>Please contact us for more detailed specification.</li>
                <li>PARKSON owns the rights to modify the drawing and specification.</li>
                <li>Servo motors, drives, encoders and hydraulic units are excluded.</li>
              </ol>
            </div>
          </div>
        </div>


        <div class="pageBtnBox wow fadeInUp" data-wow-delay="0s">
          <div class="container">
            <a class="btnStyle back" href="products_list2.php">BACK TO LIST</a>
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
              <a href="products_list.php" itemprop="item">
                <span itemprop="name">Flexible manufacturing system (FMS)</span>
              </a>
              <meta itemprop="position" content="3">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <a href="products_list2.php" itemprop="item">
                <span itemprop="name">APCL Series / Flexible manufacturing system (FMS)-Matrix Type</span>
              </a>
              <meta itemprop="position" content="4">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Flexible manufacturing system (FMS)</span>
              <meta itemprop="position" content="5">
            </li>

          </ul>
        </div>
      </div>
    </main>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    let swiper = new Swiper('.productsInfo .picBox .swiper', {
      slidesPerView: 1,
      effect: 'fade',
      loop: true,
      pagination: {
        clickable: true,
        el: '.productsInfo .picBox .swiper-pagination',
      },
    });
  </script>
</body>

</html>