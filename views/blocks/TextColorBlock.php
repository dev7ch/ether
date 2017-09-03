<?php
/**
 * View file for block: TextColorBlock.
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3.
 *
 * @param $this->cfgValue('color');
 * @param $this->varValue('layout');
 * @param $this->varValue('text');
 * @param $this->varValue('title');
 *
 * @var $this \luya\cms\base\PhpBlockView
 */
?>
<?php if ($this->varValue('layout') != 2): ?>
    <section class="panel color1">
          <div class="intro joined">
              <h2 class="major"><?= $this->varValue('title'); ?></h2>
              <?= $this->varValue('text'); ?>
          </div>
          <div class="inner">
              <ul class="grid-icons three connected">
                  <li><span class="icon fa-<?= $this->cfgValue('icon_1') ? $this->cfgValue('icon_1') : 'diamond' ?>"><span class="label">Lorem</span></span></li>
                  <li><span class="icon fa-<?= $this->cfgValue('icon_2') ? $this->cfgValue('icon_2') : 'camera-retro' ?>"><span class="label">Ipsum</span></span></li>
                  <li><span class="icon fa-<?= $this->cfgValue('icon_3') ? $this->cfgValue('icon_3') : 'cog' ?>"><span class="label">Dolor</span></span></li>
                  <li><span class="icon fa-<?= $this->cfgValue('icon_4') ? $this->cfgValue('icon_4') : 'paper-plane' ?>"><span class="label">Sit</span></span></li>
                  <li><span class="icon fa-<?= $this->cfgValue('icon_5') ? $this->cfgValue('icon_5') : 'bar-chart' ?>"><span class="label">Amet</span></span></li>
                  <li><span class="icon fa-<?= $this->cfgValue('icon_6') ? $this->cfgValue('icon_6') : 'code' ?>"><span class="label">Nullam</span></span></li>
              </ul>
          </div>
    </section>
<?php else: ?>
    <section class="panel">
        <div class="intro color2">
            <h2 class="major"><?= $this->varValue('title'); ?></h2>
            <?= $this->varValue('text'); ?>
        </div>
    </section>
<?php endif; ?>
