<?php /* Template Name: Front page */ ?>

<?php get_header(); ?>

<section id="product"> <!-- SECTION ONE -->
            <div class="wrapper">
                <div class="content">
                    <div class="info">
                        <h3 class="subtitle">Subtitle</h3>
                        <h1 class="title">Our product is available for use</h1>
                        <div class="desc">A project is a temporary endeavor designed to produce a unique product, 
                            service or result with a defined beginning and end undertaken to meet unique goals and objectives, 
                            typically to bring about beneficial change or added value. The object of project management 
                            is to produce a complete project which complies with the client's objectives.
                        </div>
                        <div class="content-btns">
                            <button class="is-active" onclick="location.href='#product';">main cta</button>
                            <button onclick="location.href='#two';" >second cta</button>
                        </div>
                    </div>
                </div>

                <div class="content-photo">
                    <img src="<?php echo get_theme_file_uri('images/bike.png')?>">
                </div>
            </div>
        </section>

        <!-- SECTION TWO -->
    <section id="two" style="background-image: url(<?php echo get_theme_file_uri('/images/watch.png')?>);"> 
        <div class="content">
            <div class="info">
                <h3 class="subtitle">inmarketing</h3>
                <h2 class="title">Product is an object made available for consumer use</h2>
                <div class="link"><a href="#partners" data-scroll><img src="<?php echo get_theme_file_uri('/images/arrow-down.svg')?>">Explore</a></div>
            </div>
        </div>
    </section>

    <div class="wrapper">
            <section id="partners"> <!-- SECTION PARTNERS -->
                <div class="content">
                    <h1 class="title">Our partners</h1>
                    <div class="partners">
                        <div class="slot"><img src="<?php echo get_theme_file_uri('images/amazon.svg')?>"></div>
                        <div class="slot"><img src="<?php echo get_theme_file_uri('images/visa.svg')?>"></div>
                        <div class="slot"><img src="<?php echo get_theme_file_uri('images/paypal.svg')?>"></div>
                        <div class="slot"><img src="<?php echo get_theme_file_uri('images/applepay.svg')?>"></div>
                        <div class="slot"><img src="<?php echo get_theme_file_uri('images/transferwise.svg')?>"></div>
                        <div class="slot"><img src="<?php echo get_theme_file_uri('images/payoneer.svg')?>"></div>
                        <div class="slot"><img src="<?php echo get_theme_file_uri('images/skrill.svg')?>"></div>
                        <div class="slot"><img src="<?php echo get_theme_file_uri('images/stripe.svg')?>"></div>
                    </div>
                </div>
            </div> <!-- wrapper -->
        </section>

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

                <article>
                <div class="content">
                    <div class="info">
                        <h3 class="subtitle">feature two</h3>
                        <h1 class="title">Service delivery point</h1>
                        <div class="desc">The physical location and/or logical interface where the benefits of the service are rendered to the consumer. 
                            At this point the service delivery preparation can be assessed and delivery can be monitored and controlled.
                        </div>
                    </div>
                    <div class="highlight-group">
                            <div class="highlight">
                                <span class="text"><h2>+120%</h2></span>
                                <div class="short-desc--text">Your advantages help clients to make their decision</div>
                            </div>
                            <div class="highlight">
                                <span class="text"><h2>2 times</h2></span>
                                <div class="short-desc--text">Your advantages help clients to make their decision</div>
                            </div>
                        </div>
                </div>
                <div class="content-photo"><img src="<?php echo get_theme_file_uri('images/bike-feature2.png')?>"></div>
                </article>
                
                <article>
                <div class="content">
                    <div class="info">
                        <h3 class="subtitle">feature three</h3>
                        <h1 class="title">Delivery readiness time</h1>
                        <div class="desc">The moments when the service is available and all the specified service elements are available at the delivery point.
                        </div>
                    </div>
                    <div class="highlight-group">
                        <div class="highlight">
                            <h3 class="form-title">Subscribe to our news:</h3>
                            <input type="email" id="email" name="email" value="*Your e-mail address"> 
                        </div>
                    </div>
                </div>

                <div class="content-photo"><img src="<?php echo get_theme_file_uri('images/bike-feature3.png')?>"></div>
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

                <article class="person">
                    <div class="user-photo">
                        <img src="<?php echo get_theme_file_uri('images/person1.png')?>">
                    </div>
                    <div class="user-info">
                        <h2>John Smith</h2>
                        <h3>art director</h3>
                        <div class="desc">It is the charge of a sole art director to supervise 
                            and unify the vision. In particular, the art director is in charge of 
                            the overall visual appearance and how it communicates visually, 
                            stimulates moods, contrasts features, and psychologically appeals 
                            to a target audience. The art director makes decisions 
                            about visual elements used, what artistic style to use, and when to use 
                            motion.
                        </div>
                    </div>
                </article>

                <article class="person">
                    <div class="user-photo">
                        <img src="<?php echo get_theme_file_uri('images/person2.png')?>">
                    </div>
                    <div class="user-info">
                        <h2>Natalie Fischer</h2>
                        <h3>Project manager</h3>
                        <div class="desc">A project manager is a professional in the field of project management. 
                            Project managers have the responsibility of the planning, procurement and execution 
                            of a project, in any undertaking that has a defined scope, defined start and a defined 
                            finish; regardless of industry. Project managers are first point of contact for any issues 
                            or discrepancies arising from within the heads of various departments in an organization before 
                            the problem escalates to higher authorities.
                        </div>
                    </div>
                </article>
            </div> <!-- wrapper -->
        </section>

        <section id="about"> <!--- SECTION ABOUT -->
            <div class="wrapper">
                <div class="aboutus">
                    <div class="content">
                        <div class="info">
                            <h1 class="title">About us</h1>
                        </div>
                    </div>
                <div class="content">
                    <div class="info">
                        <div class="desc">
                                Modern storytelling has a broad purview. 
                                In addition to its traditional forms (fairytales, folktales, 
                                mythology, legends, fables etc.), it has extended itself to representing history, personal narrative, 
                                political commentary and evolving cultural norms. Contemporary storytelling is 
                                also widely used to address educational objectives. New forms of media are creating 
                                new ways for people to record, express and consume stories. Tools for asynchronous 
                                group communication can provide an environment for individuals to reframe or recast 
                                individual stories into group stories.
                        </div>
                    </div>
                </div>
            </div>
            </div> <!-- wrapper -->
            <div class="content-photo">
                <img src="<?php echo get_theme_file_uri('images/building.png')?>">
            </div>
        </section>

    <section id="contact" style="background-image: url(<?php echo get_theme_file_uri('images/map-test.png')?>"> 
    <!-- SECTION CONTACT -->
        <div class="form">
                <div class="content">
                <h2 class="contact">Contact us</h2>
                <div class="address">
                    <span class="address-title">Corporate headquarters</span>
                    <div class="address-data">27 Merry Lane NP000126854<br>
                            New Jersey, East Hanover, 07936</div>
                    <div class="cont">
                        <span class="cont-title">Phone: </span><span>123456789</span><br>
                        <span class="cont-title">Email: </span><span>hello@modularity.com</span>
                    </div>
                </div>
                <h3 class="form-title">Get in Touch</h3>
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

<?php get_footer(); ?>
