<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;
use luya\TagParser;

/**
 * Intro Block.
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3.
 */
class IntroBlock extends PhpBlock
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
        return 'Intro Block';
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
                 ['var' => 'image', 'label' => 'Bild', 'type' => self::TYPE_IMAGEUPLOAD, 'options' => ['no_filter' => false]],
            ],
            'cfgs' => [
                 ['var' => 'icon', 'label' => 'Icon', 'type' => self::TYPE_TEXT],
            ],
        ];
    }

    public function getText()
    {
        return TagParser::convertWithMarkdown($this->getVarValue('text'));
    }

    public function extraVars()
    {
        return [
            'text'  => $this->getText(),
            'image' => BlockHelper::imageUpload($this->getVarValue('image'), false, true),
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param {{cfgs.icon}}
     * @param {{vars.text}}
     * @param {{vars.title}}
     */
    public function admin()
    {
        return '<p>Intro Block Admin View</p>';
    }
}
