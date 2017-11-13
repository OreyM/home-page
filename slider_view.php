<section id="slider" class="games-slider">
<?php foreach ($siteSettings->sliders as $slider): ?>

    <!--    Slider Title-->
    <div class="container">
        <div class="row">
            <div class="slider-title">
                <h2>
                    <?= $slider->title ?>
                </h2>
            </div>
        </div>
    </div>

    <!--   Slider-->
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme">
                <?php foreach ($slider->sliderData as $sliderData): ?>
                    <div class="item game-view" href="<?= $sliderData->gameLink ?>" target="_blank">

                        <a class="img-wrap" href="<?= b $siteSettings->generalUrl(); ?>games/description/<?= $sliderData->siteLink ?>">
                            <img src="<?= IMGFOLDER . $sliderData->gameID ?>.jpg"
                                 alt="<?= $sliderData->gameName ?> - <?= $sliderData->gameAlt ?>"
                                 title="<?= $sliderData->gameName ?> - <?= $sliderData->gameTitle ?>">
                        </a>

                        <a class="game-title" href="<?= $siteSettings->generalUrl; ?>games/description/<?= $sliderData->siteLink ?>">
                            <h4><?= $sliderData->gameName ?></h4>
                        </a>

                        <?php if ($sliderData->freeGame): ?>
                            <div class="free-game">
                                <span>FREE GAME</span>
                            </div>
                        <?php endif ?>

                        <div class="price">
                            <div class="min-price">
                                <span><?= $sliderData->gamePrice ?></span> <i>$</i>
                            </div>

                            <div class="content-info">
                                <div class="discount">
                                    <?php if ($sliderData->gameDiscount === 'G'): ?>
                                        <span style="background-color: #ffcc17; color: #937611; text-shadow: 0.5px 0.9px 0 #ffe176">GOLD</span>
                                    <?php endif; ?>
                                    <?php if ($sliderData->gameDiscount === 'A'): ?>
                                        <span style="background-color: #178fff; color: #083660; text-shadow: 0.5px 0.9px 0 #52a8f8">EA Access</span>
                                    <?php endif; ?>
                                    <?php if ($sliderData->gameDiscount === 'D'): ?>
                                        <span style="background-color: #f32f58; color: #fff; text-shadow: 0.5px 0.9px 0 #901831">Discount</span>
                                    <?php endif; ?>
                                </div>

                                <div class="country">
                                    <span><?= $sliderData->gameCountry ?></span>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

<?php endforeach; ?>
</section>