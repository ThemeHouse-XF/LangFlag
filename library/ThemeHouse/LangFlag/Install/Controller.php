<?php

class ThemeHouse_LangFlag_Install_Controller extends ThemeHouse_Install
{

    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/lang-flag.2044/';

    protected function _getTableChanges()
    {
        return array(
            'xf_language' => array(
                'flag_url' => 'VARCHAR(255) DEFAULT \'\''
            )
        );
    } /* END _getTableChanges */
}