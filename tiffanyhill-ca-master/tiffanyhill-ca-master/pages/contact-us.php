<main class="mTop">
  <section class="container">
  	<img src="<?php echo $config['Site']['url']; ?>/img/contact-us-banner.jpg?v=2" class="w-100">
  	<p class="f28px text-black text-justify text-xs-left mt-2">There has never been a better time to visit Rosehaven Homes at Tiffany Hill in Ancaster, a beautiful community of 45’ and 40’ Singles and Traditional Freehold Townhomes. Visit Rosehaven today!</p>
  </section>
  <section class="container clear" id="register-now">
  	<div class="row">
     <div class="col-sm-12 col-md-4 t4 b4 text-uppercase pull-lg-right bebas text-blue fs-sm-92 fs-md-50 fs-xs-50 text-xs-center text-md-center">
       <div class="pl-2 pr-2">
         Signup<span class="d-none d-md-inline-block d-xs-inline-block">&nbsp;&nbsp;</span><span class="d-block d-md-none d-xs-none"></span>To<span class="d-none d-md-inline-block d-xs-inline-block">&nbsp;&nbsp;</span><span class="d-block d-md-none d-xs-none"></span>Learn<span class="d-none d-md-inline-block d-xs-inline-block">&nbsp;&nbsp;</span><span class="d-block d-md-none d-xs-none"></span>More
       </div>
     </div>
      <div class="col-xs-12 col-md-8 t4 xs-t0 b4 pull-md-left">
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
          <div class="form-group">
  					<label class="control-label">How did you hear about us? *</label>
  					<select name="howhear" class="form-control" required>
  					    <option value="">Pick One</option>
                        <option value="BuzzBuzz Homes">BuzzBuzz Homes</option>
                        <option value="Facebook/Instagram">Facebook/Instagram</option>
                        <option value="Google Search">Google Search</option>
                        <option value="Online Ad">Online Ad</option>
                        <option value="Toronto Star">Toronto Star</option>
                        <option value="Can India">Can India</option>
                        <option value="Mid Week">Mid Week</option>
                        <option value="South Asian Weekender">South Asian Weekender</option>
                        <option value="Homes Magazine">Homes Magazine</option>
                        <option value="Condo Life">Condo Life</option>
                        <option value="Toronto Star Wonderlist">Toronto Star Wonderlist</option>
                        <option value="Signage/Driveby">Signage/Driveby</option>
                        <option value="Referral">Referral</option>
                        <option value="Word of Mouth">Word of Mouth</option>
                        <option value="Email">Email</option>
                    </select>
  				</div>
          <div class="form-group">
            <label class="block">ARE YOU A REALTOR AND/OR BROKER?</label>
            <label class="checkbox-inline first">
              <input type="radio" name="realtor" class="realtor" value="1" required> Yes
            </label>
            <label class="checkbox-inline">
              <input type="radio" name="realtor" class="realtor" value="2" required> No
            </label>
          </div>
          <div class="form-group collapse" id="brokerage-wrap">
  					<label for="brokerage" class="control-label">Brokerage *</label>
  					<input type="brokerage" class="form-control" id="brokerage" name="brokerage">
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
  <section class="bg-blue t4 b4">
  	<div class="container">
  		<h1 class="text-uppercase text-white text-center f-xs-25">Sales Office & Model Home<br>Hours Of Operation:</h1>
  	</div>
  </section>
  <?php include("footer.php") ?>
</main>
