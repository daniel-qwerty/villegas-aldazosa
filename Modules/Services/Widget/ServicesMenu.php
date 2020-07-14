<?php

class Services_Widget_ServicesMenu extends Com_Object
{

    private $lan;
    private $parent = 0;

    /**
     *
     * @static
     * @access public
     * @return Services_Widget_Services
     */
    public static function getInstance()
    {
        return self::_getInstance(__CLASS__);
    }

    public function setParent($id)
    {
        $this->parent = $id;
        return $this;
    }

    public function setLan($lan)
    {
        $this->lan = $lan;
        return $this;
    }

    /**
     * @access public
     */
    public function render()
    {

        $list = Services_Model_Service::getInstance()->getListService($this->lan->LanId);?>

<ul id=menu-practice-areas class="gdlr-core-custom-menu-widget gdlr-core-menu-style-half" style="display:grid;">
    <?php foreach ($list as $item) {?>

    <li class="menu-item" style="font-size: 12px;"><a
            href="<?PHP echo Com_Helper_Url::getInstance()->urlBase . '/' . $this->lan->LanCode . '/area/' . $item->SerId; ?>"><?=$item->SerTitle?></a>
    </li>

    <?PHP }?>
</ul>
<?php
}

}

?>