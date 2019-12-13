<?php

class Gallery_Widget_Clientes extends Com_Object
{

    private $lan;
    private $limit;


    /**
     *
     * @return Gallery_Widget_Clientes
     */
    public static function getInstance()
    {
        return self::_getInstance(__CLASS__);
    }

    public function setLan($lan)
    {
        $this->lan = $lan;
        return $this;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }
    public function setType($type) {
        $this->type = $type;
        return $this;
    }


    public function render()
    {

        $list = Gallery_Model_Gallery::getInstance()->getList($this->lan->LanId, 20);
        foreach ($list as $new) {
            ?>
            <div class="brand-box">
                <a target="_blank" href="<?PHP echo $new->GalName; ?>"><img class="img-responsive" src="<?= Com_Helper_Url::getInstance()->getUploads(); ?>/Image/<?PHP echo $new->GalFile; ?>" alt="<?PHP echo $new->GalName; ?>"></a>
            </div>

        <?php } ?>

        <?PHP
    }

    public function renderLogos()
    {

        $list = Gallery_Model_Gallery::getInstance()->getList($this->lan->LanId, $this->type, 5);
        foreach ($list as $new) {
            ?>
           
            <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12  gdlr-core-item-pdlr gdlr-core-item-mgb">
                    <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src="<?= Com_Helper_Url::getInstance()->getUploads(); ?>/Image/<?PHP echo $new->GalFile; ?>" alt="<?PHP echo $new->GalName; ?>" width=220 height=120 title="<?PHP echo $new->GalName; ?>"></div>
                </div>

        <?php } ?>

        <?PHP
    }

    

    public function renderLogoMenu()
    {

       $list = Gallery_Model_Gallery::getInstance()->getList($this->lan->LanId, $this->type, 1);
        foreach ($list as $new) {
            ?>
           
           <img src="<?= Com_Helper_Url::getInstance()->getUploads(); ?>/Image/<?PHP echo $new->GalFile; ?>" alt width=400 height=71 title=logo>

        <?php } ?>

        <?PHP
    }

     public function renderLogoFooter()
    {

       $list = Gallery_Model_Gallery::getInstance()->getList($this->lan->LanId, $this->type, 1);
        foreach ($list as $new) {
            ?>
           

           <img class="alignnone size-full wp-image-6129" src="<?= Com_Helper_Url::getInstance()->getUploads(); ?>/Image/<?PHP echo $new->GalFile; ?>" alt width=210>

        <?php } ?>

        <?PHP
    }

    public function renderCaseStudios() {

        $list = Gallery_Model_Gallery::getInstance()->getList($this->lan->LanId, $this->type);
        $num = 0;
        ?>

  
            <?PHP
            foreach ($list as $new) {  $num++?>

                <li>
                    <div class=gdlr-core-portfolio-modern-desc>
                        <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image ">
                            <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src=<?= Com_Helper_Url::getInstance()->getUploads(); ?>/Image/<?PHP echo $new->GalFile; ?> alt width=600 height=600 title=Family1><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center gdlr-core-js" style="background: rgba(14, 60, 91, 0.8) ;"><span class=gdlr-core-image-overlay-content ><span class=gdlr-core-portfolio-icon-wrap ><a class="gdlr-core-lightgallery gdlr-core-js "  href=<?= Com_Helper_Url::getInstance()->getUploads(); ?>/Image/<?PHP echo $new->GalFile; ?> data-lightbox-group=gdlr-core-img-group-1><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href=# ><?PHP echo $new->GalName; ?></a></span><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font"><a href=# rel=tag></a></span><span class=gdlr-core-portfolio-content></span></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </li>

            <?php  } ?>
                
       
            <?PHP

        }

}
