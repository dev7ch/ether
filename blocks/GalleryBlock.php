<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;

/**
 * Gallery Block.
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3.
 */
class GalleryBlock extends PhpBlock
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
        return 'Gallery Block';
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
                 ['var' => 'title', 'label' => 'Titel', 'type' => self::TYPE_TEXT],
                 ['var' => 'text', 'label' => 'Text', 'type' => self::TYPE_TEXTAREA],
            ],
            'cfgs' => [
                 ['var' => 'color', 'label' => 'Farbe', 'type' => self::TYPE_TEXT],
            ],
            'placeholders' => [
                 ['var' => 'item', 'label' => 'Gallerie Inhalt'],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param {{cfgs.color}}
     * @param {{placeholders.item}}
     * @param {{vars.text}}
     * @param {{vars.title}}
     */
    public function admin()
    {
        return '<p>Gallery Block Admin View</p>';
    }
}
