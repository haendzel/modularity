<?php /* Template Name: Front page */ ?>

<?php get_header(); ?>

<?php $row = get_field('section_1'); if ($row): ?>
<section id="product"> <!-- SECTION ONE -->
    <div class="wrapper">
        <div class="content">
            <div class="info">
                <h3 class="subtitle"><?php echo $row['subtitle']; ?></h3>
                <h1 class="title"><?php echo $row['headline']; ?></h1>
                    <div class="desc"><?php echo $row['content_wysiwyg']; ?></div>
                    <div class="content-btns">
                    <?php $button = get_field('repeater_buttons'); if ($button): ?>
                        <button onclick="location.href='<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('btn');?></button>
                    <?php endif; ?>
                    </div>
            </div>
        </div>
        <div class="content-photo">
            <img src="<?php echo $row['image']; ?>">
        </div>
    </div>
</section>
<?php endif; ?>

<!-- SECTION TWO -->
<?php $row = get_field('section_2'); if ($row): ?>
    <section id="two" style="background-image: url(<?php echo $row['image']; ?>);"> 
        <div class="content">
            <div class="info">
                <h3 class="subtitle"><?php echo $row['subtitle']; ?></h3>
                <h2 class="title"><?php echo $row['headline']; ?></h2>
                <div class="link"><a href="#partners" data-scroll><img src="<?php echo get_theme_file_uri('/images/arrow-down.svg')?>"><?php echo $row['content_wysiwyg']; ?></a></div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- SECTION PARTNERS -->
<?php $row = get_field('section_3'); if ($row): ?>
    <div class="wrapper">
            <section id="partners"> 
                <div class="content">
                    <h1 class="title"><?php echo $row['headline']; ?></h1>
                    <?php $images = get_field('repeater_images'); if ($images): ?>
                    <?php var_dump($images); ?>
                    <div class="partners">
                        <?php foreach ($images as $i => $image): ?>
                            <div class="slot"><img src="<?php echo $image['image']; ?>" /></div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div> <!-- wrapper -->
        </section>
<?php endif; ?>

        <section id="features"> <!-- SECTION FEATURES -->
                <article>
                    <div class="content">
                        <div class="info">
                            <h3 class="subtitle">feature one</h3>
                            <h1 class="title">Functional parameters</h1>
                            <div class="desc">Parameters that are essential to the respective service and that describe 
                                the important dimension(s) of the servicescape, the service output or the service outcome.
                            </div>
                            <div class="highlight-group">
                                <div class="highlight">
                                    <img class="icon" src="<?php echo get_theme_file_uri('images/watch-icon.svg')?>">
                                    <div class="short-desc">Your advantages help clients to make their decision</div>
                                </div>
                                <div class="highlight">
                                    <img class="icon" src="<?php echo get_theme_file_uri('images/coffee-icon.svg')?>">
                                    <div class="short-desc">Your advantages help clients to make their decision</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-photo"><img src="<?php echo get_theme_file_uri('images/bike-feature1.png')?>"></div>
                </article>
        </section>

        <section id="team"> <!--- SECTION TEAM -->
            <div class="wrapper">
                <div class="content">
                    <div class="info">
                        <h2 class="subtitle">Team is a group of people who are interdependent with
                        respect to information, resources, and skills and who seek to combine their 
                        efforts to achieve a common goal.</h2>
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

            </div> <!-- wrapper -->
        </section>

    <?php $row = get_field('description'); if ($row): ?>
        <section id="about"> <!--- SECTION ABOUT -->
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
            </div> <!-- wrapper -->
            <div class="content-photo">
                <img src="<?php echo get_field('background_image');?>">
            </div>
        </section>
    <?php endif; ?>

        

<!-- SECTION CONTACT -->
<?php $row = get_field('contact'); if ($row): ?>
  <section id="contact" style="background-image: url(<?php echo get_theme_file_uri('images/map-test.png')?>"> 
        <div class="form">
                <div class="content">
                <h2 class="contact"><?php echo $row['title']; ?></h2>
                <div class="address">
                    <span class="address-title">Corporate headquarters</span>
                    <div class="address-data"><?php echo $row['address']; ?></div>
                    <div class="cont">
                        <span class="cont-title">Phone: </span><span><?php echo $row['phone']; ?></span><br>
                        <span class="cont-title">Email: </span><span><?php echo $row['email']; ?></span>
                    </div>
                </div>
                <h3 class="form-title"><?php echo $row['second_title']; ?></h3>
                <span>Please fill out the form</span>
                <div class="contact-form">
                    <input type="text" id="name" name="name" value="Name">
                    <input type="email" id="email" name="email" value="*Your e-mail address">
                    <textarea id="text-area" rows="4" cols="50"></textarea>
                    <button>Submit</button>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
