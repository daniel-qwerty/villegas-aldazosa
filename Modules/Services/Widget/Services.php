<?php

class Services_Widget_Services extends Com_Object
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

        $list = Services_Model_Service::getInstance()->getListService($this->lan->LanId);

        foreach ($list as $item) {

            ?>
            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 3px 0px 40px 0px;">
                    <div class=gdlr-core-pbf-background-wrap style="background-color: #ffffff ;"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class=gdlr-core-pbf-element>
                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 33px ;">
                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-round" style="border-width: 0px;"><img src="<?=Com_Helper_Url::getInstance()->getUploads();?>/Image/<?=$item->SerImage?>" alt width=599 height=317 title=coporate></div>
                            </div>
                        </div>
                        <div class=gdlr-core-pbf-element>
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;">
                                <div class="gdlr-core-title-item-title-wrap ">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #929294 ;"><?=$item->SerTitle?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                            </div>
                        </div>
                        <div class=gdlr-core-pbf-element>
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                    <p><?=$item->SerResume?></p>
                                </div>
                            </div>
                        </div>
                        <div class=gdlr-core-pbf-element>
                            <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="<?PHP echo Com_Helper_Url::getInstance()->urlBase . '/' . $this->lan->LanCode . '/area/' . $item->SerId; ?>" style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content ><?=Texts_Helper_Text::getInstance()->get($this->lan, "txtReadMore")->TxtDescription;?></span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                        </div>
                    </div>
                </div>
            </div>


            <?PHP

        }
    }

    public function renderList()
    {

        $list = Services_Model_Service::getInstance()->getListService($this->lan->LanId);

        foreach ($list as $item) {

            ?>
            <li class="menu-item"><a href="<?PHP echo Com_Helper_Url::getInstance()->urlBase . '/' . $this->lan->LanCode . '/area/' . $item->SerId; ?>"><?=$item->SerTitle?></a></li>


            <?PHP

        }
    }

}

?>
