<?php

class ThemeHouse_LangFlag_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_LangFlag' => array(
                'controller' => array(
                    'XenForo_ControllerAdmin_Language'
                ), /* END 'controller' */
                'datawriter' => array(
                    'XenForo_DataWriter_Language'
                ), /* END 'datawriter' */
            ), /* END 'ThemeHouse_LangFlag' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassModel($class, array &$extend)
    {
        $loadClassModel = new ThemeHouse_LangFlag_Listener_LoadClass($class, $extend, 'model');
        $extend = $loadClassModel->run();
    } /* END loadClassModel */

    public static function loadClassDataWriter($class, array &$extend)
    {
        $loadClassDataWriter = new ThemeHouse_LangFlag_Listener_LoadClass($class, $extend, 'datawriter');
        $extend = $loadClassDataWriter->run();
    } /* END loadClassDataWriter */
}