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
        <h3><?php echo h($artifact['date_posted']); ?> | <?php 
        
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
        
        ?></h3>
    </div>
</div>
