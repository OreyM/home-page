<section id="home-news" class="home-news">

    <!--    Slider Title-->
    <div class="container">
        <div class="row">
            <div class="home-news-title">
                <h2>
                    <?=$siteSettings->homeNews ?>
                </h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="home-news-wrapper">
                <?php foreach ($newsPreviewData as $news): ?>
                    <div class="col m4 s12">
                        <div class="aricle-news">

                            <a class="img-wrap" href="<?= $siteSettings->generalUrl; ?>news/<?= $news->newsLink ?>"
                               title="<?= $news->newsTitle; ?>">
                                <img src="<?= $siteSettings->generalUrl; ?>images/news/<?= $news->smallImages ?>">
                            </a>

                            <div class="gradient"></div>

                            <div class="text-wrap">
                                <h3>
                                    <a href="<?= $siteSettings->generalUrl; ?>news/<?= $news->newsLink ?>"
                                       title="<?= $news->newsTitle; ?>"><?= $news->newsTitle; ?></a>
                                </h3>
                                <div class="text">
                                    <?= $news->newsDescription; ?>
                                </div>
                                <div class="border-line">
                                    <div class="news-data">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <span><?= $news->newsDate ?></span>
                                    </div>
                                    <div class="comments">
                                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                                        <span><?= $news->newsComments ?></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>