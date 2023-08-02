<div class="c-cardTestmonials <?php echo $cCardTestmonials["modifiers"] ?>">
    <h4>Julia de Aguiar Faras</h4>
    <p>Secretária Universal Veículos</p>

    <?php if ($cCardTestmonials["modifiers"] !== '--text') {
        $cCardVideo = array('modifiers' => '');
        include('components/c-cardVideo/index.php');
    } ?>


        <?php if ($cCardTestmonials["modifiers"] == '--text'): ?>
            <div class="c-defaultContentStyle">
                    <blockquote>
                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur illum ipsum labore maxime molestias perspiciatis quaerat quasi, rerum ullam? Cumque provident reiciendis sunt!"
                    </blockquote>
            </div>
        <?php endif; ?>
</div>

