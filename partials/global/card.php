<div class="card flex flex-column blur">
    <div class="card__image">
        <img src="<?php echo h($artifact['img_url']); ?>" alt="Preview image for my '<?php echo h($artifact['title']); ?>' project">
    </div>
    <div class="card__message">
        <h3><?php echo h($artifact['date_posted']); ?></h3>
        <h2><?php echo h($artifact['title']); ?></h2>
        <p><?php echo h($artifact['description']); ?></p>
        
    </div>
    <div class="card__cta flex">
        <a href="<?php echo h($artifact['link_url']); ?>"><button class="btn-1 btn-flattop"><h3>View Project Details</h3></button></a>
    </div>
</div>