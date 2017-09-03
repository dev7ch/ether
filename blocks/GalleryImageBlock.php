<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Gallery Image Block.
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3.
 */
class GalleryImageBlock extends PhpBlock
{
    /**
     * @var bool Choose whether a block can be cached trough the caching component. Be carefull with caching container blocks.
     */
    public $cacheEnabled = true;

    /**
     * @var int The cache lifetime for this block in seconds (3600 = 1 hour), only affects when cacheEnabled is true
     */
    public $cacheExpiration = 3600;

    /**
     * {@inheritdoc}
     */
    public function blockGroup()
    {
        return ProjectGroup::class;
    }

    /**
     * {@inheritdoc}
     */
    public function name()
    {
        return 'Gallery Image Block';
    }

    /**
     * {@inheritdoc}
     */
    public function icon()
    {
        return 'extension'; // see the list of icons on: https://design.google.com/icons/
    }

    /**
     * {@inheritdoc}
     */
    public function config()
    {
        return [
            'vars' => [
                 ['var' => 'image', 'label' => 'Bild Bildrahmen', 'type' => self::TYPE_IMAGEUPLOAD, 'options' => ['no_filter' => false]],
                 ['var' => 'size_row', 'label' => 'Bildbreite', 'type' => self::TYPE_SELECT, 'options' => BlockHelper::selectArrayOption(
                     [
                         1  => 'Sehr klein',
                         2  => '2/10',
                         3  => '3/10',
                         4  => '4/10',
                         5  => '5/5 Mittel',
                         6  => '6/10',
                         7  => '7/10',
                         8  => '8/10',
                         9  => '9/10',
                         10 => 'Sehr Gross',
                     ]
                 )],
                 ['var' => 'size_image', 'label' => 'Variation der Bildgrösse', 'type' => self::TYPE_SELECT, 'options' => BlockHelper::selectArrayOption(
                     [
                         null => 'Reale Breite',
                         75   => '1/15 breiter',
                         5    => '1/50 breiter',
                         25   => '1/75 breiter',

                     ]
                 )],
                 ['var' => 'position', 'label' => 'Bildposition', 'type' => self::TYPE_SELECT, 'options' => BlockHelper::selectArrayOption(
                     [
                         'bottom' => 'Unten',
                         'top'    => 'Oben',
                         'center' => 'Mittig',
                         'right'  => 'Rechts',
                         'left'   => 'Links',

                     ]
                 )],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function extraVars()
    {
        return [
            'image'     => BlockHelper::imageUpload($this->getVarValue('image'), false, true),
            'thumbnail' => BlockHelper::imageUpload($this->getVarValue('image'), 'large-thumbnail', true),
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param {{extras.image}}
     * @param {{vars.image}}
     * @param {{vars.position}}
     * @param {{vars.size}}
     */
    public function admin()
    {
        return '<p>Gallery Image Block Admin View</p>';
    }
}
