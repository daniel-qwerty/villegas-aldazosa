<?php

class Gallery_Helper_Gallery extends Com_Object {

    /**
     *
     * @return Gallery_Helper_Gallery 
     */
    public static function getInstance() {
        return self::_getInstance(__CLASS__);
    }

    public function get($lan, $name) {
        return Gallery_Model_Gallery::getInstance()->getImage($lan->LanId, $name);
    }

}
