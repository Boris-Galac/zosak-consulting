<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="ZOŠAK CONSULTING, stručna je tvrtka u optimizaciji čišćenja svih vrsta poslovnih objekata kao i optimizaciji najsloženijih ustanova u zdravstvu..">
    <meta name="keywords"
        content="Optimizacija čišćenja, čišćenje poslonih objekata, higijena, čistoća zdravstva, ušteda troškova">
    <meta name="author" content="Darko Zošak">
    <?php wp_head() ?>
</head>

<body <?php body_class()?>>

    <?php 
            if(is_home()){ ?>
    <header class="header">
        <div class="splash-screen transition transition-1" data-active="true"">
      <img src=" /wp-content/themes/zosak-consulting/src/assets/images/logo-zosak-white.svg" aria-hidden="true" />
        </div>
        <nav class="nav">
            <img src="/wp-content/themes/zosak-consulting/src/assets/images/nav-logo.svg"
                alt="nav logo zosak consulting" class="nav__logo" data-visible="false" />

            <button class="ham-btn" tabindex="0" data-open="false">
                <span class="ham-btn-line"></span>
                <span class="ham-btn-line"></span>
                <span class="ham-btn-line"></span>
            </button>
            <ul class="nav__list" data-open="false">
                <div class="nav__list-wrapper">
                    <li class="nav__item">
                        <a href="<?php echo site_url('') ?>" class="nav__link">Naslovna</a>
                    </li>
                    <li class="nav__item">
                        <a href="#offer" class="nav__link">Što nudimo</a>
                    </li>
                    <li class="nav__item">
                        <a href="#benefiti" class="nav__link">Benefiti naših usluga</a>
                    </li>
                    <li class="nav__item">
                        <a href="<?php echo site_url('galerija') ?>" class="nav__link">Galerija</a>
                    </li>
                    <li class="nav__item">
                        <a href="#promo-video" class="nav__link">Online čišćenje</a>
                    </li>
                    <li class="nav__item">
                        <a href="#o-nama" class="nav__link">O nama</a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">Kontakt</a>
                    </li>
                    <button class="print-btn print-btn--mobile">Isprintajte prospekte<img
                            src="/wp-content/themes/zosak-consulting/src/assets/icons/print-icon.svg"
                            aria-hidden="true">
                    </button>
                </div>
            </ul>
    </header>
    <?php }else{ ?>
    <div class="splash-screen transition transition-1" data-active="true"">
      <img src=" /wp-content/themes/zosak-consulting/src/assets/images/logo-zosak-white.svg" aria-hidden="true" />
    <div class="loading">
        <span class="loading__heading">Loading...</span>
        <div class="loading__loader"></div>
    </div>
    </div>
    <header class="header header--galerija">
        <a href="<?php echo site_url('') ?>" class="header--galerija__logo-link">
            <img src="/wp-content/themes/zosak-consulting/src/assets/images/nav-logo.svg"
                alt="nav logo zosak consulting" class="nav__logo nav__logo--galerija" />
        </a>
        <a href="<?php echo site_url('') ?>" class="header__back-to-home-page"><img
                src="/wp-content/themes/zosak-consulting/src/assets/icons/back-to-home-icon.svg"
                aria-hidden="true">Početna</a>
    </header>

    <?php } ?>
    </nav>