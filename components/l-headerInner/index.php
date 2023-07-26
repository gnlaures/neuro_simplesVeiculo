<header class="l-headerInner <?php echo $lHeaderInner["modifiers"] ?>">
    <div class="l-headerInner__bg">
        <img src="media/shapeDividers/shape_8.svg">
    </div>
    <div class="l-headerInner__content">
        <div class="u-container">
            <?php $cBreadcrumb = array(
                array("caption" => "Home", "link" => "#"),
                array("caption" => "Institucional", "link" => "#"),
                array("caption" => "História", "link" => "#")
            );
            include('components/c-breadcrumb/index.php'); ?>
            <h1><?php echo $lHeaderInner["title"] ?></h1>
        </div>
    </div>
</header>