<?php include ROOT.'/views/layouts/header.php'; ?>
<div class="container" style="height: 470px;">
	<section class="bad">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="box">
					<?php if ($result): ?>
						<p>Данные отредактированы</p>
					<?php else: ?>
						<?php if (isset($errors) && is_array($errors)): ?>
							<ul>
								<?php foreach ($errors as $error): ?>
									<li> - <?php echo $error ?></li>
								<?php endforeach ?>
							</ul>
						<?php endif ?>
					<?php endif ?>
					<h3><?php echo($pageTitle).' '.$user['name'].'\'а' ?></h3>
					<div class="login-form-1 register-form">
            <div class="media">
              <div class="media-body">
                <form id="login-form" class="text-left" action="login" method="post">
                  <div class="login-form-main-message"></div>
                  <div class="main-login-form">
                    <div class="login-group">
                      <div class="form-group">
                        <label for="name" class="sr-only">Погоняло</label>
                        <input type="name" class="form-control" id="name" name="name" placeholder="Погоняло" required="required" value="<?php echo $name  ?>">
                      </div>
                        <div class="form-group">
                          <label for="password" class="sr-only">Военная тайна</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Военная тайна" required="required" value="<?php echo $password ?>">
                        </div>
                      </div>
                      <button type="submit" name="submit" class="login-button"><i class="fa fa-chevron-right reg-chevron"></i></button>
                  </div>
                </form>
              </div>
            </div>
        	</div>
        </div>                        
			</div>
		</div>
	</section>
</div>		
<?php include ROOT.'/views/layouts/footer.php'; ?>