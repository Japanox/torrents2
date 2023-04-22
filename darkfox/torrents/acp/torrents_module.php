<?php

/**
* @package darkfox/torrents
* Language file for ACP module
*/

namespace darkfox\torrents\acp;

class torrents_module
{
    var $u_action;
    var $tpl_name;

    public function main($id, $mode)
    {
        global $user, $template;

        $this->tpl_name = 'acp_torrents';
        $template->set_filenames(array(
            'body' => $this->tpl_name.'.html')
        );
    }
}
