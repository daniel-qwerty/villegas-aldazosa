<?php

class Events_Controller_Index extends Public_Controller_Index
{

    public function Index()
    {
        $this->setLayout("blank");
        $this->setView("noticia");
        $url = get('REQUEST_URI');
        $url = explode("/", $url);
        $url = $url[count($url) - 1];

        $category = CatEvents_Model_CatEvent::getInstance()->getList2($this->lan->LanId, 20);
        $this->assign("category", $category);

        $events = Events_Model_Event::getInstance()->get($url, $this->lan->LanId);
        $this->assign("events", $events);
    }

}