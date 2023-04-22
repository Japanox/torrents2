<?php

/**
 * @package darkfox/torrents
 * Event listener for torrents extension
 */

namespace darkfox\torrents;

class events
{
    /**
     * Listen to core.user_setup event
     *
     * @param \phpbb\event\data $event The event object
     * @return void
     * @access public
     */
    public function core_user_setup($event)
    {
        global $user;

        // Add the torrents permission to the user object
        $user->add_lang_ext('darkfox/torrents', 'acp');
        $user->add_permission('u_darkfox_torrents', true);
    }
}
