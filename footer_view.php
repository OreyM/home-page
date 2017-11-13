<footer>
    <div class="footer-wrap">
        <div class="container">
            <div class="row">
                <img class="foot-logo" src="<?= $siteSettings->generalUrl; ?>img/foo-logo.png" alt="Logo">
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="footer-nav">
                    <div class="for-desktop hide-on-med-and-down">

                        <?php if (empty($siteSettings->sessions->userName)): ?>
                            <a data-target="#modal-enter" class="footer-nav-link" data-toggle="modal" href="#"
                               title="Sign In">Sign In</a>
                        <?php else: ?>
                            <a class="footer-nav-link" href="<?= $siteSettings->generalUrl; ?>login"
                               title="User account <?= $siteSettings->sessions->userName; ?>"><?= $siteSettings->sessions->userName; ?></a>
                        <?php endif ?>
                        <span class="footer-separator">|</span>

                        <a class="footer-nav-link" href="<?= $siteSettings->generalUrl; ?>news" title="News">News</a>
                        <span class="footer-separator">|</span>

                        <a class="footer-nav-link" href="<?= $siteSettings->generalUrl; ?>games/allgames/" title="Games Xbox One">Games Xbox One</a>
                        <span class="footer-separator">|</span>

                        <a class="footer-nav-link" href="<?= $siteSettings->generalUrl; ?>games/alldiscount/" title="Xbox One Discount">Xbox One Discount</a>
                        <span class="footer-separator">|</span>

                        <a class="footer-nav-link" href="#!" title="Advertising Add">Advertising Add</a>
                    </div>

                    <!-- For mobile Footer -->
                    <div class="for-mobile hide-on-large-only">
                        <div class="col s12">
                            <?php if (empty($siteSettings->sessions->userName)): ?>
                            <a data-target="#modal-enter" class="footer-nav-link" data-toggle="modal" href="#"
                               title="Sign In">Sign In</a>
                        <?php else: ?>
                            <a class="footer-nav-link" href="<?= $siteSettings->generalUrl; ?>login"
                               title="User account <?= $siteSettings->sessions->userName; ?>"><?= $siteSettings->sessions->userName; ?></a>
                        <?php endif ?>
                        </div>

                        <div class="col s12">
                            <a class="footer-nav-link" href="<?= $siteSettings->generalUrl; ?>news" title="News">News</a>
                        </div>

                        <div class="col s12">
                            <a class="footer-nav-link" href="<?= $siteSettings->generalUrl; ?>games/allgames/" title="Games Xbox One">Games Xbox One</a>
                        </div>

                        <div class="col s12">
                            <a class="footer-nav-link" href="<?= $siteSettings->generalUrl; ?>games/alldiscount/" title="Xbox One Discount">Xbox One Discount</a>
                        </div>

                        <div class="col s12">
                            <a class="footer-nav-link" href="#!" title="Advertising Add">Advertising Add</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="footer-copyright">Copyright © 2017 broteam</div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <a class="to-top-link" href="#main-logotype">
                <img class="all-to-top" src="<?= $siteSettings->generalUrl; ?>/img/all-to-top-arrow.png" alt="To top">
            </a>
        </div>
    </div>
</footer>