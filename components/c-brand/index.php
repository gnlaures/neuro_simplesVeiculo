<div class="c-brand <?php echo $cBrand["modifiers"] ?>">
    <?php if ($cBrand["style"] == "light") {?>
        <div class="c-brand__light">
            <a href="<?php echo $cBrand["href"] ?>" title="<?php echo $siteConfig['title']; ?>">
                <img src="media/img/brand_light.svg" alt="<?php echo $siteConfig['title']; ?>">
            </a>
        </div>
    <?php } else { ?>
        <div class="c-brand__dark">
            <a href="<?php echo $cBrand["href"] ?>" title="<?php echo $siteConfig['title']; ?>">
                <img src="media/img/brand_dark.svg" alt="<?php echo $siteConfig['title']; ?>">
            </a>
        </div>
    <?php } ?>
</div>