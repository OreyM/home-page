<header>
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <a href="<?= $siteSettings->generalUrl; ?>" class="brand-logo">Logo</a>

                <!-- Button for mobile view -->
                <a href="#!" data-activates="mobile-demo" class="button-collapse">
                    <i class="material-icons">menu</i>
                </a>

                <!-- Menu in Desktop-->
                <ul class="left hide-on-med-and-down bro-desktop-menu">

                    <li class="<?php if ($homePage->menu->activeMenu === 'home') echo 'active'; ?>">
                        <a href="<?= $siteSettings->generalUrl; ?>">
                            <i class="bro-icon-home small material-icons left"></i>
                            Home
                        </a>
                    </li>

                    <li class="<?php if ($homePage->menu->activeMenu === 'news') echo 'active'; ?>">
                        <a href="<?= $siteSettings->generalUrl . $siteSettings->newsPage; ?>">
                            <i class="bro-icon-notepad small material-icons left"></i>
                            News
                        </a>
                    </li>

                    <li class="<?php if ($homePage->menu->activeMenu === 'article') echo 'active'; ?>">
                        <a class="dropdown-button" href="#!" data-activates="dropdown-instruction">
                            <i class="bro-icon-document small material-icons left"></i>
                            Blogs
                        </a>
                        <ul id="dropdown-instruction" class="dropdown-content">
                        <?php foreach ($homePage->articles->articlesItems as $article): ?>
                            <li>
                                <a href="<?= $siteSettings->generalUrl . $article->url; ?>"><?php $article->title ?></a>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </li>

                    <li class="<?php if ($homePage->menu->activeMenu === 'xo') echo 'active'; ?>">
                        <a class="dropdown-button" href="#!" data-activates="dropdown-games">
                            <i class="bro-icon-gamepad small material-icons left"></i>
                            Games Xbox One
                        </a>
                        <ul id="dropdown-games" class="dropdown-content">
                        <?php foreach ($homePage->games->xoGames as $games): ?>
                            <li>
                                <a href="<?= $siteSettings->generalUrl . $games->url; ?>"><?php $games->title ?></a></li>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </li>

                    <li class="<?php if ($homePage->menu->activeMenu === 'account') echo 'active'; ?>">
                        <a class="dropdown-button" href="#!" data-activates="dropdown-account">
                            <i class="bro-icon-user small material-icons left"></i>
                            My Account
                        </a>
                        <?php if (empty($siteSettings->sessions->userName)): ?>
                            <ul id="dropdown-account" class="dropdown-content">
                                <li>
                                    <a class="waves-effect waves-light modal-trigger" href="#login-modal">Sign In</a>
                                </li>
                            </ul>
                        <?php else: ?>
                            <ul id="dropdown-account" class="dropdown-content">
                                <li>
                                    <a href="<?= $siteSettings->generalUrl; ?>login">
                                        <?= $siteSettings->sessions->userName; ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $siteSettings->generalUrl; ?>login/logout">Sign Out</a>
                                </li>
                            </ul>
                        <?php endif ?>
                    </li>
                </ul>

