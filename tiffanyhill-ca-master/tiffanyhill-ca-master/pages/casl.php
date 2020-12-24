<section class="container">
	<div class="row t10">
		<div class="col-sm-12 t10">
			<div class="col-sm-12">
				<div id="flashMessage" class="hidden"></div>
			</div>
			<form action="unsubscribe.php" method="POST" class="form-horizontal" role="form" novalidate>
				<div class="form-group">
					<div class="col-sm-6">
						<label for="inputEmail3" class="control-label">*Email Address:</label>
						<input type="email" class="form-control" id="inputEmail3" name="email" required>
					</div>
					<div class="col-sm-6">
						<label for="inputEmail4" class="control-label">*Confirm Email Address:</label>
						<input type="email" class="form-control" id="inputEmail4" name="cemail" required>
					</div>
				</div>
				<div class="col-sm-12 text-right b4">
					<input type="submit" class="btn btn-default btn-primary" value="Submit" onclick="ga('send', 'event', 'Registration', 'Submit', 'Unsubscribe', '1');" />
				</div>
			</form>
		</div>
	</div>
</section>
<section class="container t4">
	<div class="row text-center">
		<p>&copy; <?php echo date('Y'); ?> Tiffany Hill. All rights reserved.</p>
	</div>
</section>