<?php

/**
* @package darkfox/torrents
* Main entry point for extension
*/

namespace darkfox\torrents;

class ext extends \phpbb\extension\base
{
    public function enable_step($old_state)
    {
        // Enable SQL schema changes
        $this->schema()->enable(array(
            'phpbb_torrents'
        ));
    }

    public function disable_step($old_state)
    {
        // Disable SQL schema changes
        $this->schema()->disable(array(
            'phpbb_torrents'
        ));
    }

    public function update_step($old_version)
    {
        // No update steps yet
    }

    public function install_step($install_state)
    {
        // Install SQL schema changes
        $this->schema()->create(array(
            'phpbb_torrents' => array(
                'COLUMNS' => array(
                    'torrent_id'    => array('UINT', null, 'auto_increment'),
                    'torrent_name'  => array('VCHAR', ''),
                    'torrent_size'  => array('UINT', 0),
                    'torrent_hash'  => array('VCHAR', ''),
                    'torrent_file'  => array('VCHAR', ''),
                    'torrent_added' => array('TIMESTAMP', 0),
                ),
                'PRIMARY_KEY' => 'torrent_id',
            ),
        ));
    }

    public function uninstall_step($old_state)
    {
        // Uninstall SQL schema changes
        $this->schema()->drop(array(
            'phpbb_torrents'
        ));
    }
}
