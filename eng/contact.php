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

    <main class="siteMain contactBox wow" aria-label="main" itemscope>
      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_contact.jpg" alt=""></div>
        <div class="unitTitleBox">
          <h1 class="title wow fadeInRight" data-wow-delay="0s">CONTACT US</h1>
          <div class="subTitle wow fadeInRight" data-wow-delay="0.2s">CONTACT</div>
        </div>
      </div>

      <div class="mainBox innerPage wow">

        <div class="pageContent contact">
          <div class="pageTitleBox">
            <h1 class="pageTitle wow fadeInUp">Company Infomation</h1>
          </div>
          <div class="topBox">
            <div class="container">
              <div class="content">
                <div class="infoBox wow fadeInUp" data-wow-delay="0s">
                  <ul>
                    <li class="address">103, Lane 506, Sec. 1, Sinan Road, Wurih Dist, Taichung City, Taiwan 41467</li>
                    <li class="tel"><a href="tel:+886423359935">+886-4-2335-9935</a></li>
                    <li class="fax">+886-4-2335-9929</li>
                    <li class="mail">
                      <a href="mailto:export@wenson.com.tw">export@wenson.com.tw</a>
                    </li>
                  </ul>
                </div>

                <div class="mapBox wow fadeInUp"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14570.602485161335!2d120.640312!3d24.078605!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693bf254b62453%3A0x5ffddcb8957c7cfd!2z5a-25ZiJ6Kqg5bel5qWt6IKh5Lu95pyJ6ZmQ5YWs5Y-4IGNuYyByb3RhcnkgdGFibGUg5YiG5bqm55ukIOesrOWbm-i7uCDkupTou7hDTkPliIbluqbnm6Qg5aSa5bel5L2N5b2I5oCn5pm65oWn5YCJ5YSy57O757Wx!5e0!3m2!1szh-TW!2stw!4v1685151572234!5m2!1szh-TW!2stw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="content">
              <div class="topInfo">
                <h2 class="title wow fadeInUp">Customer opinion</h2>
                <div class="description wow fadeInUp">If you have any questions or would like to request for further information about us, listed within this section, you can either complete the contact form as below and submit to us, or find an appropriate department as below to fax or email to us your questions, inquiries and comments etc. We will provide prompt assistance and endeavor to get back to you as soon as we can.</div>
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
              <span itemprop="name">Contact</span>
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