<?php

class Services_Controller_Index extends Public_Controller_Index
{

    public function Index()
    {
        $this->setLayout("template2");
        $this->setView("area");
        $url = get('REQUEST_URI');
        $url = explode("/", $url);
        $url = $url[count($url) - 1];


        $modelo = Services_Model_Service::getInstance()->get($url, $this->lan->LanId);
        //$blog = Blog_Model_Blog::getInstance()->get($article->BitemBlogId, $this->lan->LanId);
        // $user = Users_Model_User::getInstance()->get($article->BitemAuthor);
        $this->assign("modelo", $modelo);
        $this->assign("dataUrl", $url);
        // $this->assign("user", $user);
    }

    
    

    

    

    



}
