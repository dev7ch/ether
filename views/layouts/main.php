<?php

use app\assets\ResourcesAsset;

ResourcesAsset::register($this);

$this->beginPage();
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->composition->language; ?>">
    <head>
        <title><?= $this->title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="author" content="luya.io">
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

      		<!-- Page Wrapper -->
      			<div id="page-wrapper">

      				<!-- Wrapper -->
      					<div id="wrapper">

                    <?= $content ?>

      						<!-- Copyright -->
      							<div class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</div>

      					</div>

      			</div>


    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
