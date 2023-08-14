<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper productsPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain qualityBox wow" aria-label="main" itemscope>
      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_milestone.jpg" alt=""></div>
        <div class="unitTitleBox">
          <h1 class="title wow fadeInUp" data-wow-delay="0s">QUALITY</h1>
          <div class="subTitle wow fadeInRight" data-wow-delay="0.2s">COMPANY</div>
        </div>
      </div>

      <div class="mainBox innerPage wow">

        <div class="pageContent quality">
          <div class="pageTitleBox">
            <h1 class="pageTitle wow fadeInUp">QUALITY INTRODUCTION</h1>
          </div>
          <section class="boxOut">
            <div class="container">
              <div class="box1 wow fadeInUp">
                <div class="description">PARKSON strictly control product quality in terms of raw material, processing, and assembly process inspection, PARKSON has obtained ISO9001 certification and CE certification.</div>
                <div class="pic"><img src="../images/in/quality1.jpg" alt=""></div>
                <div class="info">
                  PARKSON WU INDUSTRIAL CO., LTD.,
                  <span>Multi-Pallet Changer System</span>
                </div>
              </div>
              <div class="box2 wow fadeInUp">
                <div class="pic"><img src="../images/in/quality2.jpg" alt=""></div>
                <div class="pic"><img src="../images/in/quality3.jpg" alt=""></div>
              </div>
            </div>
          </section>

          <section class="box3 wow fadeInUp">
            <div class="container">
              <div class="description">We pay attention to every detail and works closely with customers. We understand that only high-quality products can be recognized and delivered to customers quickly.</div>
            </div>
          </section>
          <section class="box4 wow fadeInUp">
            <div class="listBox">
              <div class="pic"><img src="../images/in/quality5.jpg" alt=""></div>
              <div class="pic"><img src="../images/in/quality6.jpg" alt=""></div>
              <div class="pic"><img src="../images/in/quality7.jpg" alt=""></div>
              <div class="pic"><img src="../images/in/quality8.jpg" alt=""></div>
              <div class="pic"><img src="../images/in/quality9.jpg" alt=""></div>
              <div class="pic"><img src="../images/in/quality10.jpg" alt=""></div>
            </div>
          </section>

          <section class="box5 wow fadeInUp">
            <div class="container">
              <div class="pic"><img src="../images/in/quality4.jpg" alt=""></div>
            </div>
          </section>
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
              <span itemprop="name">Company</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Quality</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>
    </main>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    let out = document.querySelector('.box4')
    let listBox = document.querySelector('.box4 .listBox')
    let width = listBox.clientWidth;
    window.addEventListener('resize', function() {
      width = listBox.clientWidth;
    })
    let clone = listBox.cloneNode(true)
    out.prepend(clone)

    gsap.to('.box4 .listBox', {
      x: `-${width}`,
      duration: 20,
      repeat: -1,
      ease: 'none',
    })
  </script>
</body>

</html>