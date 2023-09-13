<div id="overflow-container">
    <div id="page-container" data-barba="container" data-barba-namespace="artifact">  
        <div class="full-width">
            <div class="artifact__heading flex flex-column">
                <div class="title-container">
                    <div class="breadcrumb-container flex flex-row">
                        <a class="breadcrumb" href="<?php echo get_public_url('/portfolio.php'); ?>">My Work</a>
                    </div>
                    <h1><?php echo h($artifact['title']); ?></h1>
                </div>
            </div>
            <div class="artifact flex flex-column">
                <div class="artifact__specs art-anim" id="specs">
                    <div id="image">
                        <img src="<?php echo h($artifact['img_url']); ?>" alt="Preview image for my '<?php echo h($artifact['title']); ?>' project">
                        <a href="<?php echo ($artifact['nar_link']); ?>" target="_blank" aria-label="View The Project"><button class="btn-1"><h3><?php echo ($artifact['button_text']); ?></h3></button></a>
                    </div>
                    <div class="specs-wrapper">
                        <div id="tech">
                            <h3>Technologies Used:</h3>
                            <ul>
                                <li><?php echo h($artifact['nar_tech1']); ?></li>
                                <li><?php echo h($artifact['nar_tech2']); ?></li>
                                <li><?php echo h($artifact['nar_tech3']); ?></li>
                                <li><?php echo h($artifact['nar_tech4']); ?></li>
                                <li><?php echo h($artifact['nar_tech5']); ?></li>
                            </ul>
                        </div>
                        <div id="skills">
                            <h3>Skills Shown:</h3>
                            <ul>
                                <li><?php echo h($artifact['nar_skill1']); ?></li>
                                <li><?php echo h($artifact['nar_skill2']); ?></li>
                                <li><?php echo h($artifact['nar_skill3']); ?></li>
                                <li><?php echo h($artifact['nar_skill4']); ?></li>
                                <li><?php echo h($artifact['nar_skill5']); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="artifact__narrative blur art-anim" id="nar1">
                    <h3><?php echo ($artifact['nar_sec1_head']); ?></h3>
                    <?php echo ($artifact['nar_sec1']); ?>
                </div>
                <div class="artifact__image art-anim" id="pic1">
                    <img src="<?php echo h($artifact['nar_img1_url']); ?>" alt="<?php echo h($artifact['nar_img1_alt']); ?>">
                </div>
                <div class="artifact__narrative blur art-anim" id="nar2">
                    <h3><?php echo ($artifact['nar_sec2_head']); ?></h3>
                    <?php echo ($artifact['nar_sec2']); ?>
                </div>
                <div class="artifact__image art-anim" id="pic2">
                    <img src="<?php echo ($artifact['nar_img2_url']); ?>" alt="<?php echo h($artifact['nar_img2_alt']); ?>">
                </div>
                <div class="artifact__narrative blur art-anim" id="nar3">
                    <h3><?php echo ($artifact['nar_sec3_head']); ?></h3>
                    <?php echo ($artifact['nar_sec3']); ?>
                </div>
                <div class="artifact__image art-anim" id="pic3">
                    <img src="<?php echo ($artifact['nar_img3_url']); ?>" alt="<?php echo h($artifact['nar_img3_alt']); ?>">
                </div>
                <div class="artifact__narrative blur art-anim" id="nar4">
                    <h3><?php echo ($artifact['nar_sec4_head']); ?></h3>
                    <?php echo ($artifact['nar_sec4']); ?>
                </div>
                <div class="artifact__image art-anim" id="pic4">
                    <img src="<?php echo ($artifact['nar_img4_url']); ?>" alt="<?php echo h($artifact['nar_img4_alt']); ?>">
                </div>
                <div class="artifact__narrative blur art-anim" id="nar5">
                    <h3><?php echo ($artifact['nar_sec5_head']); ?></h3>
                    <?php echo ($artifact['nar_sec5']); ?>
                </div>
                <div class="artifact__image art-anim" id="pic5">
                    <img src="<?php echo ($artifact['nar_img5_url']); ?>" alt="<?php echo h($artifact['nar_img5_alt']); ?>">
                </div>
                <div class="artifact__narrative blur art-anim" id="nar6">
                    <h3><?php echo ($artifact['nar_sec6_head']); ?></h3>
                    <?php echo ($artifact['nar_sec6']); ?>
                </div>
                <div class="artifact__image art-anim" id="pic6">
                    <img src="<?php echo ($artifact['nar_img6_url']); ?>" alt="<?php echo h($artifact['nar_img6_alt']); ?>">
                </div>
                <div class="artifact__cta flex art-anim">
                    <a href="<?php echo ($artifact['nar_link']); ?>" target="_blank" aria-label="<?php echo ($artifact['button_text']); ?>"><button class="btn-1"><h3><?php echo ($artifact['button_text']); ?></h3></button></a>
                </div>
            </div>    
            <footer id="footer">

                <?php require('partials/global/footer.php'); ?>
                
            </footer>
        </div>
    </div>
</div>
