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

<div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20 gdlr-core-column">
    <div class="gdlr-core-blog-grid gdlr-core-style-3  gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background  gdlr-core-with-thumbnail"
        style="border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;">
        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
            <a href="<?PHP echo Com_Helper_Url::getInstance()->generateUrl($this->lan->LanCode, "noticia/" .
                $new->EveId); ?>">
                <img src="<?=Com_Helper_Url::getInstance()->getUploads();?>/Image/<?PHP echo $new->EveImage; ?>" alt
                    class="imagesNews" title=drew-beamer-679505-unsplash></a> 
        </div>
        <div class="gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position"
            style="padding-right: 40px;padding-left: 40px;">
            <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                style="font-size: 20px ;font-weight: 700 ;letter-spacing: 0px ;"><a
                    href="<?PHP echo Com_Helper_Url::getInstance()->generateUrl($this->lan->LanCode, "noticia/" .
                    $new->EveId); ?>" >
                    <?PHP echo $new->EveTitle; ?></a></h3>
            <div class=gdlr-core-blog-content>
                <?PHP echo substr($new->EveResumen, 0, 100) . '...'; ?>
                <div class=clear></div>
            </div>
            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span
                    class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                        class=gdlr-core-blog-info-sep>•</span><span class=gdlr-core-head><i
                            class=icon_clock_alt></i></span><a href=#>
                        <?PHP echo $new->EveDate; ?></a></span><span
                    class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span
                        class=gdlr-core-blog-info-sep>•</span><span class=gdlr-core-head><i
                            class=icon_documents_alt></i></span><a href=# title="Posts by James Smith" rel=author><?PHP echo $new->EveAuthor; ?></a></span>
            </div>
        </div>
    </div>
</div>




<?php
}
    }

}