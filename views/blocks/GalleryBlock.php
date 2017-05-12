<?php
/**
 * View file for block: GalleryBlock 
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3. 
 *
 * @param $this->cfgValue('color');
 * @param $this->placeholderValue('item');
 * @param $this->varValue('text');
 * @param $this->varValue('title');
 *
 * @var $this \luya\cms\base\PhpBlockView
 */
?>

<section class="panel">
    <div class="intro color2">
        <h2 class="major"><?= $this->varValue('title'); ?></h2>
        <?= $this->varValue('text'); ?>
    </div>
    <div class="gallery">
        <?= $this->placeholderValue('item') ?>
    </div>
</section>
