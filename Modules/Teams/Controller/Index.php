<?php

class Teams_Controller_Index extends Public_Controller_Index
{

    public function Index()
    {
        $this->setLayout("template2");
        $this->setView("note");
        $url = get('REQUEST_URI');
        $url = explode("/", $url);
        $url = $url[count($url) - 1];

        $team = Teams_Model_Team::getInstance()->get($url, $this->lan->LanId);

        $skills = json_decode(json_encode($team->TeamInfo), true);

        $this->assign("team", $team);
        $this->assign("idTeam", $url);
        $this->assign("skills", $skills);

    }

    public function Lista()
    {
        $this->setLayout("page_team");
        $this->setView("note");
        $url = get('REQUEST_URI');
        $url = explode("/", $url);
        $url = $url[count($url) - 1];

        $team = Teams_Model_Team::getInstance()->getListTeamCargo($this->lan->LanId, $url);

        $this->assign("list", $team);
        $this->assign("idTeam", $url);

    }

}
