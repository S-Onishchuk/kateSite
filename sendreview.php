<?php
require 'head.php';
require 'headerPage.php';
?>

<section class="section section--cakepage">
    <div class="container">
        <div class="sentReview">
            <h1 class="sentReview__title">Залишити відгук</h1>
            <form action="sendMessage.php" method="POST" enctype="multipart/form-data">
                <div class="sentReview__flex sentReview__flex--input">
                    <input type="text" name="name" class="sr__input" placeholder="Ваше Ім'я" maxlength="10" required>
                    <input type="number" name="number" class="sr__input" placeholder="Ваш номер" maxlength="10">
                </div>
                <textarea type="text" name="message" class="sr__textarea" placeholder="Введіть назву торта і відгук"
                    maxlength="500" rows="5" required></textarea>
                <div class="sentReview__flex">
                    <label for="sr__file" class="form__btn">Прикріпити файл</label>
                    <input type="file" name="filename" id="sr__file">
                    <button type="submit" name="send" class="form__btn"> Відправити</button>
                </div>
            </form>
        </div>
        <!-- /.sentReview -->
    </div>
</section>
<!-- /.section -->

<?php
require 'footer.php';
?>