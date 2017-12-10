<!DOCTYPE html>
<?php
if(isset($_POST['mailsend'])){
 $to = "timeburnersmember@gmail.com,timesburnersteam@gmail.com";
 $from = htmlspecialchars(trim($_POST['from']));
 $subject = htmlspecialchars(trim($_POST['subject']));
 $message = htmlspecialchars(trim($_POST['message']));
 $headers = "From:".$from;

 if(mail($to, $subject, $message, $headers)){;}

}

?>
<html lang="ru">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>TimeBurnersTeam</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/jquery.the-modal.js"></script>
  <script>
    new WOW().init();
  </script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/the-modal.css">
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
             <form action="" name="mail" method="post">
                 <div col-lg-5>
                    From:
                 </div>
                  <div col-lg-7>
                    <input name="from" type="text" size="20" value="">
                  </div><br>
                 <div col-lg-5>
                     Subject:
                 </div>
                  <div col-lg-7>
                     <input name="subject" type="text" size="20" value="">
                  </div><br>
                 <div col-lg-5>
                     Message:
                 </div>
                    <div col-lg-7>
                        <textarea name="message" rows="10" cols="30" >
                        </textarea>
                    </div><br>
                 <input name="mailsend" type="submit" value="Send">
              </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

    </div>
    </div>
    </div>
</modal>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="wow bounceInLeft">
      <a class="navbar-brand" href="index.php">TimeBurnersTeam
      <i class="fa fa-fire" id="ic" aria-hidden="true"></i></a>
    </div>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" class="wow bounceInDown">Home</a></li>
        <li><a href="pages/about.php" class="wow bounceInDown">About Us</a></li>
        <li><a href="pages/oldWorks.php" class="wow bounceInDown">Portfolio</a></li>
        <li><a href="#myModal" data-toggle="modal" class="wow bounceInRight"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
</div>
<div id="headerwrap">
  <div class="container">
    <div class="row centered">
      <div class="col-lg-8 col-lg-offset-2">
        <h1 class="wow bounceInDown">Mi Norm Cheliki</h1>
        <h2 class="wow bounceInUp">Normas vse delaem</h2>
      </div>
    </div>
  </div>
</div>
<div class="container w">
  <div class="row centered">
    <br><br>
  <div class="col-lg-4">
    <div class="wow bounceInLeft" data-wow-delay="0.5s">
      <i class="fa fa-heart"></i><br>
        <button class="btn btn-link" data-toggle="collapse" data-target="#hide"><h4>Unical Design</h4></button>
          <div class="collapse" id="hide">
              <p>Appearance that everyone likes</p>
          </div>
    </div>
  </div>
    <div class="col-lg-4">
      <div class="wow bounceIn" data-wow-delay="0.5s">
      <i class="fa fa-laptop"></i><br/>
      <button class="btn btn-link" data-toggle="collapse" data-target="#hide1"><h4>Best Code</h4></button>
        <div class="collapse" id="hide1">
        <p>The fast workability of the site is ensured</p>
      </div>
    </div>
  </div>
    <div class="col-lg-4">
      <div class="wow bounceInRight" data-wow-delay="0.5s">
      <i class="fa fa-trophy"></i><br>
        <button class="btn btn-link" data-toggle="collapse" data-target="#hide2"><h4>Achievements</h4></button>
          <div class="collapse" id="hide2">
          <p>The best way to achieve the goal that you set before us</p>
        </div>
      </div>
    </div>
  </div>
  <br><br>
</div>
<div id="dg">
  <div class="container">
    <div class="row centered">
      <div class="wow bounceIn" data-wow-delay="1s">
      <h4>Nashi raboti</h4>
    </div>
      <br>
      <div class="col-lg-4">
        <div class="tilt">
        <div>
          <a href="pages/oldWorks.php"><img class="wow bounceInLeft" data-wow-delay="1s" src="img/p01.png" alt=""></a>
        </div>
      </div>
      </div>
      <div class="col-lg-4">
        <div class="tilt">
        <section>
          <a href="pages/oldWorks.php"><img class="wow bounceIn" data-wow-delay="1s" src="img/p02.png" alt=""></a>
        </section>
      </div>
      </div>
      <div class="col-lg-4">
        <div class="tilt">
        <div>
          <a href="pages/oldWorks.php"><img  class="wow bounceInRight" data-wow-delay="1s" src="img/p03.png" alt=""></a>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<div class="container wb">
  <div class="row centered">
    <br><br>
    <div class="col-lg-8 col-lg-offset-2">
      <div>
      <div class="wow bounceIn"><h4>Mi delaem saity</h4></div>
    </div>
      <p class="wow bounceIn">Horosho delaem</p>
      <p><br><br></p>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-10 col-lg-offset-1">
      <div class="wow bounceInDown">
      <img src="img/munter.png" alt="" class="img-responsive">
    </div>
    </div>
  </div>
</div>
<div id="r">
  <div class="container">
    <div class="row centered">
      <div class="col-lg-8 col-lg-offset-2">
        <h4 class="wow bounceInRight">Delaem horosh, s dushoi</h4>
        <p class="wow bounceInLeft">Tut budet text</p>
      </div>
    </div>
  </div>
</div>
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
        <a href="#"><i id="i" class="fa fa-twitter" ></i></a>
        <a href="#"><i id="i" class="fa fa-facebook"></i></a>
        <a href="https://vk.com/timeburnersteam"><i id="i" class="fa fa-vk"></i></a>
      </div>
    </div>
    <div class="container">
      <div class="row centered">
        <?php
        echo "Hello World";
        ?>
        <p>2017 - 2017 TimeBurnersTeam.All rights reserved&copy. Copying is allowed with reference to the <a href="#" id="bl">blog</a>.</p>
      </div>
    </div>
  </footer>
</body>
</html>
