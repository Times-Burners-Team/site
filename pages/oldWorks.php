<!DOCTYPE html>
<?php
session_start();
if (isset($_POST["send"])) {
  $to = "timeburnersmember@gmail.com";
  $from = htmlspecialchars ($_POST['from']);
  $subject = htmlspecialchars ($_POST['subject']);
  $message = htmlspecialchars ($_POST['message']);
  $_SESSION["from"] = $from;
  $_SESSION["subject"] = $subject;
  $_SESSION["message"] = $message;
  mail($from, $subject, $message);}
 ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TimeBurnersTeam</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/scripts.js"></script>
  <script src="../js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/animate.css">
  <!--_________________________________________________________

                    HEEEEEAAAAADEEEEER
  _________________________________________________________-->
</head>
<body>
  <modal>
  <div id="myModal" class="modal fade" data-keyboard="false">
    <div class="modal-dialog">
      <div class="modal-header">
         <h3>Feedback</h3>
      </div>
      <div class="modal-body">
        <div class="containter">
        <form name="feedback" action="" method="post">
          <div class="row centered">
            <div class="col-lg-2">
              <label>From:</label>
            </div>
            <div class="col-lg-7">
              <input class="txt1" type="text" name="from" value="<?=$_SESSION["from"]?>"/>
            </div>
            <div class="col-lg-3">
              <span style="color:red"><?=$error_from?></span>
            </div>
          </div>
          <div class="row centered">
            <div class="col-lg-2">
              <label>Subject:</label>
            </div>
            <div class="col-lg-7">
              <input class="txt1" type="text" name="subject"  value="<?=$_SESSION["subject"]?>"/>
            </div>
            <div class="col-lg-3">
              <span style="color:red"><?=$error_subject?></span>
            </div>
          </div>
          <div class="row centered">
            <div class="col-lg-2">
              <label>Message:</label>
            </div>
            <div class="col-lg-7">
              <textarea name="message" rows="5" cols="40"></textarea>
            </div>
            <div class="col-lg-3">
              <span style="color:red"><?=$error_message?></span>
            </div>
          </div>
          <div class="row centered">
            <input class="btn1" type="submit" name="send" value="Send letter"/>
          </div>
        </form>
      </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</modal>
  <header>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="wow bounceInLeft">
          <a class="navbar-brand" href="../index.php">TimeBurnersTeam
          <i class="fa fa-fire" id="ic" aria-hidden="true"></i></a>
        </div>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../index.php" class="wow bounceInDown">Home</a></li>
            <li><a href="about.php" class="wow bounceInDown">About Us</a></li>
            <li><a href="oldWorks.php" class="wow bounceInDown">Portfolio</a></li>
            <li><a href="#myModal" data-toggle="modal" class="wow bounceInRight"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
</header>
<!--_________________________________________________________
                          ASIGHT
  _________________________________________________________-->
  <aside>
    <div id="dg">
      <h4 class="wow bounceInDown">Our Works</h4>
      <hr class="wow bounceInDown"/>
        <div class="container-fluid">
          <div class="wow bounceInLeft" data-wow-delay="0.5s">
          <div id="a1" class="col-lg-3">
            <div class="panel panel-primary">
              <div class="panel-heading">Interesting</div>
                <div class="text-left" class="panel-body">
                <ul type="circle">
                  <li>A unique design based on the js libraries</li></br>
                  <li>Fast and reliable site</li></br>
                  <li>Convenience xml card</li></br>
                  <li>Good pastime</li></br>
                </ul>
                </div>
            </div>
            <div class="row centered">
          </div>
        </div>
        </div>
          <div id="c1" class="col-lg-3">
            <div class="tilt">
              <div class="wow bounceInLeft">
              <a href="portfolio/siteDlyaPortfolio1/index.html" title="Switch to work №1" target="_blank" ><img src="../img/p01.png" alt=""></a>
            </div>
            </div>
           <div class="row centered">
          </div>
          </div>
          <div id="c2" class="col-lg-3">
            <div class="tilt">
              <div class="wow bounceInRight">
                <a href="portfolio/siteDlyaPortfolio2/index.html" title="Switch to work №2" target="_blank"><img src="../img/p02.png" alt=""></a>
              </div>
            </div>
              <div class="row centered">
              </div>
          </div>
          <div id="a2" class="col-lg-3">
              <div class="wow bounceInRight" data-wow-delay="0.5s">
            <div class="panel panel-primary">
              <div class="panel-heading">Interesting2</div>
                <div class="text-left" class="panel-body">
                <ul type="circle">
                  <li>Comfortable and nice looking design</li></br>
                  <li>The site is based on the bootstrap libraries</li></br>
                  <li>erierjgjesgo</li></br>
                  <li>erierjgjesgo</li></br>
                </ul>
                </div>
            </div>
              <div class="row centered">
              </div>
          </div>
        </div>
      </div>
      </div>
  </aside>
  <!--_________________________________________________________

                    FOOOOOOOTEEEEEEER
  _________________________________________________________-->
  <footer id="f">
    <div class="container">
      <div class="row centered"><hr/>
        <p>THERE WILL BE SOMETHING RELATED TO FOOOTER</p>
        <div class="col-lg-2 col-lg-offset-1">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row centered">
        <a href="#"><i class="fa fa-twitter" ></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="https://vk.com/timeburnersteam"><i class="fa fa-vk"></i></a>
      </div>
    </div>
  <div class="container">
    <div class="row centered">
      <p>2017 - 2017 TimeBurnersTeam.All rights reserved&copy. Copying is allowed with reference to the <a href="#" id="bl">blog</a>.</p>
    </div>
  </div>
</footer>
</body>
</html>
