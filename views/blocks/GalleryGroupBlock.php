<?php
/**
 * View file for block: GalleryGroupBlock 
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3. 
 *
 * @param $this->cfgValue('width');
 * @param $this->placeholderValue('image');
 *
 * @var $this \luya\cms\base\PhpBlockView
 */
?>

<div class="group span-<?= $this->cfgValue('width') ? $this->cfgValue('width') : '3'; ?>">
    <?= $this->placeholderValue('image'); ?>
</div>
