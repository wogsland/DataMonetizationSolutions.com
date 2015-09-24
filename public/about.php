<?php
define('TITLE', 'About Us');
require __DIR__.'/../include/head.php';
?>

<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">Data Monetization Solutions</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html#analytic">Analytic Solutions</a></li>
                <li><a href="index.html#computing">Computing Solutions</a></li>
                <li><a href="index.html#devops">Dev-Ops Solutions</a></li>
                <li class="active"><a href="#">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

    <!-- Three columns of text -->
    <div class="container about">
      <div class="row">
        <div class="col-lg-12">
            <img src="images/tetons.jpg" width=100%>
        </div>
        <div class="col-lg-offset-1 col-lg-10">
          <h2>About Us</h2>
		  <!--   ideas for about us from here: http://blog.publishedandprofitable.com/2011/01/20/tips-for-creating-effective-about-us-statements/  cara  -->
          <p class="text-justify">We love data and we know how hard it can be to implement data collection structures in the business world. We love that we can help you organize your data and better yet, make money with your data!
            With over a decade of analytics experience, Bradley Wogsland brings
            a diverse toolkit to monetize your data.
          </p>
          <p><a class="btn btn-default" href="index.html" role="button">Learn More &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div><!-- /.container -->


    <div class="container">
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
