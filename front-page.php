
<?php get_header(); ?>

    <div id="banner">
        <h1>&lt;GTCoding/&gt;</h1>
        <h3>Learn coding from scratch</h3>
    </div>

    <main>
        <a href="<?php echo site_url('/blog'); ?>">
            <h2 class="section-heading">All Blogs</h2>
        </a>

        <section>

            <?php

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2
                );

                $blogposts = new WP_Query($args);

                while ( $blogposts->have_posts() ) {
                    $blogposts->the_post();
                }

            ?>

            <div class="card">
                <div class="card-image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php get_the_post_thumbnail_url( get_the_ID ); ?>" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                    <a href="blogpost.html" class="btn-readmore">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <a href="blogpost.html">
                        <img src="img/2.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="blogpost.html">
                        <h3>The Blog Title Here</h3>
                    </a>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, ullam facilis consequuntur eligendi sit accusamus tempora
                        cum distinctio pariatur ipsa quod, odit dolorum non vero recusandae? Corporis voluptatem optio nulla.
                    </p>
                    <a href="blogpost.html" class="btn-readmore">Read more</a>
                </div>
            </div>
        </section>

        <a href="blogslist.html">
        	<h2 class="section-heading">All Projects</h2>
    	</a>

        <section>
            <div class="card">
                <div class="card-image">
                    <a href="blogpost.html">
                        <img src="img/3.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="blogpost.html">
                        <h3>The Project Title Here</h3>
                    </a>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, ullam facilis consequuntur eligendi sit accusamus tempora
                        cum distinctio pariatur ipsa quod, odit dolorum non vero recusandae? Corporis voluptatem optio nulla.
                    </p>
                    <a href="blogpost.html" class="btn-readmore">Read more</a>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <a href="blogpost.html">
                        <img src="img/4.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="blogpost.html">
                        <h3>The Project Title Here</h3>
                    </a>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, ullam facilis consequuntur eligendi sit accusamus tempora
                        cum distinctio pariatur ipsa quod, odit dolorum non vero recusandae? Corporis voluptatem optio nulla.
                    </p>
                    <a href="blogpost.html" class="btn-readmore">Read more</a>
                </div>
            </div>
        </section>

        <h2 class="section-heading">Source Code</h2>

        <section id="section-source">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum neque qui delectus ad dolor blanditiis perferendis praesentium
                consectetur aut sed provident obcaecati aspernatur perspiciatis, dolores nobis pariatur ipsum vel corrupti!
            </p>
            <a href="#" class="btn-readmore">GitHub Profile</a>
        </section>

<?php get_footer(); ?>