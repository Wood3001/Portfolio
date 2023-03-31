<div class="card flex flex-column blur">
    <div class="card__image">
        <a href="<?php echo h($artifact['link_url']); ?>">
            <img src="<?php echo h($artifact['img_url']); ?>" alt="Preview image for my '<?php echo h($artifact['title']); ?>' project">
        </a>
    </div>
    <div class="card__message">
        <div>
            <h2><?php echo h($artifact['title']); ?></h2>
            <p><?php echo h($artifact['description']); ?></p>
        </div>
        <h3><?php echo h($artifact['date_posted']); ?> | <?php echo $artifact['discipline'] == 0 ? 'Web Development' : 'Design'; ?></h3>
    </div>
</div>