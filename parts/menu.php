<header class="header">
    <div class="header__inner container">
        <img class="logo" src="<?php echo get_template_directory_uri() ?>/assets/img/Mars.svg" alt="MARS" />

        <div class="header__inner-right">
            <div class="header__burger" id="menu__open">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => 'nav',
                'container_class' => 'desktop-menu',
                'menu_class' => '', 
            ));
            ?>
            <div class="header__mobile-menu" id="mobile-menu">
                <nav>
                    <button class="modal__close" id="menu__close">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/close.svg" alt="Close" />
                    </button>
                    <?php

                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => '',
                        'menu_class' => '', 
                    ));
                    ?>
                </nav>
            </div>
            <button class="button" id="open_modal">Купить билеты</button>
        </div>
    </div>
</header>



