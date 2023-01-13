<?php
require_once 'templates/header.php';
?>
    <div class="main__wrapper">

        <?php

        require 'blocks/main_slider.php';
        require 'blocks/popular.php';
        require 'blocks/offers.php';
        require 'blocks/order.php';
        require 'blocks/review.php';

        ?>

    </div>

<?php
require_once 'templates/footer.php';
?>