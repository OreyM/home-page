<section id="advertising-section" class="hide-on-med-and-down">
    <div class="container">
        <div class="row">
            <div class="col m12">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php foreach ($homePage->advertising as $advertising): ?>
                    <div>
                        <?php $advertising->banner ?>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
</section>