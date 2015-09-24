<?php
define('TITLE', 'About Us');
define('NAV', 'about');
require __DIR__.'/../include/head.php';
?>
<link href="css/about.css" rel="stylesheet">
<?php
require __DIR__.'/../include/nav.php';
?>

    <!-- Three columns of text -->
    <div class="container about">
      <div class="row">
        <div class="col-lg-12">
            <img src="images/tetons.jpg" width=100%>
        </div>
        <div class="col-lg-offset-1 col-lg-10">
          <h2>About Us</h2>
		  <!--   ideas for about us from here: http://blog.publishedandprofitable.com/2011/01/20/tips-for-creating-effective-about-us-statements/  cara  -->
          <p class="text-justify">
            <i>Bring the man to the mountain, not the mountain to the man.</i>
          </p>
          <p class="text-justify">
            We love data and we know how hard it can be to implement data collection structures in the business world. We love that we can help you organize your data and better yet, make money with your data!
            With over a decade of analytics experience, Bradley Wogsland brings
            a diverse toolkit to monetize your data.
          </p>
          <p><a class="btn btn-default" href="index.html" role="button">Learn More &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div><!-- /.container -->


    <?php
    require __DIR__.'/../include/footer.php';
    ?>
