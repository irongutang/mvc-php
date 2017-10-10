<?php include ROOT.'/views/layouts/header.php' ?>
<main class="site-main">
    <?php include ROOT.'/views/layouts/hero.php'; ?>
    <section class="services hot-line">
        <h2 class="section-title"><?php echo($sectionTitle) ?></h2>
        <div class="container">
            <?php foreach ($hotList as $item): ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="media hot-line-item">
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo($item['title']) ?></h4>
                            <p><?php echo($item['date']) ?> от <?php echo($item['author_name']) ?></p>
                            <p><?php echo($item['content']) ?></p>
                        </div>
                    </div>
                </div>    
            </div>
            <?php endforeach ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="media">
                        <div class="media-body">
                            <ul class="pagination">
                            <?php foreach ($pagination->buttons as $button): 
                                if ($button->isActive): ?>
                                <li><a href="/hot-<?php echo $button->page ?>"><?php echo $button->text ?></a></li> 
                            <?php else : ?>
                                <li><span style="color: #555555"><?php echo $button->text ?></span></li>
                            <?php endif;
                            endforeach ?>
                            </ul>                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <?php include ROOT.'/views/layouts/front.php'; ?>    
</main>
<?php include ROOT.'/views/layouts/footer.php' ?>