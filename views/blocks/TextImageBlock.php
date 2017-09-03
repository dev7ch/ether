<?php
/**
 * View file for block: TextImageBlock.
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3.
 *
 * @param $this->extraValue('background');
 * @param $this->varValue('background');
 * @param $this->varValue('textPosition');
 * @param $this->varValue('title');
 *
 * @var $this \luya\cms\base\PhpBlockView
 */
?>

<?php if ($this->varValue('textPosition') != 1): ?>
    <section class="panel spotlight medium right" id="first">
        <div class="content span-7">
            <h2 class="major"><?= $this->varValue('title') ?></h2>
            <?= $this->varValue('text') ?>
        </div>
        <div class="image filtered tinted" data-position="top left">
            <img src="<?= $this->extraValue('background') ? $this->extraValue('background')->source : 'https://unsplash.it/1200/800?image=977' ?>" alt="" />
        </div>
    </section>
<?php else: ?>
    <section class="panel spotlight large left">
        <div class="content span-5">
            <h2 class="major"><?= $this->varValue('title') ?></h2>
            <?= $this->varValue('text') ?>
        </div>
        <div class="image filtered tinted" data-position="top right">
            <img src="<?= $this->extraValue('background') ? $this->extraValue('background')->source : 'https://unsplash.it/1200/800?image=901' ?>" alt="" />

        </div>
    </section>

<?php endif ?>
