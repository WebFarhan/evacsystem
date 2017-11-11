<html>
	<head>

    <!---- include jquery file and stylesheets-->  
    <script src="http://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/nivo-lightbox.css" rel="stylesheet" />
    <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">
    <!-- end -->
		
	</head>

	<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  	<!-- Navigation -->
	  <div id="navigation">
	    <nav class="navbar navbar-custom" role="navigation">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-2 mob-logo">
	            <div class="row">
	              <div class="site-logo">
	                <?php echo $this->html->image('logo.jpg', array('alt'=>'','width'=>'120px','height'=>'80px'));?>
	              </div>
	            </div>
	          </div>
            <div class="col-md-10 mob-menu">
              <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu"><i class="fa fa-bars"></i></button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about"><span class="fa fa-hand-o-down"style="color:#ff9900;"></span>&nbsp&nbsp&nbspAbout Us</a></li>
                    <li><a href="#service"><span class="fa fa-info-circle"style="color:#ff9900;"></span>&nbsp&nbsp&nbspServices</a></li>
  				          <li><a href="#login"><span class="fa fa-users"style="color:#ff9900;"></span>&nbsp&nbsp&nbspLogin</a></li>
                    <li><a href="signup"><span class="fa fa-pencil"style="color:#ff9900;"></span>&nbsp&nbsp&nbspSign Up</a></li>
                  </ul>
                </div>
                <!-- /.Navbar-collapse -->
              </div>
            </div>
          </div>
        </div>
        <!-- /.container -->
      </nav>
    </div>
    <!-- /Navigation -->

    <!-- Section: about -->
    <section id="about" class="home-section color-dark bg-white" style="margin-left: auto; margin-right:auto;">
    
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
              <div class="section-heading text-center">
  			
                <h2 class="h-bold"><span class="fa fa-hand-o-down"style="color:#ff9900;"></span>&nbsp&nbsp&nbsp About Us</h2>
                <div class="divider-header"></div>
                <p>Working together to ensure that Louisiana is prepared to respond to emergencies, recover from them, and mitigate against their impacts. We coordinate assistance provided to individuals, households, and businesses recovering from disaster or emergency impacts.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="text-center">
        <div class="container">
  	    
          <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-4">
              <div class="team-wrapper-big wow bounceInUp" data-wow-delay="0.2s">
                <div class="team-wrapper-overlay">
                  <h5>Government Organization</h5>
                  <p></p>
                </div>
                <?= $this->html->image('gov.jpg',array('alt'=>''));?>
              </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-4">
              <div class="team-wrapper-big wow bounceInUp" data-wow-delay="0.5s">
                <div class="team-wrapper-overlay">
                  <h5>Private Organization</h5>
                  <p></p>
                </div>
                
                 <?= $this->html->image('private.jpg',array('alt'=>''));?>
              </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4">
              <div class="team-wrapper-big wow bounceInUp" data-wow-delay="0.8s">
                <div class="team-wrapper-overlay">
                  <h5>Volunteer</h5>
                  <p></p>
                </div>
                <?= $this->html->image('volunteer.png',array('alt'=>''));?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: about -->

    <!-- Section: parallax 1 -->
    <section id="parallax1" class="home-section parallax text-light" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
              <h2 class="big-heading highlight-dark wow bounceInDown" data-wow-delay="0.2s">Lets Prepare and Stay Aware !</h2>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section: services -->
    <section id="service" class="home-section color-dark bg-white">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
              <div class="section-heading text-center">
                <h2 class="h-bold"><span class="fa fa-info-circle"style="color:#ff9900;"></span>&nbsp&nbsp&nbspServices</h2>
                <div class="divider-header"></div>
  				<div class="bodycontent">
  					Are you Ready? Lets get Started.
  				</div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="text-center">
        <div class="container">

          <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">
              <div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
                  <div class="service-icon">
                    <span class="fa fa-home fa-5x"style="color:#009900;"></span>
                  </div>
                  <div class="service-desc">
                    <h5>Shelter</h5>
                    
                      <p>If an emergency has forced you to evacuate your home, If you need our help, come to the shelter. When you arrive, please let us know if you have any specific needs or requests for equipment, supplies or food requirements. Every effort will be made to accommodate your needs.</p>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
              <div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
                  <div class="service-icon">
                    <span class="fa fa-building-o fa-5x"style="color:#cc9900;"></span>
                  </div>
                  <div class="service-desc">
                    <h5>Storage</h5>
                    
                      <p> Are you inflicted with damage to property? We will help you in mobilizing your belongings quickly. In addition to providing self-storage, supplies are provided to help with disaster recovery, temperature-controlled sample transportation, including boxes, tarps, propane and propane tanks.</p>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
              <div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
                  <div class="service-icon">
                    <span class="fa fa-truck fa-5x"style="color:#800000;"></span>
                  </div>
                  <div class="service-desc">
                    <h5>Transportation</h5>
                    
                      <p>We provide transportation in the vicinity of the disaster for who cannot drive or who do not have a vehicle. Our Support includes accessible vehicles
(e.g., lift-equipped or vehicles suitable for transporting individuals who use oxygen).</p>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
              <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
                  <div class="service-icon">
                    <span class="fa fa-ambulance fa-5x" style="color:#ff0000;"></span>
                  </div>
                  <div class="service-desc">
                    <h5>Medical Aid</h5>
                    
                      <p>We provide immediate medical help needed for you. We provide services that include personal health monitoring, transportation of medicines and other emergency first-aid treatment for the evacuees.</p>
                    
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: services -->

  <!-- Section: parallax 3 -->
  <section id="parallax3" class="home-section parallax text-light text-center" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="testimonialslide clearfix flexslider">
            <ul class="slides">
              <li>
                <blockquote> Create and practice an emergency plan so your family will know what to do in a crisis.</blockquote>
                <h4>Make a Plan</h4>
              </li>
			        <li>
                <blockquote>How will you take care for your pets in an emergency now?</blockquote>
              </li>
			        <li>
                <blockquote>What to do in case you are separated during an emergency?</blockquote>
				    <h4>Hence, Important to make a plan!</h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--login-->
  <section id="login" class="home-section nopadd-bot color-dark bg-white text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="section-heading text-center">
              <h2 class="h-bold"><span class="fa fa-users"style="color:#ff9900;"></span>&nbsp&nbsp&nbspLogin</h2>
              <div class="divider-header"></div>
            </div>
          </div>
        </div>
      </div>

    </div>
	<div class="container">
		<div class="panel-body">
						<?= $this->Form->create() ?>
            <fieldset>
			    	  	<div class="form-group">
			    		    <?php 
			    		    echo $this->Form->control('email'); 
			    		    ?>
			    		</div>
			    		<div class="form-group">
			    			<?php
			    			echo $this->Form->control('password');
			    			?>
			    		</div> 
              <div class="form-group">
			    		   <?= $this->Form->button(__('Submit'),['class'=>"btn btn-lg btn-success"]) ?>
              </div>
			    		<div>
                <h6>Are you a new user ? Register Here <span class="fa fa-arrow-right"style="color:#ff9900;"></span> <a href="signup"><button class="btn btn-lg btn-primary">Sign Up</button></a></h6>
			    		</div>
			    	</fieldset>
			      	<?= $this->Form->end() ?>
		</div>
		
	</div>
</section>
  <!--end-->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">

          <div class="text-center">
            <a href="#about" class="totop"><i class="fa fa-arrow-up" style="color:#ff9900;"></i></a>
            <p>&copy;<b>DES</b>&nbsp&nbsp<i>Disaster Evacuation System</i>. &nbsp&nbsp All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

<!-- core js files-->
<?= $this->Html->script('jquery.sticky.js') ?>
<?= $this->Html->script('slippry.min.js') ?>
<?= $this->Html->script('jquery.flexslider-min.js') ?>
<?= $this->Html->script('morphext.min.js') ?>
<?= $this->Html->script('gmap.js') ?>
<?= $this->Html->script('jquery.mb.YTPlayer.js') ?>
<?= $this->Html->script('jquery.easing.min.js') ?>
<?= $this->Html->script('jquery.scrollTo.js') ?>
<?= $this->Html->script('jquery.appear.js') ?>
<?= $this->Html->script('stellar.js') ?>
<?= $this->Html->script('wow.min.js') ?>
<?= $this->Html->script('owl.carousel.min.js') ?>
<?= $this->Html->script('nivo-lightbox.min.js') ?>
<?= $this->Html->script('jquery.nicescroll.min.js') ?>
<?= $this->Html->script('custom.js') ?>
<?= $this->Html->script('contactform.js"') ?>
</body>
</html>
