<a class="home-card__wrapper home-card flex flex-column blur" href="<?php echo h($artifact['link_url']); ?>" aria-label="View Project Details">
    <div class="home-card__image">
        <img src="<?php echo h($artifact['img_url']); ?>" alt="Preview image for my <?php echo h($artifact['title']); ?> project">
    </div>
    <div class="home-card__message">
        <h2><?php echo h($artifact['title']); ?></h2>
        <div class="home-card__desc">
            <p><?php echo h($artifact['description']); ?></p>
        </div>
        <h3 class="is-orange"><?php echo $artifact['discipline'] == 0 ? 'Web Development' : 'Design'; ?> | <?php echo h($artifact['date_posted']); ?></h3>
    </div>
</a>