<?php

class Teams_Widget_Team extends Com_Object
{

    private $lan;
    private $parent = 0;

    /**
     *
     * @static
     * @access public
     * @return Teams_Widget_Team
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

        $list = Teams_Model_Team::getInstance()->getListTeam($this->lan->LanId);

        foreach ($list as $item) {

            ?>
            
            <li class=gdlr-core-item-mglr>
                <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix" style="box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                    <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                        <a href=#><img src="<?PHP echo Com_Helper_Url::getInstance()->getUploads(); ?>/Image/<?= $item->TeamThumb ?>" alt="<?= $item->TeamNombre ?>" width=599 height=500 title="<?= $item->TeamNombre ?>"></a>
                    </div>
                    <div class=gdlr-core-personnel-list-content-wrap>
                        <h3 class="gdlr-core-personnel-list-title" style="font-size: 16px ;font-weight: 600 ;letter-spacing: 2px ;margin-bottom: 5px ;"><a href=# ><?= $item->TeamNombre ?></a></h3>
                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;"><?= $item->TeamCargo ?></div>
                    </div>
                </div>
            </li>



            <?PHP


        }
    }



}

?>
