</main>
<footer id="foot" class="foot">
    <div class="foot-content">
        <p>
          <a href="index.php" class="to-top"><span class="assistive">Back to Top</span></a>
            <br />
            <br />
          &copy; <?php echo date("Y"); ?> Web Interest Site Design
            <?php
                // get the field value
                // $copyright = carbon_get_theme_option( 'crb_footer_copyright' );

                // output the field value
                echo $copyright;
            ?>

        </p>
          <a href="<?php echo get_home_url() . '/sitemap'; ?>">Sitemap</a>

    </div>
</footer>
<?php
global $template; echo basename($template); ?>


<?php wp_footer(); ?>

</body>
</html>
