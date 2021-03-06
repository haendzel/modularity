<?php /* Template Name: Front page */ ?>

<?php get_header(); ?>

<!-- SECTION ONE -->
<?php $row = get_field('section_1'); if ($row): ?>
<section id="section-one"> 
    <div class="wrapper">
        <article>
            <div class="content">
                <div class="info">
                    <h3 class="subtitle"><?php echo $row['subtitle']; ?></h3>
                    <h1 class="title"><?php echo $row['headline']; ?></h1>
                        <div class="desc"><?php echo $row['content_wysiwyg']; ?></div>
                        <div class="content-btns">
                            <button class='is-active' onclick="location.href='<?php echo $row['url_1']; ?>"><?php echo $row['type_1'];?></button>
                            <button onclick="location.href='<?php echo $row['url_2']; ?>"><?php echo $row['type_2'];?></button>
                        </div>
                </div>
            </div>
            <div class="content-photo">
                <img src="<?php echo $row['image']; ?>">
            </div>
        </article>
    </div>
</section>
<?php endif; ?>

<!-- SECTION TWO -->
<?php $row = get_field('section_2'); if ($row): ?>
    <section id="section-two" style="background-image: url(<?php echo $row['image']; ?>);"> 
        <div class="content">
            <div class="info">
                <h3 class="subtitle"><?php echo $row['subtitle']; ?></h3>
                <h2 class="title"><?php echo $row['headline']; ?></h2>
                <div class="link"><a href="#section-three" data-scroll><img src="<?php echo get_theme_file_uri('/images/arrow-down.svg')?>"><?php echo $row['content_wysiwyg']; ?></a></div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- SECTION THREE -->
<?php $rows = get_field('section_3'); if ($rows): foreach($rows as $i => $row): ?>
    <div class="wrapper">
            <section id="section-three"> 
                <div class="content">
                    <h1 class="title"><?php echo $row['headline']; ?></h1>
                    <?php $images = $row['repeater_images']; if ($images): ?>
                    <div class="partners">
                        <?php foreach ($images as $i => $img): ?>
                            <div class="slot"><img src="<?php echo $img['image']; ?>" /></div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div> 
        </section>
<?php endforeach; endif; ?>

<!-- SECTION FOUR-->
<?php $rows = get_field('section_5'); if ($rows): ?>
        <section id="section-four">
            <?php foreach ($rows as $i => $row): ?> 
                <article>
                    <div class="content">
                        <div class="info">
                            <h3 class="subtitle"><?php echo $row['subtittle'];?></h3>
                            <h1 class="title"><?php echo $row['headline'];?></h1>
                            <div class="desc"><?php echo $row['content'];?></div>
                            <div class="highlight-group">
                                <?php echo $row['highlight']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="content-photo"><img src="<?php echo $row['photo'];?>"></div>
                </article>
            <?php endforeach; ?>
        </section> 
<?php endif; ?> 

<!--- SECTION FIVE -->
        <section id="section-five"> 
            <div class="wrapper">
                <div class="content">
                    
                    <div class="info">
                        <h2 class="subtitle"><?php echo get_field('description_above'); ?></h2>
                    </div>
                    
                </div>

                <?php $rows = get_field('section_4'); if ($rows): foreach($rows as $i => $row): ?>
                <article class="person">
                    <div class="user-photo">
                        <img src="<?php echo $row['photo']; ?>">
                    </div>
                    <div class="user-info">
                        <h2><?php echo $row['name']; ?></h2>
                        <h3><?php echo $row['profession']; ?></h3>
                        <div class="desc"><?php echo $row['description']; ?></div>
                    </div>
                </article>
                <?php endforeach; endif; ?>

            </div> 
        </section>


<!--- SECTION DESCRIPTION -->
    <?php $row = get_field('description'); if ($row): ?>
        <section id="section-description">
            <div class="wrapper">
                <div class="aboutus">
                    <div class="content">
                        <div class="info">
                            <h1 class="title"><?php echo $row['headline'];?></h1>
                        </div>
                    </div>
                <div class="content">
                    <div class="info">
                        <div class="desc"><?php echo $row['content'];?></div>
                    </div>
                </div>
            </div>
            </div> 
            <div class="content-photo">
                <img src="<?php echo get_field('background_image');?>">
            </div>
        </section>
    <?php endif; ?>


<!-- SECTION CONTACT -->
<?php $row = get_field('contact'); if ($row): ?>
  <section id="section-contact"> 

    <?php $location = get_field('map'); if( $location ): ?>
        <div class="acf-map" data-zoom="16">
            <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
        </div>
    <?php endif; ?>

        <div class="form">
                <div class="content">
                <h2 class="contact"><?php echo $row['title']; ?></h2>
                <div class="address">
                    <span class="address-title"><?php echo $row['address_title']; ?></span>
                    <div class="address-data"><?php echo $row['address']; ?></div>
                    <div class="cont">
                        <span class="cont-title">Phone: </span><span><?php echo $row['phone']; ?></span><br>
                        <span class="cont-title">Email: </span><span><?php echo $row['email']; ?></span>
                    </div>
                </div>
                <h3 class="form-title"><?php echo $row['second_title']; ?></h3>
                <span><?php echo $row['text']; ?></span>
                <div class="contact-form">
                    <input type="text" id="name" name="name" value="Name">
                    <input type="email" id="email" name="email" value="*Your e-mail address">
                    <textarea id="text-area" rows="4" cols="50"></textarea>
                    <button><?php echo $row['button']; ?></button>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
