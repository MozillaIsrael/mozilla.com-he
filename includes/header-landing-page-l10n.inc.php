<?php

        // We are right-to-left
        $textdir = 'rtl';

        // We are the landing page
        $landing_page = true;

        // Include RTL support helper
        require_once "{$config['file_root']}/{$lang}/includes/rtl-support.php";

        // Include the global header.  All locales will include this.
        require "{$config['file_root']}/includes/header-landing-page-l10n.inc.php";

        // Built dynamically in the global header now, to provide consistency across
        // pages.
        echo $dynamic_header;

        unset($dynamic_header);

        unset($dynamic_top_menu);

?>
