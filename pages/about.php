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
  </script>
  <script>
    new WOW().init();
  </script>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="../css/width425px.css">
  <link rel="stylesheet" href="../css/width375px.css">
  <link rel="stylesheet" href="../css/width320px.css">
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
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="wow bounceInLeft">
        <a class="navbar-brand" href="../index.php">TimeBurnersTeam<i class="fa fa-fire" id="ic" aria-hidden="true"></i></a>
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
  <div id="headerwrap">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h1 class="wow bounceInDown">The team is founded in 2017</h1>
          <h2 class="wow bounceInUp">By group of enthusiasts from Russia.</h2>
        </div>
      </div>
    </div>
  </div>
  <aside>
    <div class="container">
        <div class="wow bounceInDown">
          <div id="cont2"class="container">
              <img src="../img/me3.jpg" alt="">
              <div id="content" class="row-centered">
                <div class="inf">
                  <h1>Fomin Dmitrii</h1>
                  <p>He has organized group of enthusiasts people</p>
                  <p>Skills</p>
                  <p>HTML5, PHP, XML, XSL, WordPress,</p>
                  <p>CSS3, MySQL, XHTML.
                </div>
              </div>
          </div>
        </div>
      </div>
    <div class="container">
        <div class="wow bounceIn">
          <div id="cont2"class="container">
              <img src="../img/me1.jpg" alt="">
              <div id="content" class="row-centered">
                <div class="inf">
                  <h1>Stacenko Kirill</h1>
                  <p>He is junior Web-Developer</p>
                  <p>Skills:</p>
                  <p>PHP, HTML5, CSS3, XML, XSL,</p>
                  <p>XHTML, MySQL, MySQL Administration.</p>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="container">
          <div class="wow bounceInUp">
            <div id="cont2"class="container">
                <img src="../img/me2.jpg" alt="">
                <div id="content" class="row-centered">
                  <div class="inf">
                    <h1>Maximov Kirill</h1>
                    <p>He is junior designer</p>
                    <p>Who did not designed this site.</p>
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
      <div class="row centered">
        <a href="#"><i id="i" class="fa fa-twitter" ></i></a>
        <a href="#"><i id="i" class="fa fa-facebook"></i></a>
        <a href="https://vk.com/timeburnersteam"><i id="i" class="fa fa-vk"></i></a>
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
