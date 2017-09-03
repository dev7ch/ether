<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Text Color Block.
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3.
 */
class TextColorBlock extends PhpBlock
{
    /**
     * @var bool Choose whether block is a layout/container/segmnet/section block or not, Container elements will be optically displayed
     *           in a different way for a better user experience. Container block will not display isDirty colorizing.
     */
    public $isContainer = false;

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
        return 'Text Color Block';
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
                 ['var' => 'layout', 'label' => 'Icons', 'type' => self::TYPE_SELECT, 'options' => BlockHelper::selectArrayOption(
                     [
                         1 => 'Icons anzeigen',
                         2 => 'Icons ausblenden',
                     ])],
            ],
            'cfgs' => [
                 ['var' => 'color', 'label' => 'Farbe', 'type' => self::TYPE_SELECT, 'options' => BlockHelper::selectArrayOption(
                     [
                         1 => 'Label for 1',
                         2 => 'Label for 1',
                         3 => 'Label for 1',
                         4 => 'Label for 1',
                     ]
                 )],
                 ['var' => 'icon_1', 'label' => 'Icon 1', 'type' => self::TYPE_TEXT],
                 ['var' => 'icon_2', 'label' => 'Icon 2', 'type' => self::TYPE_TEXT],
                 ['var' => 'icon_3', 'label' => 'Icon 3', 'type' => self::TYPE_TEXT],
                 ['var' => 'icon_4', 'label' => 'Icon 4', 'type' => self::TYPE_TEXT],
                 ['var' => 'icon_5', 'label' => 'Icon 5', 'type' => self::TYPE_TEXT],
                 ['var' => 'icon_6', 'label' => 'Icon 6', 'type' => self::TYPE_TEXT],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param {{cfgs.color}}
     * @param {{vars.layout}}
     * @param {{vars.text}}
     * @param {{vars.title}}
     */
    public function admin()
    {
        return
            '{% if vars.title is not empty %}'.
            '<hr /> <p style="text-align: right">Text mit Hinterungfarbe</p>'.
            '<div class="title">'.'<h2>{{vars.title}}</h2>'.'</div>'.
            '{% if vars.text is not empty %} <div class="right-text">'.'<p>{{vars.text}}</p>'.'</div>'.'{% endif %}'.

            '{% else %}'.
            ' Es wurde noch kein Titel eingegeben.'.
            '{% endif %}'.

            '{% if cfgs.icons %}'.
            '<div class="icons" style="text-align:left;">'.

            '</div>'.
            '{% endif %}';
    }
}
