<?php include ROOT.'/views/layouts/header.php'; ?>
<div class="container">
	<section class="register">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="box">
					<h3><?php echo $pageTitle ?></h3>
					<?php if (isset($errors) && is_array($errors)): ?>
					<div class="form-errors">
						<ul>
							<?php foreach ($errors as $error): ?>
								<li> - <?php echo($error) ?></li>
							<?php endforeach ?>
						</ul>
					</div>
					<?php endif ?>
					<?php if ($result): ?>
						<h3>Малява послана! Еси шо, мы свяжемся с вами.</h3>
					<?php else: ?>
					
					<div class="login-form-1 register-form">
						<div class="media">
							<div class="media-body">
								<form id="login-form" class="text-left" action="" method="post">
	                <div class="login-form-main-message"><h4>Есть проблемы? Отпишитесь, попробуем порешать</h4></div>
	                <div class="main-login-form">
	                    <div class="login-group">
	                        <div class="form-group">
	                            <label for="email" class="sr-only">Мыло</label>
	                            <input type="email" class="form-control" id="email" name="email" placeholder="Реальное мыло" required="required" value="<?php echo $userEmail ?>">
	                        </div>
	                        <div class="form-group">
	                            <label for="message" class="sr-only">Военная тайна</label>
	                            <textarea class="form-control" id="message" name="message" placeholder="Малява" required="required"><?php echo $userText ?></textarea>
	                        </div>
	                    </div>
	                    <button type="submit" name="submit" class="login-button"><i class="fa fa-chevron-right reg-chevron"></i></button>
	                </div>
	            </form>
							</div>
						</div>
					</div>
				<?php endif ?>
        </div>                        
			</div>
		</div>
	</section>
</div>		
<?php include ROOT.'/views/layouts/footer.php'; ?>