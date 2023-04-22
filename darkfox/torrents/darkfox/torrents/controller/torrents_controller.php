<?php

/**
* @package darkfox/torrents
* Controller for torrents page
*/

namespace darkfox\torrents\controller;

class torrents_controller
{
    protected $user;
    protected $request;
    protected $config;
    protected $template;
    protected $db;

    public function __construct(\phpbb\user $user, \phpbb\request\request_interface $request, \phpbb\config\config $config, \phpbb\template\template $template, \phpbb\db\driver\driver_interface $db)
    {
        $this->user = $user;
        $this->request = $request;
        $this->config = $config;
        $this->template = $template;
        $this->db = $db;
    }

    public function index()
    {
        // Display a list of torrents
        $sql = 'SELECT * FROM ' . $this->db->sql_escape($this->config['table_prefix']) . 'torrents';
        $result = $this->db->sql_query($sql);
        $torrents = array();
        while ($row = $this->db->sql_fetchrow($result))
        {
            $torrents[] = $row;
        }
        $this->db->sql_freeresult($result);
        $this->template->assign_vars(array(
            'TORRENTS' => $torrents,
        ));
        return $this->template->render('torrents.html');
    }
}
