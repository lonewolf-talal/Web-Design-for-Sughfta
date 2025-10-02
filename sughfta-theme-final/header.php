<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-left">
                <div class="menu-icon" id="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            
            <a href="<?php echo home_url(); ?>" class="logo">Sugh<span>fta</span></a>
            
            <div class="header-right">
                <div class="header-icons">
                    <a href="#"><i class="fas fa-search"></i></a>
                    <a href="#"><i class="fas fa-user"></i></a>
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobile-menu">
        <div class="mobile-menu-close" id="menu-close">
            <i class="fas fa-times"></i>
        </div>
        <h3>Categories</h3>
        <ul class="mobile-menu-categories">
            <li><a href="#">Women's Collection</a></li>
            <li><a href="#">Men's Collection</a></li>
            <li><a href="#">Bags Collection</a></li>
            <li><a href="#">Watches Collection</a></li>
            <li><a href="#">Accessories</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="#">Sale</a></li>
        </ul>
    </div>
    <div class="menu-overlay" id="menu-overlay"></div>
