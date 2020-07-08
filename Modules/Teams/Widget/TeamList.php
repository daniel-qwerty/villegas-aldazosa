<?php

class Teams_Widget_TeamList extends Com_Object
{

    private $lan;
    private $parent = 0;

    /**
     *
     * @static
     * @access public
     * @return Teams_Widget_TeamList
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

        $list = Teams_Model_Team::getInstance()->getListTeam($this->lan->LanId, 100);

        foreach ($list as $item) {

            ?>

            <div class="gdlr-core-personnel-list-column  gdlr-core-column-20  gdlr-core-item-pdlr">
                <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix" style="box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 45px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                    <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                        <a href="<?=Com_Helper_Url::getInstance()->urlBase . '/' . $this->lan->LanCode . '/perfil/' . $item->TeamId?>"><img src="<?PHP echo Com_Helper_Url::getInstance()->getUploads(); ?>/Image/<?=$item->TeamThumb?>" alt width=599 height=551 title=James></a>
                    </div>
                    <div class=gdlr-core-personnel-list-content-wrap>
                        <h3 class="gdlr-core-personnel-list-title" style="font-size: 16px ;font-weight: 600 ;letter-spacing: 3px ;margin-bottom: 4px ;"><a href="<?=Com_Helper_Url::getInstance()->urlBase . '/' . $this->lan->LanCode . '/perfil/' . $item->TeamId?>" ><?=$item->TeamNombre?></a></h3>
                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;"><?=$item->TeamCargo?></div>
                        <div class=gdlr-core-personnel-list-social>
                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;">
                            <a href="<?=$item->TeamThumb?>" target=_blank class=gdlr-core-social-network-icon title=linkedin><i class="fa fa-linkedin" ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


       <?PHP

        }
    }

}

?>
