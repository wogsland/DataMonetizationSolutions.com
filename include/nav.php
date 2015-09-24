  </head>
  <!-- NAVBAR================================================== -->
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
                <li<?php echo 'home' == NAV ? ' class="active"' : '';?>><a href="index.html">Home</a></li>
                <li<?php echo 'analytics' == NAV ? ' class="active"' : '';?>><a href="index.html#analytic">Analytic Solutions</a></li>
                <li<?php echo 'computing' == NAV ? ' class="active"' : '';?>><a href="index.html#computing">Computing Solutions</a></li>
                <li<?php echo 'devops' == NAV ? ' class="active"' : '';?>><a href="index.html#devops">Dev-Ops Solutions</a></li>
                <li<?php echo 'about' == NAV ? ' class="active"' : '';?>><a href="about.html">About</a></li>
                <li<?php echo 'contact' == NAV ? ' class="active"' : '';?>><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
