</main>
<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">
    <?php
    $options = get_option('Footer_ID_options', []);
    $footer = isset($options['footer_wysiwyg']) && !empty($options['footer_wysiwyg']) ? $options['footer_wysiwyg'] : 'Numero Uno Web solutions';
    ?>
    <div id="first_section">
        <p><?php echo esc_html($footer); ?></p>
    </div>
    <div id="icon">
        <?php
        $social_options = get_option('Footer_ID_options');
        $linkedin_url = isset($social_options['linkedin']) ? esc_url($social_options['linkedin']) : '';
        $github_url = isset($social_options['github']) ? esc_url($social_options['github']) : '';
        $instagram_url = isset($social_options['instagram']) ? esc_url($social_options['instagram']) : '';
        $facebook_url = isset($social_options['facebook']) ? esc_url($social_options['facebook']) : '';

        if (!empty($linkedin_url)) {
            echo '<a class="footer-img" id="linkedin-img" href="' . $linkedin_url . '">';
            echo '<img src="https://cdn.freebiesupply.com/logos/large/2x/linkedin-icon-logo-png-transparent.png" alt="linkedin" height="50px">';
            echo '</a>';
        }

        if (!empty($github_url)) {
            echo '<a class="footer-img" id="github-img" href="' . $github_url . '">';
            echo '<img src="https://logos-world.net/wp-content/uploads/2020/11/GitHub-Logo.png" alt="github" height="50px">';
            echo '</a>';
        }
        if (!empty($instagram_url)) {
            echo '<a class="footer-img" id="instagram-img" href="' . $instagram_url . '">';
            echo '<img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="github" height="50px">';
            echo '</a>';
        }
        if (!empty($facebook_url)) {
            echo '<a class="footer-img" id="facebook-img" href="' . $facebook_url . '">';
            echo '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/2048px-2021_Facebook_icon.svg.png" alt="github" height="50px">';
            echo '</a>';
        }
        ?>
    </div>

    <div id="copyright">
        &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> <?php echo esc_html(get_bloginfo('name')); ?> <?php echo ("All right Reserved"); ?>
    </div>
</footer>
<div id="bottom-footer">
    <div id="middle_section">
        <a href="#top-header">Back to top</a>
    </div>
    <?php
    $options = get_option('Footer_ID_options', []);
    $page_id = isset($options['website_page']) && !empty($options['website_page']) ? $options['website_page'] : null;

    // Check if a page was selected before trying to display a link
    if ($page_id) {
        $page_url = get_permalink($page_id);
        $page_title = get_the_title($page_id);

        // Display the link
        echo '<div id="footer-published">';
        echo '<a id="published" href="' . esc_url($page_url) . '">' . esc_html($page_title) . '</a>';
        echo "</div>";
    } else {
        echo 'No Published page yet';
    }
    ?>
</div>
</div>
<?php wp_footer(); ?>
</body>

</html>

<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    #footer-published {
        text-align: center;
    }

    #footer-published {
        display: flex;
        justify-content: center;
    }

    #footer {
        margin-top: auto;
        display: flex;
        justify-content: space-between;
        padding: 0px 20px;
        background: #dbfff4;
        background: linear-gradient(90deg, rgba(219, 255, 244, 1) 0%, rgba(149, 201, 183, 1) 17%, rgba(119, 181, 162, 1) 50%, rgba(151, 203, 185, 1) 85%, rgba(219, 255, 244, 1) 100%);
        height: 100px;

    }

    #first_section {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0px;
        padding: 0px;
        font-size: 26px;

    }

    #middle_section {
        display: flex;
        align-items: center;
        justify-content: center;
        text-shadow: 0 0 5px #ff005e, 0 0 10px #ff005e, 0 0 20px #ff005e, 0 0 40px #ff005e, 0 0 80px #ff005e;
        animation: glow 1.5s infinite alternate;
    }

    #bottom-footer {
        background-color: #587D71;
        font-size: 20px;
        display: flex;
        align-items: center;
        justify-content: space-around;
        gap: 20px;
    }

    #copyright {
        font-size: 26px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @keyframes glow {
        0% {
            text-shadow: 0 0 5px #ff005e, 0 0 10px #ff005e, 0 0 20px #ff005e, 0 0 40px #ff005e, 0 0 80px #ff005e;
        }

        100% {
            text-shadow: 0 0 10px #00d4ff, 0 0 20px #00d4ff, 0 0 40px #00d4ff, 0 0 80px #00d4ff, 0 0 160px #00d4ff;
        }
    }

    #icon {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }

    #middle_section a {
        animation-name: blinker;
        animation-duration: 1s;
        animation-iteration-count: infinite;
    }

    #middle_section a:hover {
        transform: scale(1.5);
    }

    @keyframes blinker {
        0% {
            color: red;
        }

        50% {
            color: blue;
        }

        100% {
            color: green;
        }
    }

    #linkedin-img {
        transition: transform .2s;
    }

    #linkedin-img:hover {
        transform: scale(1.5);
    }

    #github-img {
        transition: transform .2;
    }

    #github-img:hover {
        transform: scale(1.5);
    }

    #instagram-img {
        transition: transform .2;
    }

    #instagram-img:hover {
        transform: scale(1.5);
    }

    #facebook-img {
        transition: transform .2;
    }

    #facebook-img:hover {
        transform: scale(1.5);
    }

    #copyright {
        display: flex;
        align-items: center;
        justify-content: center;

    }

    #published {
        color: red;
        animation: flashing 2s linear infinite;
    }

    #published:hover {
        transform: scale(1.5);
        color: black;
        font-weight: bold;
    }

    @keyframes flashing {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @media only screen and (max-width: 768px) {
        #footer {
            font-size: 10px;
        }

        .footer-img img {
            height: 25px;
        }

        #first_section {
            font-size: 16px;
        }

        #copyright {
            font-size: 16px;
        }
    }

    @media only screen and (min-width: 768px) {
        #footer {
            font-size: 14px;
        }
    }
</style>