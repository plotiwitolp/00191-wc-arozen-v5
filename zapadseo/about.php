<?php
/*
Template Name: Шаблон страницы "О компании"
Template Post Type: post, page
*/
?>
<?php get_header(); ?>
<div class="wrapper about">

    <!-- pervyj_ekran -->
    <?php if (get_field('pervyj_ekran_zagolovok')) { ?>
        <div class="top">
            <div class="container">
                <div class="top__inner">
                    <div class="top__first">
                        <h1 class="top__title"><?php the_field('pervyj_ekran_zagolovok') ?></h1>
                        <div class="bullet">
                            <?php if (have_rows('pervyj_ekran_preimushhestva')) :
                                while (have_rows('pervyj_ekran_preimushhestva')) : the_row();
                            ?>
                                    <div class="bullet__item">
                                        <?php
                                        $image = get_sub_field('kartinka');
                                        if (!empty($image)) : ?>
                                            <div class="bullet__img">
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="bullet__text"><?php the_sub_field('tekst'); ?></div>
                                    </div>
                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                    <div class="top__second">
                        <div class="images">
                            <?php if (have_rows('pervyj_ekran_kartinki')) :
                                while (have_rows('pervyj_ekran_kartinki')) : the_row();
                            ?>
                                    <?php
                                    $image = get_sub_field('kartinka');
                                    if (!empty($image)) : ?>
                                        <div class="images__item">
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                        </div>
                                    <?php endif; ?>
                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


    <!-- uslugi -->
    <?php if (get_field('uslugi_lejbl')) { ?>
        <!-- START УСЛУГИ -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('uslugi_lejbl'); ?></div>
                <h2 class="block__title"><?php the_field('uslugi_zagolovok'); ?></h2>

                <div class="service">
                    <?php
                    if (have_rows('uslugi_kartochki')) :
                        $i = 1;
                        while (have_rows('uslugi_kartochki')) : the_row();
                    ?>
                            <div class="service__item">
                                <div class="service__header">
                                    <div class="service__header-el">
                                        <?php
                                        $kartinka = get_sub_field('ikonka');
                                        if (!empty($kartinka)) : ?>
                                            <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="counter">
                                        <?php if ($i < 10) {
                                            echo '0' . $i;
                                        } else {
                                            echo $i;
                                        }; ?>
                                    </div>
                                </div>
                                <h3 class="service__title"><?php the_sub_field('zagolovok'); ?></h3>
                                <div class="service__desc"><?php the_sub_field('opisanie'); ?></div>
                                <div class="service__detail">
                                    <div class="service-list">
                                        <?php
                                        if (have_rows('spisok')) :
                                            while (have_rows('spisok')) : the_row();
                                        ?>
                                                <div class="service-list__item">
                                                    <span><?php the_sub_field('nazvanie'); ?></span>
                                                    <span><?php the_sub_field('opisanie'); ?></span>
                                                </div>
                                        <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="service__footer">
                                    <a href="<?php the_sub_field('ssylka_knopki'); ?>">
                                        <div class="btn"><?php the_sub_field('nazvanie_knopki'); ?></div>
                                    </a>
                                </div>
                            </div>
                    <?php
                            $i++;
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>
        </div>
        <!-- END УСЛУГИ -->
    <?php } ?>


    <!-- clients -->
    <?php if (get_field('klienty_lejbl')) { ?>
        <!-- START КЛИЕНТЫ -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('klienty_lejbl'); ?></div>
                <h2 class="block__title"><?php the_field('klienty_zagolovok'); ?></h2>

                <div class="clients">
                    <div class="clients__first">
                        <div class="bullet bullet_clients">
                            <?php if (have_rows('klienty_preimushhestva')) :
                                while (have_rows('klienty_preimushhestva')) : the_row();
                            ?>
                                    <div class="bullet__item">
                                        <?php
                                        $image = get_sub_field('kartinka');
                                        if (!empty($image)) : ?>
                                            <div class="bullet__img">
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="bullet__text"><?php the_sub_field('tekst'); ?></div>
                                    </div>
                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                    <div class="clients__second">
                        <?php
                        $image = get_field('klienty_kartinka');
                        if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endif; ?>
                    </div>

                </div>

            </div>
        </div>
        <!-- END КЛИЕНТЫ -->
    <?php } ?>



    <!-- history -->
    <?php if (get_field('nasha_istoriya_lejbl')) { ?>
        <!-- START ИСТОРИЯ -->
        <div class="block block_yellow">
            <div class="container">
                <div class="block__label"><?php the_field('nasha_istoriya_lejbl'); ?></div>
                <h2 class="block__title"><?php the_field('nasha_istoriya_zagolovok'); ?></h2>
                <div class="history">
                    <div class="histslider1__wrapper">
                        <div class="histslider1">
                            <div class="histslider1__inner">
                                <?php if (have_rows('nasha_istoriya_po_godam_slajder')) :
                                    while (have_rows('nasha_istoriya_po_godam_slajder')) : the_row();
                                ?>
                                        <div class="histslider1__item"><span><?php echo get_sub_field('god'); ?></span></div>
                                <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                        <div class="history__prevnext prev-next">
                            <div class="prev-arrow"></div>
                            <div class="next-arrow"></div>
                        </div>
                    </div>
                    <div class="histslider2">
                        <div class="histslider2__inner">
                            <?php if (have_rows('nasha_istoriya_po_godam_slajder')) :
                                while (have_rows('nasha_istoriya_po_godam_slajder')) : the_row();
                            ?>
                                    <div class="histslider2__item">
                                        <div class="histslider2__item-inner">
                                            <div class="histslider2__item-year"><?php echo get_sub_field('god'); ?></div>
                                            <div class="histslider2__item-desc"><?php echo get_sub_field('tekst'); ?></div>
                                        </div>
                                    </div>
                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END ИСТОРИЯ -->
    <?php } ?>



    <!-- komanda -->
    <?php if (get_field('komanda_lejbl')) { ?>
        <!-- START КОМАНДА -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('komanda_lejbl'); ?></div>
                <h2 class="block__title mw880"><?php the_field('komanda_zagolovok'); ?></h2>

                <div class="team2">

                    <div class="team2__inner">
                        <?php if (have_rows('komanda_sotrudniki_slajder')) {
                            $i = 1;
                            $sum = count(get_field('komanda_sotrudniki_slajder'));
                            $sum = $sum < 10 ? '0' .  $sum :   $sum;
                            while (have_rows('komanda_sotrudniki_slajder')) {
                                the_row(); ?>

                                <div class="team2__item">
                                    <div class="team2__item__inner">
                                        <div class="team2__first">
                                            <div class="team2__img">
                                                <?php if ($image = get_sub_field('foto')) { ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="team2__second">
                                            <div class="team2__counter">
                                                <span><?php echo $i < 10 ? '0' . $i :  $i; ?></span> / <span><?php echo  $sum; ?></span>
                                            </div>
                                            <div class="team2__name"><?php echo get_sub_field('imya'); ?></div>
                                            <div class="team2__spec">
                                                <span><?php echo get_sub_field('dolzhnost'); ?></span>
                                            </div>
                                            <div class="team2__exp">
                                                <div class="team2__exp-title">Опыт</div>
                                                <div class="team2__exp-desc"><?php echo get_sub_field('opyt'); ?></div>
                                            </div>
                                            <div class="team2__skills">
                                                <div class="team2__exp-title">Скиллы</div>
                                                <div class="team2__exp-items">
                                                    <?php if (have_rows('skilly')) {
                                                        while (have_rows('skilly')) {
                                                            the_row(); ?>
                                                            <div class="team2__exp-item"><?php echo get_sub_field('skill'); ?></div>
                                                    <?php }
                                                    } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php $i++;
                            }
                        } ?>
                    </div>

                    <div class="team2__prevnext prev-next">
                        <div class="prev-arrow"></div>
                        <div class="next-arrow"></div>
                    </div>

                </div>

            </div>
        </div>
        <!-- END КОМАНДА -->
    <?php } ?>


</div>
<?php get_footer(); ?>