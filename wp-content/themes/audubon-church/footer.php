<footer id="foot" class="foot">
    <div class="foot-content">
        <p>
          <a href="index.php" class="to-top">Back to Top</a>
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
    </div>
</footer>
<script src="<?php bloginfo('template_directory');?>/assets/js/jquery.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script> -->
<script src="<?php bloginfo('template_directory');?>/assets/js/slick.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
