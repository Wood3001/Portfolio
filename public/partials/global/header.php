<div id="open-modal" class="modal">
    <a href="#" title="Close" class="modal-close">Close</a>
</div>
<div class="blackout"></div>

<div class="loader">
    <div class="loader-anim"></div>
</div>
<header class="site-header">
    <div class="top-bar"></div>
    <div class="site-header__content">
        <div class="top-bar"></div>
        <div class="logo-container flex hide">
            <div class="site-header__logo block">
                <a href="<?php echo get_public_url('/'); ?>">
                    <svg id="Layer_2" xmlns="http://www.w3.org/2000/svg" viewBox="-5 -5 120 135">
                        <g>
                            <path class="cls-1" d="M97.03,37.45c-15.65-9.77-41.08-7.15-48.76,2.25-1.9,2.32,.07,5.78,3.05,5.44,70.37-7.88,34.73,58.05-20.16,50.58,.93-4.63-2.53-9.13-5.84-11.63-14.49-10.94-24.2,.33-25.33,14.42,.78,26.5,35.21,26.32,58.33,21.62,14.12-3.13,47.54-14.41,52.81-51.56,1.44-10.12-2.37-24.17-14.11-31.12Z"/>
                            <path class="cls-1" d="M17.44,75.62c19.2,7.91,64.88-14.86,43.44-18.27-20.96,.06-31.52,2.01-33.19-6.15-3.37-16.49,32.71-34.43,52.37-33.19,5.27,13.6,24.23-.41,19.38-10.69C75.84-14.6-2.1,16.18,1.79,53.84c-.01,10.68,5.8,17.72,15.65,21.78Z"/>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="site-header__message">
                <div class="flex flex-column">
                    <a href="index.php" aria-label="Navigate to the Home Page">
                        <h2 class="cls-2">Sherwood Seabrook</h2>
                        <h4 class="cls-2">Frontend Developer</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="site-header__menu">
            <button class="gn-trigger" id="bun">
                <ul class="burger">
                    <li id="b1"></li>
                    <li id="b2"></li>
                    <li id="b3"></li>
                </ul>
            </button>
            <nav class="gn">
                <ul class="gn-items">
                    <li><a id="about" href="<?php echo get_public_url('/about.php'); ?>" aria-label="Navigate to the About Page">About Me</a></li>
                    <li><a id="dev" href="<?php echo get_public_url('/portfolio.php'); ?>" aria-label="Navigate to the Development Page">My Work</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

