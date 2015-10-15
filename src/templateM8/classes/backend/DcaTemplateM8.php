<?php
/**
 *
 *          _           _                       _
 *         | |         | |                     | |
 *      ___| | __ _ ___| |____      _____  _ __| | _____
 *     / __| |/ _` / __| '_ \ \ /\ / / _ \| '__| |/ / __|
 *     \__ \ | (_| \__ \ | | \ V  V / (_) | |  |   <\__ \
 *     |___/_|\__,_|___/_| |_|\_/\_/ \___/|_|  |_|\_\___/
 *                                        web development
 *
 *     http://www.slash-works.de </> hallo@slash-works.de
 *
 *
 * @author      jrgregory <joe@slash-works.de>
 * @since       15.10.2015
 * @package     templateM8
 *
 */

namespace Slashworks\TemplateM8\Classes\Backend;

class DcaTemplateM8 extends \Backend
{

    /**
     * get the templatem8 Templates
     * @param \DataContainer $dc
     * @return array
     */

    public function getTemplates(\DataContainer $dc)
    {

        $group = 'm8_ce_'.$dc->activeRecord->type;
        $tplGroup = $this->getTemplateGroup($group);
        $returnArr = array();

        $returnArr['default'] = $GLOBALS['TL_LANG']['templateMate']['standard'];

        foreach($tplGroup as $key=>$val)
        {
            $returnArr[$key] = ($GLOBALS['TL_LANG']['templateMate'][$key]) ?  $GLOBALS['TL_LANG']['templateMate'][$key] : $val;
        }

        return $returnArr;
    }

    /**
     * Reset is need because of problems with onsubmits in the backend
     * @param \DataContainer $dc
     */

    public function resetTemplate(\DataContainer $dc)
    {

        $oElementRowById = \ContentModel::findById($dc->id);

        if($oElementRowById->type != \Input::post('type') && \Input::post('type') != '') {
            \Input::setPost('templateM8', '');

            \Database::getInstance()
                ->prepare("UPDATE tl_content SET templateM8 = 'default' WHERE id = ?")
                ->execute($dc->id);
        }

    }

}