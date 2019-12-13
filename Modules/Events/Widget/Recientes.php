<?php

class Events_Widget_Recientes extends Com_Object {

    private $lan;
    private $limit;
    private $category;

    /**
     *
     * @return Events_Widget_Recientes
     */
    public static function getInstance() {
        return self::_getInstance(__CLASS__);
    }

    public function setLan($lan) {
        $this->lan = $lan;
        return $this;
    }

    public function setLimit($limit) {
        $this->limit = $limit;
        return $this;
    }

    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    public function render() {
        $list = Events_Model_Event::getInstance()->getListRecientes($this->lan->LanId, $this->limit);
        ?>

        <?php foreach ($list as $new): ?>
            
            <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20 ">
                <div class="gdlr-core-blog-grid gdlr-core-style-3 gdlr-core-js  gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background  gdlr-core-outer-frame-element gdlr-core-with-thumbnail" style="box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;" data-sync-height=blog-item-1>
                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                        <a href="<?PHP echo Com_Helper_Url::getInstance()->generateUrl($this->lan->LanCode, "item/" . $new->EveId); ?>"><img src=<?= Com_Helper_Url::getInstance()->getUploads(); ?>/Image/<?PHP echo $new->EveImage; ?> alt width=700 height=450 title=drew-beamer-679505-unsplash></a>
                    </div>
                    <div class="gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position" style="padding-top: 40px;padding-bottom: 35px;">
                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="<?PHP echo Com_Helper_Url::getInstance()->generateUrl($this->lan->LanCode, "noticia/" . $new->EveId); ?>" ><?PHP echo $new->EveTitle; ?></a></h3>
                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_clock_alt ></i></span><a href=#><?PHP echo $new->EveDate; ?></a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_documents_alt ></i></span><a href=# title="Posts by James Smith" rel=author>James Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment">
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>



        <?php
    }

    public function renderInNew() {
        $list = Events_Model_Event::getInstance()->getListRecientes($this->lan->LanId, $this->limit);
        ?>

        <?php foreach ($list as $new): ?>

            <div class="gdlr-core-recent-post-widget clearfix">
                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src="<?= Com_Helper_Url::getInstance()->getUploads(); ?>/Image/<?PHP echo $new->EveImage; ?>" alt width=150 height=150 title=drew-beamer-679505-unsplash></div>
                <div class=gdlr-core-recent-post-widget-content>
                    <div class=gdlr-core-recent-post-widget-title><a href="<?PHP echo Com_Helper_Url::getInstance()->generateUrl($this->lan->LanCode, "item/" . $new->EveId); ?>"><?PHP echo $new->EveTitle; ?></a></div>
                    <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-head ><i class=icon_clock_alt ></i></span><a href="<?PHP echo Com_Helper_Url::getInstance()->generateUrl($this->lan->LanCode, "item/" . $new->EveId); ?>">?PHP echo $new->EveDate; ?></a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-head ><i class=icon_documents_alt ></i></span><a href=# title="Posts by James Smith" rel=author>James Smith</a></span>
                    </div>
                </div>
            </div>
            
            
        <?php endforeach; ?>



        <?php
    }

}
