<?php
define('TITLE', 'Data Monetization Solutions');
define('NAV', 'home');
require __DIR__.'/../include/head.php';
?>
<link href="css/carousel.css" rel="stylesheet">
<?php
require __DIR__.'/../include/nav.php';
?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Analytic Solutions</h1>
              <p>Are you collecting data fast but haven't figured out how to monetize it? We'll help you drill down and help find the actionable items in your datasets using tools developed to understand some of the biggest datasets in the world.</p>
              <p><a class="btn btn-lg btn-primary" href="contact.html" role="button">Contact Us</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Computing Solutions</h1>
              <p>
                Have an idea about how your data could be monetized but don't have the know-how to build the feedback loops that can make your company smarter? When you need more than just a pretty website, when you need a system to ingest data, make decisions, and learn from those decisions; we can help.
              </p>
              <p><a class="btn btn-lg btn-primary" href="contact.html" role="button">Contact Us</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Dev-Ops Solutions</h1>
              <p>
                Is your IT team isolated from your Operations? Is the business requesting things IT cannot build? Is IT building things the business needs? Let us help end the communication breakdown.
              </p>
              <p><a class="btn btn-lg btn-primary" href="contact.html" role="button">Contact Us</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="images/jpsi.gif" alt="J/&Psi;" width="140" height="140">
          <h2>Understanding</h2>
          <p>That's what we bring to the table. You've got the data. We'll bring the meaning &amp; application.</p>
          <p><a class="btn btn-default" href="#" role="button">Learn More &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <a name="analytic"></a>
        <div class="col-md-7">
          <h2 class="featurette-heading">Analytic Solutions <br> <span class="text-muted">It will blow your mind.</span></h2>
          <p class="lead">
            Are you collecting data fast but haven't figured out how to monetize it? We'll help you drill down and help find the actionable items in your datasets using tools developed to understand some of the biggest datasets in the world.
          </p>
        </div>
        <div class="col-md-5">
          <img src="images/mathematics-analyst.jpg" class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Knowledge!">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <a name="computing"></a>
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Computing Solutions <br> <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">
            Have an idea about how your data could be monetized but don't have the know-how to build the feedback loops that can make your company smarter? When you need more than just a pretty website, when you need a system to ingest data, make decisions, and learn from those decisions; we can help.
          </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="images/engine.jpg" data-src="holder.js/500x500/auto" alt="Rev up your business engine.">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <a name="devops"></a>
        <div class="col-md-7">
          <h2 class="featurette-heading">Dev-Ops Solutions <br> <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">
            Is your IT team isolated from your Operations? Is the business requesting things IT cannot build? Is IT building things the business needs? Let us help end the communication breakdown.
          </p>
        </div>
        <div class="col-md-5">
          <img src="images/conversation.jpg" class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Let us help facilitate conversations.">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>
          &copy; 2015 Data Monetization Solutions &middot;
          <a href="privacy.html">Privacy</a>
          &middot; <a href="terms.html">Terms</a>
        </p>
      </footer>

    </div><!-- /.container -->

    <div class="white-style ">
      <a href="http://www.freepik.com/free-photos-vectors/education">Education vector designed by Freepik</a>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
