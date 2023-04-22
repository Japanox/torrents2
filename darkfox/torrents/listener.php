<?php

/**
 * @package darkfox/torrents
 * Event listener for torrents extension
 */

namespace darkfox\torrents;

class listener
{
    /**
     * Assign events to listeners
     *
     * @param \phpbb\event\dispatcher $dispatcher Event dispatcher object
     * @return void
     * @access public
     */
    public static function listen(\phpbb\event\dispatcher $dispatcher)
    {
        $dispatcher->addListener('core.user_setup', array(__CLASS__, 'core_user_setup'));
    }
}
