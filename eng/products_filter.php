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

    <main class="siteMain productsFilterBox wow" aria-label="main" itemscope>
      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
        <div class="unitTitleBox">
          <h1 class="title wow fadeInRight" data-wow-delay="0s">PRODUCTS</h1>
          <div class="subTitle wow fadeInRight" data-wow-delay="0.2s">CATEGORY</div>
        </div>
      </div>

      <div class="mainBox innerPage wow">

        <div class="pageContent productsInfo">
          <div class="container">

            <aside>
              <div class="sideBox">
                <button class="title" disabled="">Product Finder</button>
                <form class="contentBox">
                  <div class="item">
                    <div class="subTitle">Product Index</div>
                    <ul>
                      <li><input type="checkbox" name="check1" value="CNC Rotary Table" id="check1"><label for="check1">CNC Rotary Table</label></li>
                      <li><input type="checkbox" name="check2" value="Hydraulic Index Table" id="check2"><label for="check2">Hydraulic Index Table</label></li>
                      <li><input type="checkbox" name="check3" value="Auto Pallet Chager System" id="check3"><label for="check3">Auto Pallet Chager System</label></li>
                      <li><input type="checkbox" name="check4" value="Swing Spindle Head" id="check4"><label for="check4">Swing Spindle Head</label></li>
                      <li><input type="checkbox" name="check5" value="Multi-pallet Changer System" id="check5"><label for="check5">Multi-pallet Changer System</label></li>
                    </ul>
                  </div>
                  <div class="contentBox2">
                    <div class="item">
                      <div class="subTitle">Mechanical Type</div>
                      <ul>
                        <li><input type="checkbox" name="check1-1" value="Vertical" id="check1-1"><label for="check1-1">Vertical</label></li>
                        <li><input type="checkbox" name="check1-2" value="Horizontal" id="check1-2"><label for="check1-2">Horizontal</label></li>
                      </ul>
                    </div>
                    <div class="item">
                      <div class="subTitle">Axis</div>
                      <ul>
                        <li><input type="checkbox" name="check1-3" value="CNC Rotary Table" id="check1-3"><label for="check1-3">1-Axis</label></li>
                        <li><input type="checkbox" name="check1-4" value="CNC Rotary Table" id="check1-4"><label for="check1-4">2-Axis</label></li>
                        <li><input type="checkbox" name="check1-5" value="CNC Rotary Table" id="check1-5"><label for="check1-5">3-Axis</label></li>
                        <li><input type="checkbox" name="check1-6" value="CNC Rotary Table" id="check1-6"><label for="check1-6">4-Axis</label></li>
                        <li><input type="checkbox" name="check1-7" value="CNC Rotary Table" id="check1-7"><label for="check1-7">5-Axis</label></li>
                      </ul>
                    </div>
                  </div>

                  <div class="item">
                    <div class="subTitle">Machine type</div>
                    <ul>
                      <li><input type="checkbox" name="check6" value="CNC Vertical machine" id="check6"><label for="check6">CNC Vertical machine</label></li>
                      <li><input type="checkbox" name="check7" value="CNC Double Column machine" id="check7"><label for="check7">CNC Double Column machine</label></li>
                      <li><input type="checkbox" name="check8" value="CNC Horizontal machine" id="check8"><label for="check8">CNC Horizontal machine</label></li>
                      <li><input type="checkbox" name="check9" value="CNC LatheMulti-pallet Changer CNC EDM machine" id="check9"><label for="check9">CNC Lathe</label></li>
                      <li><input type="checkbox" name="check9" value="CNC LatheMulti-pallet Changer CNC EDM machine" id="check9"><label for="check9">CNC EDM machine</label></li>
                      <li><input type="checkbox" name="check10" value="Others" id="check10"><label for="check10">Others</label></li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="subTitle">Transmission</div>
                    <ul>
                      <li><input type="checkbox" name="check11" value="Worm gear" id="check11"><label for="check11">Worm gear</label></li>
                      <li><input type="checkbox" name="check12" value="Roller cam" id="check12"><label for="check12">Roller cam</label></li>
                      <li><input type="checkbox" name="check13" value="Torque motor" id="check13"><label for="check13">Torque motor</label></li>
                      <li><input type="checkbox" name="check14" value="Hydraulic Index" id="check14"><label for="check14">Hydraulic Index</label></li>
                    </ul>
                  </div>
                </form>
              </div>
            </aside>

            <div class="productsFilterList">

              <div class="titleBox">
                <div class="pageTitle">Search results : 6</div>
              </div>
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