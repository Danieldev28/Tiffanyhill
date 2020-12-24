<main class="mTop">
  <section class="bg-gray pt-xs-2 pb-2">
  	<div class="container pl-sm-200 pl-xs-2 pr-xs-2 hely-bold">
  		<h1 class="text-black f35px font-weight-bold f-xs-25">Introducing the <span class="text-red pr-0_4 pr-xs-0_3"><i>S</i></span>-Series:</h1>
      <h1 class="text-black f35px font-weight-bold mt-0 f-xs-25"><span class="text-red pr-0_4 pr-xs-0_3"><i>S</i></span>tyle and <span class="text-red pr-0_4 pr-xs-0_3"><i>S</i></span>ubstance built in!</h1>
      <p class="text-black mb-0"><span class="text-red pr-0_2"><i>S</i></span>tainless steel kitchen appliances*  <span class="text-red pr-0_2"><i>S</i></span>tained hardwood flooring <span class="text-red pr-0_2"><i>S</i></span>tained oak stairs<br><span class="text-red pr-0_2"><i>S</i></span>mooth ceilings on 2nd floor <span class="text-red pr-0_2"><i>S</i></span>leek electric fireplace</p>
    </div>
    <div class="container">
      <img src="<?php echo $config['Site']['url']; ?>/img/kitchen.jpg" class="w-100">
    </div>
    <div class="container">
      <h3 class="text-black line-height-3_5 f28px">Ring in 2019 in superb style with the innovative <span class="text-red pr-0_4 hely-bold"><i>S</i></span>-Series, a unique complement of upscale features that add style to your home. Welcome to Tiffany Hill in Ancaster, an exceptional family community just steps from local favourites like Bennet’s Apples & Cider, Fortinos, HomeSense and exciting winter fun like skiing, tobogganing and more.</h3>
    </div>
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
  <section class="bg-blue">
    <div class="container t4 b4">
      <h3 class="text-white text-justify text-xs-left line-height-3_5">
        Tiffany Hill is a stunning community in Ancaster that offers traditional Singles and freehold Townhomes in a picturesque setting. From historic Main Street with its fine boutiques and restaurants to scenic waterfalls, golf courses and conservation areas, Ancaster is a charming community that’s rich in nature and family-friendly amenities.
      </h3>
    </div>
  </section>
  <section class="container t4" id="">
  	<div class="row">
  		<div class="col-xs-12 centered">
  			<a href="http://www.rosehavenhomes.com/" target="_blank"><img src="img/Rosehaven-Homes.png" class="img-responsive" alt="Rosehaven Homes"></a>
  		</div>
  	</div>
  </section>
  <section class="container text-center t2">
    <a class="d-inline-block" href="https://www.facebook.com/rosehavenhomes" target="_blank"><img src="<?php echo $config['Site']['url']; ?>/img/social-icons/facebook.png" title="Tiffany Hill on Facebook"></a>
  	<a class="d-inline-block" href="https://twitter.com/thisisrosehaven" target="_blank"><img src="<?php echo $config['Site']['url']; ?>/img/social-icons/twitter.png" title="Tiffany Hill on Twitter"></a>
  	<a class="d-inline-block" href="https://www.instagram.com/rosehavenhomes" target="_blank"><img src="<?php echo $config['Site']['url']; ?>/img/social-icons/instagram.png" title="Tiffany Hill on Instagram"></a>
  	<a class="d-inline-block" href="https://www.pinterest.ca/rosehavenhomes" target="_blank"><img src="<?php echo $config['Site']['url']; ?>/img/social-icons/pinterest.png" title="Tiffany Hill on Pinterest"></a>
  	<a class="d-inline-block" href="http://www.houzz.com/pro/rosehavenhomes/rosehaven-homes" target="_blank"><img src="<?php echo $config['Site']['url']; ?>/img/social-icons/social-icon.png" title=""></a>
  </section>
  <section class="container t2 b4">
    <div class="row text-justify text-green pl-1 pr-1">
      Special Promotion only - not standard. Floor upgrades are for the current areas with wood flooring. Stainless steel appliances include fridge, stove and dishwasher only. See Sales Rep for more info. Prices & specifications correct at press time. Prices quoted are in $ thousands. Map not to scale. E. & O.E.
    </div>
  </section>
</main>
