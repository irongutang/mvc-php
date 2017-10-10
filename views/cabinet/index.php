<?php include ROOT.'/views/layouts/header.php'; ?>
<div class="container" style="height: 470px;">
	<section class="bad">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="box">
					<h3><?php echo($pageTitle).' '.$user['name'].'\'а' ?></h3>
					<button class="my-button"><a href="/cabinet/edit">Редактировать личные данные</a></button>
					<i class="fa fa-cogs"></i>
        </div>                        
			</div>
		</div>
	</section>
</div>		
<?php include ROOT.'/views/layouts/footer.php'; ?>