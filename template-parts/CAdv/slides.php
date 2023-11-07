<section class="box-slide-main">
    <div class="container-fluid">
        <div class="swiper slide-main">
            <div class="swiper-wrapper">

                <?php
                if (pll_current_language() == 'de') {
                    $args = array(
                        'post_status' => 'publish',
                        'post_type' => 'banner',
                        'categories_banners' => 'slides-main',
                    );
                } else {
                    $args = array(
                        'post_status' => 'publish',
                        'post_type' => 'banner',
                        'categories_banners' => 'slides-main-en',
                    );
                }
                ?>
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query;
                $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <div class="swiper-slide">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                        <div class="box-text">
                            <div class="container-box-text">
                                <div class="title">
                                    <?php if ($sub_image = get_field('sub_image')) { ?>
                                        <?php echo wp_get_attachment_image($sub_image); ?>
                                    <?php } else { ?>
                                        <?php the_field('title') ?>
                                    <?php } ?>
                                </div>
                                <div class="description">
                                    <?php the_field('description') ?>
                                </div>
                                <div class="bottom-text">
                                    <?php if ($url = get_field('url')) { ?>
                                        <a href="<?php echo $url ?>"><?php echo pll_e('Mehr erfahren') ?></a>
                                    <?php } else { ?>
                                        <a href="#!"><?php echo pll_e('Mehr erfahren') ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
            <div class="swiper-button-next">
                <img width='27px' height="54px" src="<?php bloginfo('template_directory'); ?>/image/common/swiper/next.png" alt='next-button'/>
            </div>
            <div class="swiper-button-prev">
                <img width='27px' height="54px" src="<?php bloginfo('template_directory'); ?>/image/common/swiper/prev.png" alt='prev-button'/>
            </div>
        </div>
    </div>
</section>
<div class="clear"></div>
<!-- End slide main -->