<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Contact Section Block.
 *
 * File has been created with `block/create` command on LUYA version 1.0.0-RC3.
 */
class ContactSectionBlock extends PhpBlock
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
        return 'Contact Section Block';
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
                ['var' => 'icons', 'label' => 'Icons und Links', 'type' => 'zaa-multiple-inputs', 'options' => [
                    [
                        'type'        => self::TYPE_TEXT,
                        'var'         => 'icon',
                        'label'       => 'Fontawesome Icon Indicator',
                        'Placeholder' => 'z.B. rocket',
                    ],
                    [
                        'type'        => self::TYPE_TEXT,
                        'var'         => 'link',
                        'label'       => 'link',
                        'placeholder' => 'Link URL einfügen, z.B. https://youtube.com',
                    ],
                    [
                        'type'  => self::TYPE_TEXT,
                        'var'   => 'text',
                        'label' => 'Text',
                    ],
                ]],

                ['var' => 'formwidth', 'label' => 'Formular Breite', 'type' => self::TYPE_SELECT, 'options' => BlockHelper::selectArrayOption([1 => 'Label for 1'])],
            ],
            'placeholders' => [
                 ['var' => 'form', 'label' => 'Kontakt Formular Modul'],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param {{cfgs.formwidth}}
     * @param {{cfgs.icons}}
     * @param {{placeholders.form}}
     * @param {{vars.text}}
     * @param {{vars.title}}
     */
    public function admin()
    {
        return
            '{% if vars.title %}'.
            '<div class="title">'.'{{vars.title}}'.'</div>'.
            '{% if vars.text is not empty %} <div class="right-text">'.'<p>{{vars.text}}</p>'.'</div>'.'{% endif %}'.

            '{% else %}'.
            ' Es wurde noch kein Titel eingegeben.'.
            '{% endif %}'.

            '{% if cfgs.icons %}'.
            '<div class="icons" style="text-align:left;">'.

            '{%for icon in icons%}'.
            '<b>Fontawesome Icon:</b>{icon.icon%}'.
            '{%endfor%}'.

            '</div>'.
            '{% endif %}';
    }
}
