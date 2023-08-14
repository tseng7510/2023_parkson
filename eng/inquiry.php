<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain inquiryBox wow" aria-label="main" itemscope>
      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_contact.jpg" alt=""></div>
        <div class="unitTitleBox">
          <h1 class="title wow fadeInRight" data-wow-delay="0s">INQUIRY</h1>
        </div>
      </div>


      <div class="mainBox innerPage wow">

        <div class="pageContent inquiry">
          <div class="pageTitleBox">
            <h1 class="pageTitle wow fadeInUp">Inquiry Cart</h1>
          </div>
          <div class="topBox">
            <div class="container">
              <div class="content">
                <div class="inquiryList wow fadeInUp" data-wow-delay="0s">
                  <table>
                    <thead>
                      <tr>
                        <th>Product name</th>
                        <th>Model</th>
                        <th>Quantity</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <? for ($i = 0; $i < 3; $i++) { ?>
                        <tr>
                          <td>
                            <a class="box" href="products_detail.php">
                              <div class="pic"><img src="../images/in/product2.jpg" alt=""></div>
                              <div class="title">Flexible manufacturing system (FMS)</div>
                            </a>
                          </td>
                          <td>SDV-1611</td>
                          <td>
                            <div class="qtyBox">
                              <button class="btn less"></button>
                              <input type="text" class="qty form-control" value="1">
                              <button class="btn add"></button>
                            </div>
                          </td>
                          <td>
                            <button class="del"></button>
                          </td>
                        </tr>
                      <? } ?>
                    </tbody>
                  </table>
                </div>


              </div>
            </div>
          </div>

          <div class="container">
            <div class="content">
              <div class="topInfo">
                <h2 class="title wow fadeInUp">INQUIRY FORM</h2>
                <div class="description wow fadeInUp">In order to provide you with better service, be sure to enter the correct information, thank you !</div>
              </div>
              <form class="formBox">
                <ul>
                  <li class="inputItem full wow fadeInUp required">
                    <label for="company">Company</label>
                    <input type="text" class="inputControl" id="name" required>
                  </li>
                  <li class="inputItem full wow fadeInUp required">
                    <label for="name">Name</label>
                    <input type="text" class="inputControl" id="name" required>
                  </li>
                  <li class="inputItem full wow fadeInUp required">
                    <label for="email">E-mail</label>
                    <input type="text" class="inputControl" id="email" required>
                  </li>
                  <li class="inputItem full wow fadeInUp">
                    <label for="tel">Tel</label>
                    <input type="text" class="inputControl" id="tel" required>
                  </li>
                  <li class="inputItem full wow fadeInUp required">
                    <label for="address">Country</label>
                    <input type="text" class="inputControl" id="title" required>
                  </li>
                  <li class="inputItem full wow fadeInUp">
                    <label for="message">Content</label>
                    <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                  </li>

                  <li class="inputItem full wow fadeInUp required">
                    <label for="password">Code</label>
                    <input type="password" class="inputControl" id="password" required>
                    <span class="checkImg"><img src="../images/check_img.jpg"></span>
                    <button class="reBtn"></button>
                  </li>
                </ul>
                <div class="pageBtnBox wow fadeInUp">
                  <button class="btnStyle send">Send Massage</button>
                </div>
              </form>

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
              <span itemprop="name">Inquiry</span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>
    </main>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    $(function() {
      $('.formControl').focus(function() {
        $(this).addClass('focus')
      });
      $('.formControl').blur(function() {
        $(this).removeClass('focus')
      });
    });
  </script>
</body>

</html>