<main class="mTop">
  <section class="bg-blue pt-xs-2 pb-2">
  	<div class="container pl-sm-200 pl-xs-2 pr-xs-2 hely-bold">
  		<h1 class="text-white f47px text-uppercase mt-4">Sign up to learn more </h1>
    </div>
    <div class="container mt-1 ">
      <h3 class="text-white text-center line-height-3_5 f28px">Tiffany Hill is a stunning community in Ancaster that offers traditional Singles and freehold Townhomes in a picturesque setting. From historic Main Street with its fine boutiques and restaurants to scenic waterfalls, golf courses and conservation areas, Ancaster is a charming community that’s rich in nature and family-friendly amenities.</h3>
    </div>
  </section>
  <section class="container clear" id="register-now">
  	<div class="row">
      <div class="col-xs-12 t4 xs-t0 b4 pull-md-left">
  			<div id="flashMessage" class="hidden"></div>
  			<form action="<?php echo $config['Site']['url']; ?>/send.php" method="POST" class="form-horizontal" role="form" novalidate>
  				<div class="form-group">
  					<label for="name" class="control-label">Full Name *</label>
  					<input type="text" class="form-control" id="name" name="name" required>
  				</div>
  				<div class="form-group">
  					<label for="phone" class="control-label">Phone *</label>
  					<input type="text" class="form-control" id="phone" name="phone" required>
  				</div>
  				<div class="form-group">
  					<label for="email" class="control-label">Email *</label>
  					<input type="email" class="form-control" id="email" name="email" required>
  				</div>
  				<div class="checkbox-inline">
  					<input type="checkbox" name="casl" id="casl"  value="1" required>
  					<label for="casl">In accordance with Canadian Anti-Spam Legislation, I have read Rosehaven Homes&#8217; <a href="https://www.rosehavenhomes.com/privacy-policy/" target="_blank">Privacy Policy</a> and give my consent to receive electronic communications from Rosehaven Homes regarding; communities of potential interest, news, events, promotions and other related subjects.</label>
  				</div>
  				<div class="text-center mt-1">
  					<input type="submit" class="btn btn-default btn-primary" value="Submit" onclick="ga('send', 'event', 'Registration', 'Submit', 'Registration', '1');" />
  				</div>
  			</form>
  		</div>
  	</div>
  </section>
  <?php include("footer.php"); ?>
</main>
