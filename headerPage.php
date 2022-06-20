<body>
    <header class="header" id="header">
        <div class="container">
            <div class="header__top">
                <div class="logo">
                    <img class="logo__img" src="img/logo.png" alt="logo">
                    <div class="logo__text">
                        <h1>Катерина Оніщук</h1>
                        <p>Солодощі на замовлення</p>
                    </div>
                </div>
                <!-- /.logo-->
                <div class="tel">
                    <a href="tel:+380959189890">+38 (095) 918-98-90</a>
                </div>
                <!-- /.tel -->

                <?php
                $cakes = get_cakes_all();
                foreach ($cakes as $c) {
                    if ($c['id_category'] != 1) {

                        $arrSweet[] = $c['id'];
                    } else {
                        $arrCake[] = $c['id'];
                    }
                }
                ?>

                <nav class="nav">
                    <ul class="nav__list">
                        <li><a href="index.php" class="nav__list__a">Головна</a></li>
                        <li><a href="cakepage.php?id=<?php echo $arrCake[0]; ?>" class="nav__list__a">Торти</a></li>
                        <li><a href="cakepage.php?id=<?php echo $arrSweet[0]; ?>" class="nav__list__a">Десерти</a></li>
                        <li><a href="sendreview.php" class="nav__list__a">Залишити відгук</a></li>
                    </ul>
                </nav>
                <!-- /.nav -->

                <button type="button" class="nav-toggle">
                    <span class="nav-toggle__item">Menu</span>
                </button>
                <!-- /.nav-toggle -->

            </div>
            <!-- /.header__top -->
        </div>
        <!-- /.container -->
    </header>
    <!-- /.header -->