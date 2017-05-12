<?php
/**
 * View file for block: IntroBlock
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3.
 *
 * @param $this->cfgValue('icon');
 * @param $this->varValue('text');
 * @param $this->varValue('title');
 *
 * @var $this \luya\cms\base\PhpBlockView
 */
?>

<section class="panel banner right">
    <div class="content color0 span-3-75">
        <h1 class="major"><?= $this->varValue('title') ?></h1>
        <?= $this->extraValue('text') ?>
        <ul class="actions">
          <li><a href="#first" class="button special color1 circle icon fa-angle-right">Next</a></li>
        </ul>
    </div>
    <div class="image filtered span-1-75" data-position="25% 25%">
        <img src="<?= $this->extraValue('image') ? $this->extraValue('image')->source : 'https://unsplash.it/400/600?image=901' ?>" alt="" />
    </div>
</section>
