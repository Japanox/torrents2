<?php

namespace seu_nome_de_usuário\torrents\controller;

class main_controller
{
    public function __construct(\phpbb\template\template $template)
    {
        $this->template = $template;
    }

    public function index($id, $mode)
    {
        $this->template->set_filenames(array(
            'body' => 'torrents_body.html',
        ));

        $this->template->assign_vars(array(
            'PAGE_TITLE' => 'Página da extensão de Torrents',
            'SOME_VARIABLE' => 'Algum conteúdo',
        ));

        return $this->template->render('body');
    }
}
