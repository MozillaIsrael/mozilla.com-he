<?php

$dynamic_top_menu = <<<DYNAMIC_TOP_MENU

        <!-- start #nav-main -->
        <div id="nav-main">
            <h2>{$GLOBALS['__l10n_moz']['Navigation']}</h2>

            <ul>
                <li id="menu_press"><a href="/press/">{$GLOBALS['__l10n_moz']['Press area']}</a></li>
                <li id="menu_aboutus"><a href="/about/">{$GLOBALS['__l10n_moz']['About']}</a></li>
                <li id="menu_store"><a href="http://store.mozilla-europe.org/{$lang}/">{$GLOBALS['__l10n_moz']['Store']}</a></li>
                <li id="menu_contribute"><a href="/contribute/">{$GLOBALS['__l10n_moz']['Donate']}</a></li>
                <li id="menu_support"><a href="/support/">{$GLOBALS['__l10n_moz']['Support']}</a></li>
                <li id="menu_products"><a href="/products/">{$GLOBALS['__l10n_moz']['Products']}</a></li>
            </ul>
        </div>
        <!-- end #nav-main -->

DYNAMIC_TOP_MENU;

        $textdir = 'rtl';

        // Include the global header.  All locales will include this.
        require "{$config['file_root']}/includes/header.inc.php";

        // Built dynamically in the global header now, to provide consistency across
        // pages.
        echo $dynamic_header;

        unset($dynamic_header);

        unset($dynamic_top_menu);

?>
