<?php

/**
* @package darkfox/torrents
*
*/

namespace darkfox\torrents\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            'core.user_setup' => 'load_language',
        );
    }

    public function load_language()
    {
        global $user, $phpbb_container, $phpEx;

        $language = $user->lang;
        $template = $phpbb_container->get('template');

        // Include language files
        $language->add_lang('common', 'darkfox/torrents');
        $template->assign_vars(array(
            'U_TORRENTS'    => append_sid("{$phpbb_root_path}torrents.$phpEx"),
        ));
    }
}
