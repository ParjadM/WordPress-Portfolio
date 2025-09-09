</main>
<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">
    <div id="first_section">
        <p>Numero Uno Web solutions</p>
    </div>
    <div id="icon">
        <a class="footer-img" id="linkedin-img" href="https://ca.linkedin.com/in/parjadminooei"><img src="https://tse4.mm.bing.net/th/id/OIP.1R2nLh9Gdbpa75yVbtTFYgHaHY?rs=1&pid=ImgDetMain&o=7&rm=3" alt="linkedin" height="50px"></a>
        <a class="footer-img" id="github-img" href="https://github.com/ParjadM"><img src="https://logos-world.net/wp-content/uploads/2020/11/GitHub-Logo.png" alt="github" height="50px"></a>
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
    $options = get_option('PREFIX_ID_options', []);
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
        background: #BDFAE5;
        background: linear-gradient(90deg, rgba(189, 250, 229, 1) 0%, rgba(87, 199, 133, 1) 50%, rgba(237, 221, 83, 1) 100%);
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
        background-color: #827F35;
        font-size: 20px;
        display: flex;
        align-items: center;
        justify-content: space-around;
        gap: 20px;
    }

    #copyright {
        font-size: 26px;
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

    #copyright {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @media only screen and (max-width: 500px) {
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

    @media only screen and (min-width: 500px) {
        #footer {
            font-size: 14px;
        }
    }
</style>