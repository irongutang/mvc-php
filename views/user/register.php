<?php include ROOT.'/views/layouts/header.php'; ?>
<div class="container" style="height: 470px;">
	<section class="register">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="box">
					<h3>РЕГИСТРАЦИЯ В ПРОСТРАНСТВЕ</h3>
					<?php if ($result): ?>
						<h3>Можно комментировать</h3>
					<?php else: ?>
					<?php if (isset($errors) && is_array($errors)): ?>
					<div class="form-errors">
						<ul>
							<?php foreach ($errors as $error): ?>
								<li> - <?php echo($error) ?></li>
							<?php endforeach ?>
						</ul>
					</div>
					<?php endif ?>
					<div class="login-form-1 register-form">
						<div class="media">
							<div class="media-body">
								<form id="login-form" class="text-left" action="register" method="post">
	                <div class="login-form-main-message"></div>
	                <div class="main-login-form">
	                    <div class="login-group">
	                        <div class="form-group">
	                            <label for="name" class="sr-only">Погоняло</label>
	                            <input type="text" class="form-control" id="name" name="name" placeholder="Погоняло" required="required">
	                        </div>
	                        <div class="form-group">
	                            <label for="email" class="sr-only">Мыло</label>
	                            <input type="email" class="form-control" id="email" name="email" placeholder="Мыло" required="required">
	                        </div>
	                        <div class="form-group">
	                            <label for="password" class="sr-only">Военная тайна</label>
	                            <input type="password" class="form-control" id="password" name="password" placeholder="Военная тайна" required="required">
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