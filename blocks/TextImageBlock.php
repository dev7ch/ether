<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Text Image Block.
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3.
 */
class TextImageBlock extends PhpBlock
{
    /**
     * @var bool Choose whether a block can be cached trough the caching component. Be carefull with caching container blocks.
     */
    public $cacheEnabled = false;

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
        return 'Text Image Block';
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
                 ['var' => 'background', 'label' => 'Hintergrund Bild', 'type' => self::TYPE_IMAGEUPLOAD, 'options' => ['no_filter' => false]],
                 ['var' => 'textPosition', 'label' => 'Text Position', 'type' => self::TYPE_SELECT, 'options' => BlockHelper::selectArrayOption(
                     [
                         1 => 'Text links ausrichten',
                         2 => 'Text mittig ausrichten',
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
            'background' => BlockHelper::imageUpload($this->getVarValue('background'), false, true),
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param {{extras.background}}
     * @param {{vars.background}}
     * @param {{vars.textPosition}}
     * @param {{vars.title}}
     */
    public function admin()
    {
        return '<p>Text Image Block Admin View</p>';
    }
}
