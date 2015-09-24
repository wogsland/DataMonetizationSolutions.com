<?php
define('TITLE', 'Contact Us');
define('NAV', 'contact');
require __DIR__.'/../include/head.php';
?>
<link href="css/contact.css" rel="stylesheet">
<?php
require __DIR__.'/../include/nav.php';
?>

    <div class="container contact">
      <center>
        <h1>Connect With Us!</h1>
        <div class="col-sm-offset-3 col-sm-6">
          <form class="form-horizontal" action="form/contact.do" method="POST">
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <label for="comments" class="col-sm-2 control-label">Comments</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </center>
    </div><!-- /.container -->

    <?php
    require __DIR__.'/../include/footer.php';
    ?>
