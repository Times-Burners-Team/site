<!DOCTYPE html>
<?php
if(isset($_POST['mailsend'])){

 $to = "timeburnersmember@gmail.com,de1337_f@mail.ru,timesburnersteam@gmail.com";
 $from = htmlspecialchars(trim($_POST['from']));
 $subject = htmlspecialchars(trim($_POST['subject']));
 $message = htmlspecialchars(trim($_POST['message']));
 $headers = "From:".$from;

 if(mail($to, $subject, $message, $headers,"Content-type:text/plain; charset= utf-8\r\n")){;}

}
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
            <div class="container">
              <form action="" name="mail" method="post">
                <div class="row-centered">
                  <div class="col-lg-5">
                   <label>From:</label>
                  </div>
                   <div class="col-lg-7">
                     <input name="from" type="text" size="20" value="">
                   </div>
                 </div>
                 <div class="row-centered">
                  <div class="col-lg-5">
                   <label>Subject:</label>
                  </div>
                   <div class="col-lg-7">
                      <input name="subject" type="text" size="20" value="">
                   </div>
                 </div>
                 <div class="row-centered">
                  <div class="col-lg-5">
                     <label>Message:</label>
                  </div>
                     <div class="col-lg-7">
                         <textarea name="message" rows="3" cols="25" >
                         </textarea>
                     </div>
                   </div>
                   <div class="row-centered">
                     <div class="col-lg-5">
                  <input name="mailsend" type="submit" value="Send">
                  </div>
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
          <a class="navbar-brand" href="../index">TimeBurnersTeam
          <i class="fa fa-fire" id="ic" aria-hidden="true"></i></a>
        </div>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../index" class="wow bounceInDown">Home</a></li>
            <li><a href="about" class="wow bounceInDown">About Us</a></li>
            <li><a href="oldWorks" class="wow bounceInDown">Portfolio</a></li>
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
              <div class="panel-heading">Example 1</div>
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
              <div class="panel-heading">Example 2</div>
                <div class="text-left" class="panel-body">
                <ul type="circle">
                  <li>Comfortable and nice looking design</li></br>
                  <li>The site is based on the bootstrap libraries</li></br>
                </ul>
                </div>
            </div>
              <div class="row centered">
              </div>
          </div>
        </div>
      </div>
      <div class="container">
        <br><br><br><br><br><br><br><br><br>
    </div>
      </div>
  </aside>
  <!--_________________________________________________________

                    FOOOOOOOTEEEEEEER
  _________________________________________________________-->
  <footer id="f">
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
