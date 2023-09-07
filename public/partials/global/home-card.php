<a class="home-card__wrapper home-card flex flex-column blur" href="<?php echo h($artifact['link_url']); ?>" aria-label="View Project Details">
    <div class="home-card__image">
        <img src="<?php echo h($artifact['img_url']); ?>" alt="Preview image for my <?php echo h($artifact['title']); ?> project">
    </div>
    <div class="home-card__message">
        <h2><?php echo h($artifact['title']); ?></h2>
        <div class="home-card__desc">
            <p><?php echo h($artifact['description']); ?></p>
        </div>
        <h3 class="is-orange"><?php 
        
            if ($artifact['discipline'] == 0){
                echo "Student Project";
            } elseif ($artifact['discipline'] == 1){
                echo "Internship Project";
            } elseif ($artifact['discipline'] == 2){
                echo "Personal Project";
            } elseif ($artifact['discipline'] == 3){
                echo "Freelance Project";
            } elseif ($artifact['discipline'] == 4){
                echo "Employer Project";
            }
    
        ?> | <?php echo h($artifact['date_posted']); ?></h3>
    </div>
</a>