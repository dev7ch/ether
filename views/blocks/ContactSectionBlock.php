<?php
/**
 * View file for block: ContactSectionBlock 
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3. 
 *
 * @param $this->cfgValue('formwidth');
 * @param $this->cfgValue('icons');
 * @param $this->placeholderValue('form');
 * @param $this->varValue('text');
 * @param $this->varValue('title');
 *
 * @var $this \luya\cms\base\PhpBlockView
 */
?>

<!-- Panel -->
<section id="contact" class="panel color4-alt">
    <div class="intro color4">
        <h2 class="major"><?= $this->varValue('title'); ?></h2>
        <?= $this->varValue('text'); ?>
    </div>
    <div class="inner columns divided">
        <div class="span-3-25">
            <?= $this->placeholderValue('form'); ?>
        </div>
        <div class="span-1-5">
            <ul class="contact-icons color1">
                <? foreach ($this->cfgValue('icons') as $icon ): ?>

                   <? if (empty($icon)) {

                    $icon = null;

                    } ?>

                    <li class="icon fa-<?= $icon['icon'] ? $icon['icon'] : 'twitter' ?>"><a href="<?= $icon['link'] ? $icon['link'] : '#' ?>" target="_blank"><?= $icon['text'] ? $icon['text'] : '@untitled-tld' ?></a></li>



                <? endforeach; ?>
                <li class="icon fa-twitter"><a href="#">@untitled-tld</a></li>
                <li class="icon fa-facebook"><a href="#">facebook.com/untitled</a></li>
                <li class="icon fa-snapchat-ghost"><a href="#">@untitled-tld</a></li>
                <li class="icon fa-instagram"><a href="#">@untitled-tld</a></li>
                <li class="icon fa-medium"><a href="#">medium.com/untitled</a></li>
            </ul>
        </div>
    </div>
</section>

<!-- Panel -->
