<?php
require 'head.php';
require 'headerPage.php';
update_views($_GET['id']);
$cake = get_cake_by_id($_GET['id']);
?>
<section class="section section--cakepage">
    <div class="container">

        <div class="cakepage">
            <div class="view__icon" id="cakepage">
                <i class="icon-eye"></i>
                <p><?php echo $cake['view']; ?></p>
            </div>
            <div class="for_btn">
                <!-- button  -->
                <?php
                $page = $_GET['id'];
                $pages = pages();
                $pages = $pages["COUNT(*)"];
                // print_r($pages["COUNT(*)"]);
                // print_r($pages);

                // cake or sweet
                $cakes = get_cakes_all();
                foreach ($cakes as $c) {
                    if ($c['id_category'] != 2) {
                        $arrCake[] = $c['id'];
                    } else {
                        $arrSweet[] = $c['id'];
                    }
                }

                if ($cake['id_category'] == 2) {
                    for ($i = 0; $i < count($arrSweet); $i++) {
                        //echo $arrCake[$i] . "<br>";
                        if ($arrSweet[$i] == $cake['id']) {
                            if ($i == count($arrSweet) - 1) {
                                $nextPage = $arrSweet[0];
                                $prevPage = $arrSweet[$i - 1];
                            } elseif ($i == 0) {
                                $prevPage = $arrSweet[count($arrSweet) - 1];
                                $nextPage = $arrSweet[$i + 1];
                            } else {
                                $prevPage = $arrSweet[$i - 1];
                                $nextPage = $arrSweet[$i + 1];
                            }
                        }
                    }
                } elseif ($cake['id_category'] == 1) {
                    for ($i = 0; $i < count($arrCake); $i++) {
                        // echo $arrCake[$i] . "<br>";
                        if ($arrCake[$i] == $cake['id']) {
                            if ($i == count($arrCake) - 1) {
                                $nextPage = $arrCake[0];
                                $prevPage = $arrCake[$i - 1];
                            } elseif ($i == 0) {
                                $prevPage = $arrCake[count($arrCake) - 1];
                                $nextPage = $arrCake[$i + 1];
                            } else {
                                $prevPage = $arrCake[$i - 1];
                                $nextPage = $arrCake[$i + 1];
                            }
                        }
                    }
                }
                ?>
                <button class="next" type="button"
                    onclick="window.location.href='cakepage.php?id=<?php echo $cake['id'] = $nextPage; ?>'">
                </button>
                <button class="prev" type="button"
                    onclick="window.location.href='cakepage.php?id=<?php echo $cake['id'] = $prevPage; ?>'">
                </button>

                <!-- /button -->

                <picture>
                    <source srcset="<?php echo $img['img_mob']; ?>" media="(max-width: 575px)">
                    <img class="cakepage__img" src="<?php echo $cake['img']; ?>" alt="cake">
                </picture>
            </div>
            <div class="catepage__item">
                <div class="cp__describe">
                    <h1 class="cp__title"><?php echo $cake['title']; ?></h1>
                    <h3 class="cp__price"><?php echo $cake['price']; ?></h3>
                </div>
                <p class="cp__text"><?php echo $cake['describle']; ?></p>
            </div>
            <!-- catepage__item -->
            <!-- cakepage.php?id= echo $cake['id'] + 1;  -->

        </div>
        <!-- cakepage -->

    </div>
</section>
<!-- /.section -->

<?php
require 'footer.php';
?>