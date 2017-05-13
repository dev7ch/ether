<?php

use app\assets\ResourcesAsset;

ResourcesAsset::register($this);

$this->beginPage();
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->composition->language; ?>">
        <head>
            <title><?= $this->title; ?> &mdash; Welcome</title>
            <!-- <link rel="canonical" href="https://yourdomain.com" itemprop="url"> -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="author" content="Silvan Hahn">
            <meta name="author" content="Etherium is a LUYA CMS Kickstart Installation to boost your project with design performance and scalable flexibility.">
            <meta name="theme-color" content="#FF9058">
            <link rel="apple-touch-icon" sizes="180x180" href="<?= $this->publicHtml ?>/favicon/apple-touch-icon.png">
            <link rel="icon" type="image/png" href="<?= $this->publicHtml ?>/favicon/favicon-32x32.png?2016" sizes="32x32">
            <link rel="icon" type="image/png" href="<?= $this->publicHtml ?>/favicon/favicon-16x16.png?2016" sizes="16x16">
            <link rel="manifest" href="<?= $this->publicHtml ?>/favicon/manifest.json">
            <link rel="mask-icon" href="<?= $this->publicHtml ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
            <?php $this->head() ?>
        </head>
    <body>
    <?php $this->beginBody() ?>

      		<!-- Page Wrapper -->
      			<div id="page-wrapper">
                    <div class="logo">
                        <a class="logo__link" href="<?= $this->publicHtml ?>">
                            <img class="logo__image" src="<?= $this->publicHtml ?>/images/luya_logo_flat_icon.png" />
                        </a>
                    </div>

      				<!-- Wrapper -->
      					<div id="wrapper">

                        <?= $content ?>

      						<!-- Copyright -->
      							<div class="copyright">&copy; Untitled. Designed by <a href="https://html5up.net">HTML5 UP</a> and powered by <a href="https://luya.io">LUYA CMS</a> .</div>

      					</div>

      			</div>


    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
