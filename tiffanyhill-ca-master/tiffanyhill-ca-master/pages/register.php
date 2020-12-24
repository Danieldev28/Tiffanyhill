<main class="mTop">
  <section class="bg-blue t-0_5 position-relative d-block" id="contact">
  	<div class="container">
  		<h3 class="text-center text-white text-uppercase f42px f-md-28 f-xs-24 hely-bold">Register To Learn More</h3>
  	</div>
  </section>
  <section class="container clear">
  	<div class="row">
  		<div class="col-xs-12 t4 b4">
  			<div id="flashMessage" class="hidden"></div>
  			<form action="send.php" method="POST" class="form-horizontal" role="form" novalidate>
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
  				<div class="form-group">
  					<label for="comments" class="control-label">Comments</label>
  					<textarea class="form-control" name="comments" rows="4"></textarea>
  				</div>
  				<div class="checkbox-inline">
  					<input type="checkbox" name="casl" id="casl"  value="1" required>
  					<label for="casl">In accordance with Canadian Anti-Spam Legislation, I have read Rosehaven Homes&#8217; <a href="https://www.rosehavenhomes.com/privacy-policy/" target="_blank">Privacy Policy</a> and give my consent to receive electronic communications from Rosehaven Homes regarding; communities of potential interest, news, events, promotions and other related subjects.</label>
  				</div>
  				<div class="text-right">
  					<input type="submit" class="btn btn-default btn-primary" value="Submit" onclick="ga('send', 'event', 'Registration', 'Submit', 'Registration', '1');" />
  				</div>
  			</form>
  		</div>
  	</div>
  </section>
  <?php include("footer.php"); ?>
</main>
