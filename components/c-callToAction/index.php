<ul class="c-callToAction  <?php echo $cCallToAction["modifiers"] ?>">
    <li>
        <a href="<?php echo $cCallToAction["link"] ?>" class="c-btn --primary --l <?php echo $cCallToAction["link_modifiers"] ?>">
            <div class="c-btn__hero">
                <div class="c-btn__caption"> <?php echo $cCallToAction["caption"] ?></div>
            </div>
        </a>
    </li>
    <li>
        <?php include('components/c-btnWhatsapp/index.php'); ?>
    </li>
</ul>