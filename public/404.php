<?php

    // import the init page
    require('../db/init.php');

?><!DOCTYPE html>
<html lang="en" data-barba="wrapper">
 
    <?php 
        $title = "Page Not Fpound";
        $description = "The page you are looking for is somewhere else.";
        $stylesheet = "styles/404.css";
        require('partials/global/head.php');
    ?>

    <body>

        <?php require('partials/global/header.php'); ?>

        <main>
            <section class="container">
                <div class="graphic">
                <?xml version="1.0" encoding="UTF-8"?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 415.47 758.28"><defs><style>.i{fill:#fff;}.j{fill:#44c8f5;}.k{fill:#8ed8f8;}.l{fill:#00aeef;opacity:.2;}.m{fill:#b8e7ff;}</style></defs><g id="a"><path class="l" d="M191.09,757.75L5.72,686.93c-8.26-2.75-7.34-14.72,1.25-16.17l123.99-30.61c8.54-13.51,65.94-2.25,66.64-2.18l157.34,28.92c8.57,.75,10.55,12.4,2.71,15.94l-141.34,74.85c-1.91,.86-23.23,.74-25.22,.08Z"/></g><g id="b"><path class="l" d="M238.62,757.7l-191.18-77.28c-8.52-3-7.57-16.06,1.29-17.64l127.88-33.4c8.8-14.74,68-2.45,68.73-2.38l162.27,31.55c8.84,.82,10.88,13.53,2.79,17.39l-145.77,81.67c-1.97,.94-23.95,.81-26.01,.09Z"/></g><g id="c"><polygon class="i" points="221.52 736.22 48.92 675.45 33.88 131.46 221.52 182.18 221.52 736.22"/></g><g id="d"><polygon class="j" points="136.01 83.27 35.19 131.68 222.83 181.13 136.01 83.27"/></g><g id="e"><path class="k" d="M222.83,181.13L35.19,131.68l121.63-39.26,66.02,88.7Zm167.31-57.27l-168.62,58.32V736.22l162.63-74.06,5.99-538.31ZM305.83,0L137.21,42.12v40.93l168.62-50.09V0Z"/></g><g id="f"><path class="m" d="M305.83,32.96l-166.74,48.21-.62,.16V43.11L305.83,0,135.94,41.13v40.85l-.34,.09s-.09,.03-.13,.06l-100.82,48.41c-.48,.23-.76,.73-.71,1.26,.05,.53,.43,.97,.94,1.11l186.56,49.16,.09,.11,.14-.05,.85,.22c.11,.03,.22,.04,.32,.04,.46,0,.9-.25,1.12-.68l.2-.45,165.99-57.41-84.31-90.89ZM38.84,131.33l97.09-46.62v.04l2-.61,80.6,94.54L38.84,131.33ZM206.48,459.17l-151.09-48.83-6.47-244.82,157.56,35.43V459.17Zm-150.24-1.2l-1.39-32.11c-.08-1.84,.71-3.26,1.97-3.57,1.26-.31,2.74,.57,3.7,2.2l9.16,15.58,8.72-9.51c.92-1,2.36-.96,3.62,.12,1.26,1.08,2.1,2.96,2.1,4.75v31.64l-6.6-2.21v-20.53l-5.37,5.86c-.62,.67-1.48,.89-2.39,.6-.97-.33-1.78-1.06-2.41-2.14l-5.41-9.2,.88,20.23-6.59-1.71Zm40.48,11.1l-6.6-2.21v-32.28l6.6,2.21v32.28Zm55.18,18.52l-6.6-2.21v-32.28l6.6,2.21v32.28Zm-39.98-11.38c-5.91-1.98-11.38-10.99-12.04-12.1l4.73-4.47c1.49,2.5,5.34,7.76,7.76,7.98,.35,.03,1.4,.14,2.45-2.61,.63-1.65,.65-2.51,.63-2.78-.67-.9-3.27-2.14-4.69-2.81-3.31-1.57-6.74-3.2-8.61-7.22-2.25-4.82-1.71-10.72,1.24-13.73,2.9-2.95,8.36-3.16,15,5.08l-3.74,5.91c-2.77-3.44-5.22-4.68-6.54-3.34-.72,.74-.88,1.98-.69,2.61,.67,.69,2.75,1.68,4.03,2.29,3.47,1.64,7.78,3.69,9.73,8.79,1.27,3.32,1.16,6.84-.34,10.76-2.04,5.36-5.11,6.22-7.33,6-.53-.05-1.07-.17-1.6-.35Zm19.75,7.76c-5.91-1.98-11.38-10.99-12.04-12.1l4.73-4.47c1.49,2.5,5.34,7.77,7.76,7.98,.35,.03,1.4,.14,2.45-2.61,.63-1.65,.65-2.51,.63-2.78-.67-.9-3.27-2.14-4.69-2.81-3.31-1.57-6.74-3.2-8.61-7.22-2.25-4.82-1.71-10.73,1.24-13.73,2.9-2.95,8.36-3.16,15,5.08l-3.74,5.91c-2.77-3.44-5.22-4.69-6.54-3.34-.72,.74-.88,1.98-.69,2.62,.67,.69,2.75,1.68,4.02,2.28,3.47,1.65,7.78,3.69,9.73,8.79,1.27,3.32,1.16,6.83-.34,10.76-2.04,5.36-5.11,6.22-7.33,6-.53-.05-1.07-.17-1.6-.35Zm46.32,13.06c-.95-.32-1.87-1.17-2.51-2.36l-10.8-20.27c-.04,7.08-.04,13.88,.1,15.83l-6.57-1.41c-.31-4.52-.04-25.86-.01-28.28,.02-1.8,.89-3.11,2.18-3.28,1.29-.18,2.73,.81,3.62,2.48l10.69,20.07v-16.84l6.6,2.21v28.62c0,1.82-.86,3.16-2.16,3.35-.37,.05-.76,.01-1.14-.11Zm15.48,9.57c-2.52-.85-5.61-2.54-7.93-6.64-3.03-5.37-3.82-13.26-2.46-24.81,.78-6.7,2.89-10.11,6.27-10.14,6.63-.05,14.12,14.18,16.26,18.54l-5.22,3.56c-3.26-6.64-7.9-13.14-9.37-13.14-.17,0-.96,.83-1.41,4.64-1.32,11.3-.07,15.56,.8,17.1,.47,.84,1.33,1.79,4.06,2.49,2.5,.64,3.86,.48,4.58,.22l-5.44-3.75,1.71-7.82,8.54,5.88c1.16,.8,2.06,2.3,2.35,3.93,.77,4.32-.18,6.84-1.1,8.2-1.83,2.68-5.27,3.4-10.22,2.14-.44-.11-.91-.24-1.41-.41Zm86.04-101.38l-13.95,7.33v-110.86l-3.81,21.82c-1.13,6.5-3.71,11.73-6.54,12.96-2.82,1.34-5.33-1.35-6.35-6.83l-3.1-16.6v109.91l-13.95,7.33V235.34c0-7.67,2.39-15.51,5.69-18.66,3.29-3.14,6.57-.71,7.79,5.8l10.47,56.05,10.39-59.52c1.33-7.6,4.59-13.15,7.82-13.3,3.23-.15,5.54,5.15,5.54,12.7v186.8Zm10.41-5.47c-3.17-1.72-4.24,3.85-4.38-27.99-.07-15.88-.05-37.89,.08-65.43,.22-46.79,.66-94.04,.67-94.52l13.95-6.64c-.77,81.91-1.15,174.61-.33,185.06-.17-2.17-1.24,4.92-2.94,5.82l-7.04,3.7Zm46.56-15.28l-26.05,13.68c-1.9,1-3.72,.18-5.04-2.28-1.32-2.45-2.01-6.33-1.93-10.72l3.55-184.6,13.94-5.9-3.23,167.78,18.76-9.85v31.89Zm22.37-27.7l-13.95,7.33V181.36l13.95-7.33v182.74Zm17.65,.34l-30.19-75.51c-1.88-4.7-1.88-12.56,0-19.23l26.64-94.53,11.13,13.39-23.46,83.25,27.01,67.56-11.13,25.07ZM66.57,503.2c-4.09,.04-4.08-6.3,0-6.34,4.94-.05,9.93,.83,14.53,2.64,2.17,.85,4.29,1.84,6.3,3.02s4.04,2.63,6.19,3.71c3.6,1.82,8,2.06,11.93,2.71,4.71,.77,9.42,1.56,14.14,2.24,9.19,1.33,18.52,2.19,27.81,1.65,2.16-.13,4.42-.31,6.16,1.26,.82,.74,1.31,1.62,1.7,2.64,.13,.34,.3,1.31,.54,1.52,.39,.35,3.02-.22,3.65-.29,2.12-.23,4.25-.24,6.37-.06,9.05,.77,17.4,4.41,25.6,8.08,1.57,.7,1.93,2.98,1.14,4.34-.93,1.59-2.78,1.84-4.34,1.14-8.65-3.88-17.9-7.96-27.61-7.26-3.7,.27-8.03,1.12-10.29-2.74-.48-.83-.57-1.85-1.04-2.66,.27,.46,.47,.23-.41,.28-2.16,.11-4.31,.24-6.47,.25-9.26,.06-18.47-1.1-27.61-2.5-4.48-.69-8.95-1.44-13.42-2.17s-8.41-1.41-12.28-3.62c-3.5-1.99-6.73-4.33-10.55-5.73s-7.91-2.16-12.06-2.11h0Zm7.74,41.31c-1.32-1.1-1.13-3.36,0-4.48,1.29-1.29,3.17-1.09,4.48,0,5.27,4.38,11.36,7.82,17.91,9.84,5.55,1.72,11.3,2.42,17.1,2.03,2.88-.2,5.69-.72,8.48-1.46,3.47-.92,6.66-1.14,9.53,1.37,2.2,1.93,3.64,4.55,5.9,6.46,1.76,1.49,3.89,2.61,6.11,3.25,4.7,1.36,9.41,.4,13.42-2.4,1.18-.82,2.86-.39,3.84,.5l10.9,9.87c1.4,1.27,2.82,2.58,4.56,3.39,1.22,.57,1.81,.69,2.67-.27,1.4-1.57,3.96-1.01,4.98,.64,.26,.42,.41,.61,.77,.83s.44,.2,.62,.22c.13,.02,.77-.08,.39,0,.36-.07,.22-.04,.42-.14,.22-.11,.45-.26,.69-.6,.98-1.41,2.76-2.06,4.34-1.14,1.4,.82,2.11,2.93,1.14,4.34-3.54,5.11-10.53,5.04-13.84-.3l4.98,.64c-4.04,4.51-9.82,2.1-13.81-1.05-4.64-3.67-8.89-7.96-13.28-11.93l3.84,.5c-5.35,3.74-12.24,4.87-18.51,2.98-2.86-.86-5.47-2.28-7.81-4.11-1.23-.96-2.37-2.01-3.4-3.19s-1.8-2.43-2.87-3.49-1.99-.74-3.38-.38c-1.46,.39-2.92,.76-4.41,1.03-3.2,.59-6.47,.92-9.73,.9-13.32-.06-25.88-5.4-36.03-13.84h0Zm.46,45.46c-3.9-1.17-2.23-7.29,1.69-6.11,8.82,2.64,17.79,4.56,26.88,6.02,3.87,.62,7.16,1.83,10.55,3.79,2.96,1.71,5.89,2.71,9.34,2.8,3.61,.1,7.16-.54,10.65-1.38,3.85-.93,7.39-1.97,11.3-.56s7.33,3.35,10.92,5.07l11.8,5.62c3.3,1.57,6.58,3.38,10.06,4.53,2.48,.82,6.62,1.88,8.82,.37,1.09-.75,2.98-.49,3.84,.5l3.42,3.91c1.13,1.29,1.28,3.2,0,4.48-1.15,1.15-3.36,1.29-4.48,0l-3.42-3.91,3.84,.5c-3.34,2.29-8.44,1.7-12.13,.74-4.31-1.13-8.32-3.33-12.32-5.24l-11.8-5.62-6.18-2.95c-1.65-.79-3.3-1.72-5.07-2.21s-3.26-.07-4.97,.38-3.53,.89-5.32,1.23c-3.85,.73-7.79,1.15-11.7,.67s-7.24-1.98-10.65-3.94-6.78-2.42-10.52-3.03c-8.3-1.35-16.51-3.23-24.56-5.65h0Zm-.61,38.19c-3.39-2.24-.21-7.73,3.2-5.47,8.91,5.89,20.07,4.91,29.95,7.92,8.56,2.61,17.77,8.43,19.17,18.03l-3.9-2.21,20.46-5.64c2.67-.74,4.96,2.27,3.58,4.66-.69,1.18,2.84,2.56,3.8,2.93,2.91,1.12,5.21,2.51,7.23,4.91,1.36,1.62,2.76,3.62,4.84,3.87,1.59,.19,3.48-.37,4.46-1.75,1.55-2.19,4.96-2,5.79,.76,1.9,6.28,7.34,10.8,13.74,11.92,1.7,.3,2.63,2.37,2.21,3.9-.48,1.76-2.21,2.51-3.9,2.21-8.55-1.49-15.67-8.09-18.17-16.34l5.79,.76c-2.17,3.06-5.54,4.92-9.33,4.92s-6.89-2.1-9.31-5.01c-1.15-1.38-2.22-2.72-3.87-3.53s-3.64-1.27-5.29-2.29c-3.48-2.16-5.7-6.6-3.48-10.44l3.58,4.66-20.46,5.64c-1.49,.41-3.65-.52-3.9-2.21-1.2-8.21-9.55-12.38-16.86-14.18-9.9-2.44-20.54-2.15-29.35-7.98h0Z"/></g><g id="g"><path class="k" d="M61.71,412.39c.21-32.82-1.37-40.98,0-52.87s13.27-20.05,29.59-23.78,20.52-.23,19.59-13.06c-.93-12.82-14.92-8.63-20.52-23.78-5.6-15.16,1.63-49.2,5.13-62.02s41.5-26.11,59.22-.93c17.72,25.18,15.39,69.48,7.93,72.28s-16.01,11.05-16.01,11.05c0,0-5.63,6.16-1.44,15.02s29.34,7.74,31.9,11.71,9.12,9.56,12.72,22.38c3.6,12.82-5.17,50.26-5.73,54.81-1.31,10.66-2.56,27.92-2.56,27.92l-119.83-38.72Z"/></g><g id="h"><path class="i" d="M109.67,286.79s-.08,0-.12,0c-4.72-.44-8.15-3.01-8.15-6.1,0-3.46,4.2-6.16,9.57-6.16s9.57,2.71,9.57,6.16c0,2.75-2.71,5.12-6.74,5.9-.53,.1-1.08-.15-1.35-.63l-1.07-1.92-.49,1.81c-.15,.56-.66,.94-1.22,.94Zm1.3-9.73c-4.14,0-7.03,1.91-7.03,3.63,0,1.31,1.81,2.88,4.8,3.43l1.01-3.76c.13-.5,.56-.87,1.07-.93,.51-.06,1.01,.19,1.26,.64l2.12,3.81c2.25-.64,3.8-1.91,3.8-3.2,0-1.72-2.89-3.63-7.03-3.63Zm31.86,12.62c-.55,0-1.1-.04-1.67-.12-.66-.09-1.14-.68-1.09-1.35l.21-2.78-2.26,2.28c-.42,.42-1.06,.49-1.56,.19-3.07-1.89-4.65-4.96-4.04-7.81,.86-4.03,5.78-6.4,10.96-5.29,5.18,1.11,8.69,5.29,7.83,9.32-.72,3.34-4.18,5.56-8.37,5.56Zm-.14-2.54c3.02,.02,5.57-1.41,6.03-3.56,.56-2.61-2.13-5.5-5.88-6.31-3.74-.8-7.39,.73-7.95,3.34-.33,1.55,.47,3.26,2.08,4.55l3.94-3.96c.37-.38,.94-.48,1.43-.26,.48,.22,.78,.72,.74,1.25l-.38,4.95Zm-1.2,21.99c-1.34,0-3.03-.7-5.27-1.63-2.92-1.21-6.55-2.72-10.64-3.18-4.1-.46-7.97,.21-11.09,.75-3.34,.58-5.54,.96-6.82-.25-.61-.58-.87-1.4-.75-2.44,.57-5.09,9.21-8.16,19.66-6.99,10.45,1.17,18.19,6.08,17.62,11.17h0c-.12,1.04-.54,1.79-1.27,2.21-.43,.25-.91,.37-1.44,.37Zm-18.72-7.5c1.01,0,2.04,.05,3.09,.17,4.45,.5,8.43,2.15,11.34,3.36,1.63,.68,3.84,1.59,4.43,1.43,0-.02,.03-.12,.05-.31,.35-3.1-5.88-7.3-15.38-8.37-9.5-1.07-16.51,1.65-16.85,4.75-.03,.27,0,.36,0,.36,.43,.26,2.85-.15,4.61-.46,2.37-.41,5.42-.93,8.71-.93Z"/></g></svg>
                </div>
                <div class="text">
                    <h1>You Are Lost.</h1>
                    <p>Error 404: The page you were looking for is somewhere else.</p>
                 </div>
            </section>
            <section class="container">
                <div class="btn">
                    <button>
                        <a href="#">Return To Home Page</a>
                    </button>
                </div>
            </section>
            <div class="blackout"></div>
        </main> 

        <?php require('partials/global/scripts.php'); ?>
        
    </body>
</html>