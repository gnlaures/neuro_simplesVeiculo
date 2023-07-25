<footer class="l-footer">
    <div class="u-container">
        <div class="l-footer__col --brand">
            <?php include('components/c-cardCompany/index.php'); ?>
            <div class="l-footer__col__group">
                <?php include('components/c-copyright/index.php'); ?>
                <?php include('components/c-devSignature/index.php'); ?>
            </div>
        </div>
        <div class="l-footer__col --links">
            <?php include('components/c-sitemap/index.php'); ?>
            <div class="c-newsletter">
                <div class="c-defaultContentStyle">
                    <h4>Newsletter</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit, sapien egestas bibendum dapibus, diam augue.</p>
                </div>
                <form action="#" class="c-form --justIptPlusBtn" id="form__newsletter">
                    <fieldset>
                        <div class="c-form__hero">
                            <div class="c-form__group u-fw100">
                                <div class="c-field --default --input">
                                    <div class="c-field__content">
                                        <input type="email" placeholder="Digite Seu E-mail" id="form__newsletter__email">
                                    </div>
                                </div>
                                <div class="c-field --default --btn">
                                    <div class="c-field__content">
                                        <button class="c-btn --primary --l">
                                            <div class="c-btn__hero">
                                                <div class="c-btn__caption">Cadastrar</div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</footer>