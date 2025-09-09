<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">

        <div id="top-header">
            <div id="main-top-header">
                <img id="header-img" src="https://static.vecteezy.com/system/resources/previews/047/656/219/non_2x/abstract-logo-design-for-any-corporate-brand-business-company-vector.jpg" alt="logo" width="30px" height="30px">
            </div>
            <!-- middle section on top-header -->
            <?php
            $options = get_option('PREFIX_ID_options', []);
            $phone = isset($options['wysiwyg']) && !empty($options['wysiwyg']) ? $options['wysiwyg'] : 'Text Goes Here';
            ?>
            <p id="top-middle-header"><?php echo esc_html($phone); ?></p>
            <!-- right section on top header -->
            <?php
            $options = get_option('PREFIX_ID_options', []);
            $phone = isset($options['phone']) && !empty($options['phone']) ? $options['phone'] : '1-888-888-8888';
            ?>
            <div id="top-right">
                <a href="tel:<?php echo esc_attr($phone); ?>" class="info"><?php echo esc_html($phone); ?></a>
                <a href="mailto:test@example.com" class="info">Email@example.com</a>
            </div>
        </div>
    </div>

    </div>
    <header id="header" role="banner">
        <div id="branding">
            <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                <?php
                echo '<a id="name" href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html(get_bloginfo('name')) . '</span></a>';
                ?>
                <div id="site-description" <?php if (!is_single()) {
                                                echo ' itemprop="description"';
                                            } ?>><?php bloginfo('description'); ?></div>
            </div>
        </div>
        <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <?php wp_nav_menu(
                array(
                    'container' => false,
                    'theme_location' => 'main-menu',
                    'link_before' => '<span itemprop="name">',
                    'link_after' => '</span>'
                )
            ); ?>
            <!-- Hamburger Menu -->
            <!--  -->
        </nav>
        <a id="mobile-menu-button" aria-expanded="false" title="Menu" aria-label="Menu" href="javascript:void(0);"
            class="icon" onclick="myFunction()">
            <div id="ham-icon" class=""><span>&nbsp;</span></div>
        </a>

    </header>
    <style>
        :root {
            --easing-default: ease-in-out;
        }

        html {
            padding: 0px;
            margin: 0px;

        }

        #menu {
            display: none;
        }

        #top-middle-header {
            display: flex;
            padding: 0;
            margin: 0;
            align-items: center;
            justify-content: center;
        }


        #header {
            position: relative;
        }

        #telephone {
            text-shadow:
                1px 1px 2px red,
                0 0 1em blue,
                0 0 0.2em blue;
        }

        #top-right {
            display: flex;
            padding: 0;
            margin: 0;
            align-items: center;
            justify-content: center;
        }

        @media only screen and (max-width: 500px) {
            body {
                margin: 0px;
                padding: 0px;
            }

            #top-header {
                padding: 0px 20px;
                display: flex;
                justify-content: space-between;
                background-color: #827F35;
                font-size: 12px;
            }

            #main-top-header {
                display: flex;
                height: 30px;
                padding: 0px;

            }

            nav.position ul {
                display: block;
                position: absolute;
                top: 50%;
                right: 0;
                background-color: #BDFAE5;
            }

            nav.position ul li {
                display: block;
                padding-right: 20px;
            }

            #header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background: #BDFAE5;
                background: linear-gradient(90deg, rgba(189, 250, 229, 1) 0%, rgba(87, 199, 133, 1) 50%, rgba(237, 221, 83, 1) 100%);
                padding: 0px 20px;
            }

            #branding {
                display: flex;
                justify-content: center;

            }

            a {
                text-decoration: none;
                color: black;
            }

            nav {
                display: block;
                justify-content: space-evenly;
                gap: 20px;
            }

            #search {
                justify-content: center;
            }

            #telephone {
                display: flex;
                margin-top: 7.5px;
                gap: 10px;
            }


            main {
                background-color: #FFFFFF;
            }

            #header-img {
                justify-content: center;
                animation: mymove 5s infinite;
                border-radius: 50%;
            }

            @keyframes mymove {
                50% {
                    transform: rotate(360deg);
                }
            }

            #name {
                font-size: 16px;
                font-weight: bold;
                animation: colorbanana 10s infinite;
            }

            @keyframes colorbanana {
                0% {
                    color: #5a1fc7ff;
                }

                50% {
                    color: #051e80ff;
                }

                100% {
                    color: #8f065dff;
                }
            }

            #site-description {
                font-size: 10px;
                animation: subbanana 10s infinite;
            }

            @keyframes subbanana {
                0% {
                    color: pink;
                }

                25% {
                    color: green;
                }

                50% {
                    color: blue;
                }

                75% {
                    color: yellow;
                }

                100% {
                    color: red;
                }
            }

            /* Hamburger Icon */
            #ham-icon {
                width: 35px;
                height: 20px;
                margin: 10px 0;
                position: relative
            }

            #ham-icon span {
                top: 0;
                bottom: 0;
                transition: opacity .2s
            }

            #ham-icon span,
            #ham-icon:before,
            #ham-icon:after {
                width: 100%;
                height: 4px;
                position: absolute;
                margin: auto;
                background-color: #FFF
            }

            #ham-icon:before,
            #ham-icon:after {
                content: "";
                display: block;
                transform: rotate(0)
            }

            #ham-icon:before {
                top: 0;
                bottom: calc(100% - .14286em);
                transition: bottom .2s .24s var(--easing-default), -webkit-transform .2s var(--easing-default);
                transition: transform .2s var(--easing-default), bottom .2s .24s var(--easing-default);
                transition: transform .2s var(--easing-default), bottom .2s .24s var(--easing-default), -webkit-transform .2s var(--easing-default)
            }

            #ham-icon:after {
                bottom: 0;
                top: calc(100% - .14286em);
                transition: top .2s .24s var(--easing-default), -webkit-transform .2s var(--easing-default);
                transition: transform .2s var(--easing-default), top .2s .24s var(--easing-default);
                transition: transform .2s var(--easing-default), top .2s .24s var(--easing-default), -webkit-transform .2s var(--easing-default)
            }

            #ham-icon.open:before {
                bottom: 0;
                transform: rotate(45deg);
                transition: bottom .2s var(--easing-default), -webkit-transform .2s .24s var(--easing-default);
                transition: bottom .2s var(--easing-default), transform .2s .24s var(--easing-default);
                transition: bottom .2s var(--easing-default), transform .2s .24s var(--easing-default), -webkit-transform .2s .24s var(--easing-default)
            }

            #ham-icon.open:after {
                top: 0;
                transform: rotate(-45deg);
                transition: top .2s var(--easing-default), -webkit-transform .2s .24s var(--easing-default);
                transition: top .2s var(--easing-default), transform .2s .24s var(--easing-default);
                transition: top .2s var(--easing-default), transform .2s .24s var(--easing-default), -webkit-transform .2s .24s var(--easing-default)
            }

            #ham-icon.open span {
                opacity: 0;
            }



        }

        @media only screen and (min-width: 500px) {
            body {
                margin: 0px;
                padding: 0px;
            }

            #top-header {
                padding: 0px 20px;
                display: flex;
                justify-content: space-between;
                background-color: #827F35;
            }

            #main-top-header {
                display: flex;
                height: 30px;
                padding: 0px
            }

            #menu {
                display: flex;
                margin-left: auto;

            }

            #menu ul {
                list-style-type: none;
            }

            #header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background: #BDFAE5;
                background: linear-gradient(90deg, rgba(189, 250, 229, 1) 0%, rgba(87, 199, 133, 1) 50%, rgba(237, 221, 83, 1) 100%);
                padding: 0px 20px;
            }

            #branding {
                display: flex;
                justify-content: center;

            }

            a {
                text-decoration: none;
                color: black;
            }

            nav {
                display: flex;
                justify-content: space-evenly;
                gap: 20px;
            }

            #search {
                justify-content: center;
            }

            #telephone {
                margin-top: 5px;
            }

            .info {
                gap: 20px
            }

            main {
                background-color: #FFFFFF;
            }

            #header-img {
                justify-content: center;
                animation: mymove 5s infinite;
                border-radius: 50%;
            }

            @keyframes mymove {
                50% {
                    transform: rotate(360deg);
                }
            }

            #name {
                font-size: 36px;
                font-weight: bold;
                animation: colorbanana 10s infinite;
            }

            @keyframes colorbanana {
                0% {
                    color: red;
                }

                25% {
                    color: yellow;
                }

                50% {
                    color: blue;
                }

                75% {
                    color: green;
                }

                100% {
                    color: pink;
                }
            }

            #site-description {
                animation: subbanana 10s infinite;
            }

            @keyframes subbanana {
                0% {
                    color: pink;
                }

                25% {
                    color: green;
                }

                50% {
                    color: blue;
                }

                75% {
                    color: yellow;
                }

                100% {
                    color: red;
                }
            }

        }
    </style>

    <!-- 
Hex:#827F35
Hex:#BDFAE5
Hex:#109836
Hex:#B8F3A0 -->
    <div id="container">
        <main id="content" role="main">