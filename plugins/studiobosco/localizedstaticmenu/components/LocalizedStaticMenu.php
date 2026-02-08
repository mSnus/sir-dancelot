<?php namespace StudioBosco\LocalizedStaticMenu\Components;

use RainLab\Pages\Components\StaticMenu as StaticMenuBase;
use RainLab\Pages\Classes\Menu as PagesMenu;
use RainLab\Translate\Models\Locale as LocaleModel;
use RainLab\Translate\Classes\Translator;
use Cms\Classes\Theme;

class LocalizedStaticMenu extends StaticMenuBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'studiobosco.localizedstaticmenu::lang.component.localized_static_menu_name',
            'description' => 'studiobosco.localizedstaticmenu::lang.component.localized_static_menu_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'codePrefix' => [
                'title'       => 'studiobosco.localizedstaticmenu::lang.component.localized_static_menu_code_prefix_name',
                'description' => 'studiobosco.localizedstaticmenu::lang.component.localized_static_menu_code_prefix_description',
                'type'        => 'text',
                'required'    => true,
            ],
        ];
    }

    public function onRun()
    {
        $activeLocale = Translator::instance()->getLocale();
        $defaultLocale = LocaleModel::getDefault()->code;
        $theme = Theme::getEditTheme();
        $menus = PagesMenu::listInTheme($theme, true);
        $codePrefix = $this->property('codePrefix');
        $code = null;
        $_code = $codePrefix . $activeLocale;
        $fallbackCode = $this->property('codePrefix') . $defaultLocale;
        
        foreach ($menus as $menu) {
            if ($menu->code === $_code) {
                $code = $_code;
                break;
            }
        }

        $this->setProperty('code', $code ?? $fallbackCode);
        return parent::onRun();
    }
}
