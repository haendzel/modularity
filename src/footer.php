<div class="wrapper">
        <footer> <!-- FOOTER -->
            <div class="metadata">
                <a data-scroll href="#" class="logo"><img src="<?php echo get_field('logo_ft'); ?>"></a>
                    <a data-scroll href="#one">Point One</a>
                    <a data-scroll href="#two">Point Two</a>
                    <a data-scroll href="#three">Point Three</a>
                    <a data-scroll href="#four">Point Four</a>
                    <a data-scroll href="#five">Point Five</a> 
                <div class="copyright"><?php echo get_field('copyright'); ?></div>

                <?php $rows = get_field('social_media'); if ($rows): ?>
                <div class="social">
                    <?php foreach ($rows as $i => $row): ?> 
                    <a href="<?php echo $row['social_url']; ?>"><img src="<?php echo $row['social_logo']; ?>"></a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

            </div>
        </footer>
    </div> <!-- wrapper -->

</div> <!-- container-->
<?php wp_footer(); ?>
</body>
</html>