<form class="form well clearfix">
	<h3>Contact Us!</h3>
	<div class="alert" style="display:none;"></div>
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" id="name" name="name" placeholder="Joe Smith">
	</div>
	<div class="form-group">
		<label for="email">Email Address</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="example@example.com">
	</div>
	<div class="form-group">
		<label for="date">Anticipated Event Date</label>
		<input type="text" class="form-control" id="date" name="date" placeholder="mm/dd/yyyy">
	</div>
	<div class="form-group">
		<label for="message">Message</label>
		<textarea rows="5" class="form-control" id="message" name="message" placeholder="Tell us about your party or event"></textarea>
	</div>
	<input type="hidden" name="honeypot">
	<button type="submit" class="btn btn-primary pull-right">Submit</button>
</form>

<script type="text/javascript">
	var showMessage = function(success, message){
		var $alert = $('.alert');
		$alert.text(message);
		if(success == true){
			$alert.addClass('alert-success');
		}else{
			$alert.addClass('alert-danger')
		}
		$alert.slideDown(function(){
			setTimeout(function(){
				$alert.slideUp(function(){
					$alert.removeClass('alert-success alert-danger');
					$alert.text('');
				});
			}, 5000);
		});
	}
	$(function(){
		$('form').on('submit', function(e){
			e.preventDefault();
			var self = this;
			if($('[name="honeypot"]').val() == ''){
				$.ajax({
					url: '<?= get_template_directory_uri(); ?>/includes/form-submit.php',
					method: 'POST',
					data: {
						name: $('[name="name"]').val(),
						email: $('[name="email"]').val(),
						date: $('[name="date"]').val(),
						message: $('[name="message"]').val()
					},
					success: function(response){
						var outcome = $.parseJSON(response);
						if(outcome.success){
							showMessage(true, 'Thanks for contacting us, we\'ll be in touch shortly!');
							$('[name="name"]').val('');
							$('[name="email"]').val('');
							$('[name="date"]').val('');
							$('[name="message"]').val('');
						}else{
							showMessage(false, outcome.message);
						}
					}
				});
			}else{
				showMessage(false, 'Go away non-human!');
			}
		});
	});
</script>