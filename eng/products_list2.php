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

    <main class="siteMain productsList2Box wow" aria-label="main" itemscope>
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
            <h1 class="pageTitle wow fadeInUp">Flexible manufacturing system (FMS)</h1>
          </div>
          <div class="container">
            <div class="infoBox wow fadeInUp">
              <div class="picBox">
                <div class="pic"><img src="../images/in/product2.jpg" alt=""></div>
              </div>
              <div class="descriptionBox">
                <div class="description">The FMS takes the pallet as the storage unit, takes out the pallet of the tray and put it into the suitable storage or processing position through the lifting and horizontal movement and rotation movement of central axis. The FMS has a wide range of applications, can be stored a variety of tray, such as pallet and fixture, which are suitable for all kinds of machine tools, such as horizontal machining center, vertical machining center and every kind of five-axis machining center.The FMS takes the pallet as the storage unit, takes out the pallet of the tray and put it into the suitable storage or processing position through the lifting and horizontal movement and rotation movement of central axis. The FMS has a wide range of applications, can be stored a variety of tray, such as pallet and fixture, which are suitable for all kinds of machine tools, such as horizontal machining center, vertical machining center and every kind of five-axis machining center.<br /><br />
                  The FMS takes the pallet as the storage unit, takes out the pallet of the tray and put it into the suitable storage or processing position through the lifting and horizontal movement and rotation The FMS takes the pallet as the storage unit, takes out the pallet of the tray and put it into the suitable storage or processing position through the lifting and horizontal movement and rotation movement of central axis. The FMS has a wide range of applications, can be stored a variety of tray, such as pallet and fixture, which are suitable for all kinds of machine tools, such as horizontal machining center, vertical machining center and every kind of five-axis machining center.The FMS takes the pallet as the storage unit, takes out the pallet of the tray and put it into the suitable storage or processing position through the lifting and horizontal movement and rotation movement of central axis. The FMS has a wide range of applications, can be stored a variety of tray, such as pallet and fixture, which are suitable for all kinds of machine tools, such as horizontal machining center, vertical machining center and every kind of five-axis machining center.<br /><br />
                  The FMS takes the pallet as the storage unit, takes out the pallet of the tray and put it into the suitable storage or processing position through the lifting and horizontal movement and rotation</div>
                <div class="btnBox">
                  <button class="btnStyle" title="VIEW MORE">VIEW MORE</button>
                  <button class="btnStyle" title="PDF DOWNLOAD">PDF DOWNLOAD</button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="products wow fadeInUp">
          <div class="container">
            <div class="subTitle">Products & Specifications</div>
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
                    <tr>
                      <td><a href="products_detail.php">APCL-400 P7D6</a></td>
                      <td>400×400</td>
                      <td>Lift and rotation</td>
                    </tr>
                  </tbody>
                </table>
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
              <span itemprop="name">APCL Series / Flexible manufacturing system (FMS)-Matrix Type</span>
              <meta itemprop="position" content="4">
            </li>

          </ul>
        </div>
      </div>
    </main>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    (function() {
      let topBoxOpenBtn = document.querySelector('.productsInfo .btnStyle');
      let picBox = document.querySelector('.productsInfo .picBox');
      let descriptionBox = document.querySelector('.productsInfo .description');
      windowWidth = window.outerWidth;
      descriptionBox.style.height = `${picBox.offsetHeight - 70}px`;

      window.addEventListener('resize', function() {
        descriptionBox.style.height = `${picBox.offsetHeight - 70}px`;
      });

      let topBoxOpen = false;

      topBoxOpenBtn.addEventListener('click', contentBoxOpen);

      function contentBoxOpen() {
        let ogHeight
        if (!topBoxOpen) {
          descriptionBox.removeAttribute('style')
          ogHeight = descriptionBox.offsetHeight
          descriptionBox.style.height = `${picBox.offsetHeight - 70}px`;
          descriptionBox.offsetHeight;
          descriptionBox.style.transitionProperty = 'height';
          descriptionBox.style.transitionDuration = `300ms`;
          descriptionBox.style.height = `${ogHeight}px`;
          topBoxOpenBtn.classList.add('active');
          topBoxOpenBtn.innerHTML = 'SHOW LESS';
          topBoxOpen = true;
        } else {
          descriptionBox.style.height = `${ogHeight}px`;
          descriptionBox.offsetHeight;
          descriptionBox.style.height = `${picBox.offsetHeight - 70}px`;
          topBoxOpenBtn.classList.remove('active');
          topBoxOpenBtn.innerHTML = 'VIEW MORE';
          topBoxOpen = false;
        }
      }
    })()
  </script>
</body>

</html>