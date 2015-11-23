<?php

/**
 *
 * @see XenForo_DataWriter_Language
 */
class ThemeHouse_LangFlag_Extend_XenForo_DataWriter_Language extends XFCP_ThemeHouse_LangFlag_Extend_XenForo_DataWriter_Language
{

    /**
     *
     * @see XenForo_DataWriter_Language::_getFields()
     */
    protected function _getFields()
    {
        $fields = parent::_getFields();
        $fields['xf_language']['flag_url'] = array(
            'type' => self::TYPE_STRING,
            'default' => '',
            'maxLength' => 255
        );
        return $fields;
    } /* END _getFields */

    /**
     *
     * @see XenForo_DataWriter_Language::_preSave()
     */
    protected function _preSave()
    {
        parent::_preSave();
        if (isset($GLOBALS['ThemeHouse_LangFlag_Extend_XenForo_ControllerAdmin_Language'])) {
            /* @var $input XenForo_Input */
            $input = $GLOBALS['ThemeHouse_LangFlag_Extend_XenForo_ControllerAdmin_Language']->getInput();
            $flagUrl = $input->filterSingle('flag_url', XenForo_Input::STRING);
            $this->set('flag_url', $flagUrl);
        }
    } /* END _preSave */
}