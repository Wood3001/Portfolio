<!DOCTYPE html>
<html lang="en">
 
    <?php 
        $title = "Contact";
        $description = "I am seeking opportunities to advance and refine my skills in a full-time, in-person position with a company in Vancouver, BC, Canada.";
        $stylesheet = "styles/contact.css";
        require('partials/global/head.php');
    ?>

    <body>
        
        <?php require('partials/global/header.php'); ?>

        <main>
            <div class="overflow-container">
                <div id="page-container">
                    <div id="content-wrap">
                        <section class="grid">
                            <div class="contact__heading flex">
                                <h1>Contact</h1>
                            </div>
                            <div class="contact__container blur">
                                <div class="contact__content">
                                    <div class="contact__item flex">
                                        <div><h3>Phone</h3></div>
                                        <div><a href="tel:+16043775170"><h3>+1 (604) 377 5170</h3></a></div>
                                    </div>
                                    <div class="contact__item flex">
                                        <div><h3>Email</h3></div>
                                        <div><a href="mailto:contact@sherwoodseabrook.com"><h3>contact@sherwoodseabrook.com</h3></a></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <footer id="footer">

                        <?php require('partials/global/footer.php'); ?>
                        
                    </footer>
                </div>
            </div>
            <div class="blackout"></div>
        </main> 

        <?php require('partials/global/scripts.php'); ?>

    </body>
</html>