# Localized static menu plugin

This plugin provides a component to include localized static menus. This way you can have different menus for different locales and thus different page structures for each language.


## Managing localized menus

To have localized menus in your site you need to create one menu per language that requires a different menu structure.
The menu codes must have the corresponding language code as a suffix: e.g. `main_en` and `main_ru`.
If no menu with a specifique code e.g. `main_it` is found the default locale will be used: e.g with `en` as the default locale `main_en`. Thus you at least need to create the menu for the default locale.

To use the localized static menu, simply insert the **Localized static Menu Component** in the page layout, cms page or partial.
