<?php
/**
 * View file for block: GalleryImageBlock 
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3. 
 *
 * @param $this->extraValue('image');
 * @param $this->varValue('image');
 * @param $this->varValue('position');
 * @param $this->varValue('size');
 *
 * @var $this \luya\cms\base\PhpBlockView
 */


$first = 'https://unsplash.it/600/500/?random';
$second = 'https://unsplash.it/630/400/?random';
$third = 'https://unsplash.it/600/300/?random';
$fourth = 'https://unsplash.it/560/710/?random';
$fifth = 'https://unsplash.it/480/620/?random';

$a = array($first, $second, $third, $fourth, $fifth);

for ($i=0; $i<5; $i++) {
    $item = $a;
}



$thumbnail = $this->extraValue('thumbnail') ? $this->extraValue('thumbnail')->source : $item[array_rand($item)];
$image = $this->extraValue('image') ? $this->extraValue('image')->source : 'images/gallery/fulls/04.jpg';

?>


<a href="<?= $image ?>" class="image filtered span-<?= $this->varValue('size_row') ? $this->varValue('size_row') : '3' ?><?= $this->varValue('size_image') ? '-'. $this->varValue('size_image') : '' ?>" data-position="<?= $this->varValue('position') ? $this->varValue('position') : 'center' ?>"><img src="<?= $thumbnail ?>" alt="" /></a>

