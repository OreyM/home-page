<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="<?= $siteSettings->generalUrl; ?>path/to/image.jpg">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">

    <title><?= $siteSettings->siteTitle ?></title>

    <link rel="shortcut icon" href="<?= $siteSettings->generalUrl; ?>img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= $siteSettings->generalUrl; ?>img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $siteSettings->generalUrl; ?>img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $siteSettings->generalUrl; ?>img/favicon/apple-touch-icon-114x114.png">
    <!-- Lib CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="<?= $siteSettings->generalUrl; ?>libs/materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $siteSettings->generalUrl; ?>libs/OwlCarousel/dist/assets/owl.carousel.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?= $siteSettings->generalUrl; ?>libs/my-fonts/css/icons-style.css">
    <link rel="stylesheet" type="text/css" href="<?= $siteSettings->generalUrl; ?>css/main.min.css">
</head>
<body>

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

                <!-- SEARCH-->
                <ul class="right hide-on-med-and-down bro-desktop-search">
                    <a id="toggle-search" class="bro-icon-search" href="#!"></a>
                    <ul class="dropdown-button-search">
                        <div id="search" class="">
                            <div class="container">
                                <form id="search-form" method="post" action="<?php echo siteUrl('search'); ?>">
                                    <input class="form-control"
                                           type="text"
                                           placeholder="What to look for?"
                                           onkeyup="checkSearchKeywords();"
                                           name="keyword"
                                           title="Search"
                                           data-toggle="tooltip"
                                           id="id-search">
                                    <input type="submit"
                                           value="Search"
                                           name="search-item"
                                           disabled="disabled"
                                           id="search-item-next">
                                </form>
                            </div>
                        </div>
                    </ul>
                </ul>


                <!--                Menu in Mobile-->
                <ul class="side-nav bro-mobile-menu" id="mobile-demo">
                    <form class="form-search" method="post" action="<?php echo site_url('search'); ?>">
                        <div class="input-field">
                            <input id="id-search-mobile"
                                   class="search-mobile"
                                   type="search"
                                   placeholder="What to look for?"
                                   required
                                   onkeyup="checkSearchKeywords();"
                                   name="keyword"
                                   title="Search"
                                   data-toggle="tooltip">
                            <label class="label-icon" for="search">
                                <i class="material-icons">search</i>
                            </label>
                            <i class="material-icons">close</i>
                            <input type="submit"
                                   value="Search"
                                   name="search-item"
                                   disabled="disabled"
                                   id="search-item-mobile">
                        </div>
                    </form>

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
            </div>
        </div>
    </nav>
</header>

<section id="top-section">
    <div class="container">
        <div class="row">
            <div class="col m6 top-section-left hide-on-med-and-down">
                <div class="container">
                    <div class="row">
                        <div class="col m12">
                            <i class="small material-icons left">search</i>
                            <div class="dashed-border">
                                <a href="#!" title="<?php $homePage->topSection->title1 ?>">
                                    <span><?php $homePage->topSection->title1 ?></span>
                                </a>
                            </div>
                        </div>
                        <div class="col m12">
                            <i class="small material-icons left">thumb_up</i>
                            <div class="dashed-border">
                                <a href="#!" title="<?php $homePage->topSection->title2 ?>">
                                    <span><?php $homePage->topSection->title2 ?></span>
                                </a>
                            </div>
                        </div>
                        <div class="col m12">
                            <i class="small material-icons left">attach_money</i>
                            <div class="dashed-border">
                                <a href="#!" title="<?php $homePage->topSection->title3 ?>">
                                    <span><?php $homePage->topSection->title3 ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m6 s12 top-section-right">
                <div class="top-title">
                    <h1><?php $homePage->topSection->tagline ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Login Modal Window-->
<div id="login-modal" class="modal">
    <div class="modal-content">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 login-btn">
                    <a class="btn btn-large" href="https://www.facebook.com/v2.9/dialog/oauth?client_id=<?=$siteSettings->socialAcc->fbId?>&redirect_uri=<?=$siteSettings->socialAcc->fbUrl?>&response_type=code&scope=public_profile,email,user_location">
                        <span>Sign In</span> 
                        Facebook
                    </a>
                </div>
                <div class="col m12 login-btn">
                    <a class="btn btn-large" href="https://oauth.vk.com/authorize?client_id=<?=$siteSettings->socialAcc->vcId?>&display=page&redirect_uri=<?=$siteSettings->socialAcc->vcUrl?>&response_type=code">
                        <span>Sign In</span> 
                        VContacte
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Scripts-->
<script type="text/javascript" src="<?= $siteSettings->generalUrl; ?>libs/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?= $siteSettings->generalUrl; ?>libs/materialize/js/materialize.min.js"></script>
<script src="<?= $siteSettings->generalUrl; ?>libs/OwlCarousel/dist/owl.carousel.min.js"></script>
<script src="<?= $siteSettings->generalUrl; ?>js/common.js"></script>

</body>
</html>