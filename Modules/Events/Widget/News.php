<?php

class Events_Widget_News extends Com_Object
{

    private $lan;
    private $limit;
    private $category;

    /**
     *
     * @return Events_Widget_News
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

    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    public function render()
    {

        $list = Events_Model_Event::getInstance()->getListRecientes($this->lan->LanId, $this->limit);
        foreach ($list as $new) {
            ?>

<div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20">
    <div class="gdlr-core-blog-grid gdlr-core-style-3  gdlr-core-with-thumbnail">
        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover"
            style="border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;">
            <a href="<?PHP echo Com_Helper_Url::getInstance()->generateUrl($this->lan->LanCode, "noticia/" .
                $new->EveId); ?>"><img
                    src="<?=Com_Helper_Url::getInstance()->getUploads();?>/Image/<?PHP echo $new->EveImage; ?>" alt
                    width=700 height=660 title=drew-beamer-679505-unsplash></a>
        </div>
        <div class=gdlr-core-blog-grid-content-wrap>
            <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;"><a
                    href="<?PHP echo Com_Helper_Url::getInstance()->generateUrl($this->lan->LanCode, "noticia/" .
                    $new->EveId); ?>" >
                    <?PHP echo $new->EveTitle; ?></a></h3>
            <div class=gdlr-core-blog-content>
                <?PHP echo $new->EveResumen; ?>
                <div class=clear></div>
            </div>
            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span
                    class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                        class=gdlr-core-blog-info-sep>•</span><span class=gdlr-core-head><i
                            class=icon_clock_alt></i></span><a href=#>
                        <?PHP echo $new->EveDate; ?></a></span><span
                    class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span
                        class=gdlr-core-blog-info-sep></span></span>
            </div>
        </div>
    </div>
</div>


<?php
}
    }

}