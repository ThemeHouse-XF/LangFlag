<?php

class ThemeHouse_LangFlag_Listener_TemplateCreate extends ThemeHouse_Listener_TemplateCreate
{

    protected function _getTemplates()
    {
        return array(
            'language_edit',
            'language_chooser'
        );
    } /* END _getTemplates */

    public static function templateCreate(&$templateName, array &$params, XenForo_Template_Abstract $template)
    {
        $templateCreate = new ThemeHouse_LangFlag_Listener_TemplateCreate($templateName, $params, $template);
        list ($templateName, $params) = $templateCreate->run();
    } /* END templateCreate */

    protected function _languageEdit()
    {
        $this->_preloadTemplate('th_language_edit_langflag');
    } /* END _languageEdit */

    protected function _languageChooser()
    {
        $this->_preloadTemplate('th_language_chooser_langflag');
    } /* END _languageChooser */
}