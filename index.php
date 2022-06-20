<?php
require 'head.php';
require 'header.php';
?>

<section class="intro" id="intro">
    <div class="slick__intro" id="slick_intro">


        <?php
        $intro = get_intro_all();
        foreach ($intro as $img) : ?>

        <div class="intro__item">
            <picture>
                <source srcset="<?php echo $img['img_mob']; ?>" media="(max-width: 575px)">
                <img class="intro__img" src="<?php echo $img['img']; ?>" alt="cake">
            </picture>
        </div>
        <?php endforeach; ?>

    </div>
</section>
<!-- /.intro -->

<section class="section section--first">
    <div class="container">

        <div class="section__name" id="cakes">
            <h2>Торти</h2>
        </div>
        <!-- /.section__name -->


        <div class="foto">
            <?php
            $cakes = get_cakes_all();
            foreach ($cakes as $cake) {
                if ($cake['id_category'] != 2) : ?>
            <a class="foto__a" href="cakepage.php?id=<?php echo $cake['id']; ?>">
                <p class="foto__a__title"><?php echo $cake['title']; ?></p>
                <img class="foto__a__img" src="<?php echo $cake['img']; ?>" alt="cake">
            </a>
            <?php endif;
            } ?>
        </div>
        <!-- /.foto -->

    </div>
</section>
<!-- /.section -->

<hr class="hr">

<section class="section" id="sweets">
    <div class="container">

        <div class="section__name">
            <h2>Десерти</h2>
        </div>
        <!-- /.section__name -->


        <div class="foto">
            <?php
            $cakes = get_cakes_all();
            foreach ($cakes as $cake) {
                if ($cake['id_category'] != 1) : ?>
            <a class="foto__a" href="cakepage.php?id=<?php echo $cake['id']; ?>">
                <p class="foto__a__title"><?php echo $cake['title']; ?></p>
                <img class="foto__a__img" src="<?php echo $cake['img']; ?>" alt="cake">
            </a>
            <?php endif;
            } ?>


        </div>
        <!-- /.foto -->

    </div>
</section>
<!-- /.section -->

<hr class="hr">

<section class="section" id="gallery">
    <div class="container">

        <div class="section__name">
            <h2>Мої роботи</h2>
        </div>
        <!-- /.section__name -->

        <div class="foto foto--gallery">


            <?php
            $imgs = get_gallery_all();
            foreach ($imgs as $img) : ?>

            <a class="foto__a" href="<?php echo $img['img']; ?>" data-lightbox="lb_cake">
                <img class="foto__a__img" src="<?php echo $img['img_min']; ?>" alt="cake">
            </a>

            <?php endforeach; ?>

        </div>
        <!-- /.foto -->
    </div>
</section>
<!-- /.section -->

<hr class="hr">

<section class="section section--review" id="review">
    <div class="container">

        <div class="section__name">
            <h2>Відгуки</h2>
        </div>
        <!-- /.section__name -->

        <div class="slick__review" id="slick_review">

            <?php
            $reviews = get_review_all();
            foreach ($reviews as $review) : ?>
            <div>
                <div class="review">
                    <img class="review__foto" src="<?php echo $review['img']; ?>" alt="foto">
                    <!-- /.review__foto -->
                    <div class="review__item">
                        <h4 class="review__name">
                            <?php echo $review['name']; ?>
                        </h4>
                        <h6 class="review__title"><?php echo $review['title']; ?></h6>
                        <p class="review__text"><?php echo $review['text']; ?></p>
                        <p class="review__title review__title--date">
                            <?php echo date("d.m.Y", strtotime($review['date'])); ?></p>
                        <button type="button" class="form__btn form__btn--review"
                            onclick="window.location.href='\sendreview.php'"> Залишити відгук</button>
                    </div>
                    <!-- /.review__item -->
                </div>
                <!-- /.review -->
            </div>
            <?php endforeach; ?>

        </div>


    </div>
</section>
<!-- /.section -->

<?php
require 'footer.php';
?>