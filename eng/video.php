<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/video.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper newsPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain downloadBox wow" aria-label="main" itemscope>
      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_video.jpg" alt=""></div>
        <div class="unitTitleBox">
          <h1 class="title wow fadeInRight" data-wow-delay="0s">VIDEO</h1>
          <div class="subTitle wow fadeInRight" data-wow-delay="0.2s">MEDIA</div>
        </div>
      </div>

      <div class="mainBox innerPage wow">

        <div class="pageContent download">
          <div class="container">
            <div class="listBox">

              <? for ($i = 0; $i < 10; $i++) { ?>
                <div class="item wow fadeInUp" data-wow-delay="0s">
                  <div class="picBox">
                    <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/6dmEKRwZOPo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="infoBox">
                      <h2 class="title">FMS Series</h2>
                    </div>
                  </div>
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
              <span itemprop="name">Video</span>
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

  <script>
    //創建<iframe>：API code載入後，將 <div id="player"> 取代為 <iframe> tag
    var player;
    //創建影片播放器：API code載入後會自動執行
    function onYouTubeIframeAPIReady() {
      player = new YT.Player('player', {
        fitToBackground: true,
        events: {
          'onReady': yt.onPlayerReady, //當播放器準備就緒時執行
        }
      });
    }

    var yt = yt || {};
    yt = {
      onPlayerReady: function(event) {
        //綁定撥放按鈕
        $('#play-btn').fadeIn().click(function() {
          yt.playerPlay()
        });
      },
      playerPlay: function() {
        $('#player').addClass('show'); //iframe 淡入，播放器開始撥放
        player.playVideo()
      },
      playerClose: function() {
        player.stopVideo(); //播放器停止撥放
        $('#player').removeClass('show'); //iframe 淡出
      }
    }
  </script>
</body>

</html>