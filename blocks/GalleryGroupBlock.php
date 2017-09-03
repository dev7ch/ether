<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Gallery Group Block.
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3.
 */
class GalleryGroupBlock extends PhpBlock
{
    /**
     * @var bool Choose whether block is a layout/container/segmnet/section block or not, Container elements will be optically displayed
     *           in a different way for a better user experience. Container block will not display isDirty colorizing.
     */
    public $isContainer = true;

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
        return 'Gallery Group Block';
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
            'cfgs' => [
                 ['var' => 'width', 'label' => 'Gruppen Breite', 'type' => self::TYPE_SELECT, 'options' => BlockHelper::selectArrayOption(
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

                     ]),
                 ],
            ],
            'placeholders' => [
                 ['var' => 'image', 'label' => 'Bildgruppe hier erstellen'],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param {{cfgs.width}}
     * @param {{placeholders.image}}
     */
    public function admin()
    {
        return '<p>Gallery Group Block Admin View</p>';
    }
}
