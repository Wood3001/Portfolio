<a class="home-card__wrapper home-card flex flex-column blur" href="<?php echo h($artifact['link_url']); ?>">
    <div class="home-card__image">
        <img src="<?php echo h($artifact['img_url']); ?>" alt="Preview image for my <?php echo h($artifact['title']); ?> project">
    </div>
    <div class="home-card__message">
        <h2><?php echo h($artifact['title']); ?></h2>
        <h3><?php echo $artifact['discipline'] == 0 ? 'Web Development' : 'Design'; ?> | <?php echo h($artifact['date_posted']); ?></h3>
    </div>
</a>