<?php

class ThemeHouse_LangFlag_Listener_TemplatePostRender extends ThemeHouse_Listener_TemplatePostRender
{

    protected function _getTemplates()
    {
        return array(
            'language_edit',
            'language_chooser'
        );
    } /* END _getTemplates */

    public static function templatePostRender($templateName, &$content, array &$containerData, 
        XenForo_Template_Abstract $template)
    {
        $templatePostRender = new ThemeHouse_LangFlag_Listener_TemplatePostRender($templateName, $content, $containerData,
            $template);
        list ($content, $containerData) = $templatePostRender->run();
    } /* END templatePostRender */

    protected function _languageEdit()
    {
        $phrase = new XenForo_Phrase('time_format');
        $pattern = '#<fieldset>\s*<dl class="ctrlUnit">\s*<dt>' . $phrase .
             ':</dt>\s*<dd>.*</dd>\s*</dl>\s*</fieldset>#Us';
        $replacement = '<!-- th_langflag -->';
        $this->_contents = preg_replace($pattern, '$0' . $replacement, $this->_contents);
        $this->_replaceWithTemplateAtCodeSnippet($replacement, 'th_language_edit_langflag');
    } /* END _languageEdit */

    protected function _languageChooser()
    {
        $viewParams = $this->_fetchViewParams();
        $languages = $viewParams['languages'];
        foreach ($languages as $language) {
            $pattern = '#(<li>\s*<a href=".*">)(' . preg_quote($language['title']) . '</a>\s*</li>)#Us';
            $replacement = '<!-- th_langflag -->';
            $this->_contents = preg_replace($pattern, '$1' . $replacement . '$2', $this->_contents);
            $viewParams['language'] = $language;
            $this->_replaceWithTemplateAtCodeSnippet($replacement, 'th_language_chooser_langflag', $viewParams);
        }
    } /* END _languageChooser */
}