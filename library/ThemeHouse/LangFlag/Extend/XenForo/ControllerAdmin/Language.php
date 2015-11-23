<?php

/**
 *
 * @see XenForo_ControllerAdmin_Language
 */
class ThemeHouse_LangFlag_Extend_XenForo_ControllerAdmin_Language extends XFCP_ThemeHouse_LangFlag_Extend_XenForo_ControllerAdmin_Language
{

    /**
     *
     * @see XenForo_ControllerAdmin_Language::actionSave()
     */
    public function actionSave()
    {
        $GLOBALS['ThemeHouse_LangFlag_Extend_XenForo_ControllerAdmin_Language'] = $this;
        return parent::actionSave();
    } /* END actionSave */
}