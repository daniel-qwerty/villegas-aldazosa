<?php

class SlideShows_Widget_Slideshow extends Com_Object
{

    private $lan;
    private $type;

    /**
     *
     * @static
     * @access public
     * @return SlideShows_Widget_Slideshow
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
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function render()
    {

        $list = SlideShows_Model_SlideShow::getInstance()->getListEnable($this->lan->LanId, $this->type);
        $num = 0;
        ?>


<?PHP
foreach ($list as $slide) {
            $num++;

            if ($slide->SliTitle !== '- ') {
                if ($slide->SliDescription !== '- ') {
                    ?>

<li data-index=rs-<?=$num?> data-transition=fade data-slotamount=default data-hideafterloop=0 data-hideslideonmobile=off
    data-easein=default data-easeout=default data-masterspeed=300 data-thumb=upload/slider-1-100x50.jpg data-rotate=0
    data-saveperformance=off data-title=Slide data-param1 data-param2 data-param3 data-param4 data-param5 data-param6
    data-param7 data-param8 data-param9 data-param10 data-description> <img
        src="<?=Com_Helper_Url::getInstance()->getUploads();?>/Image/<?=$slide->SliImage;?>" alt title=slider-1
        width=1800 height=1000 data-bgposition="center center" data-bgfit=cover data-bgrepeat=no-repeat
        class=rev-slidebg data-no-retina>

    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id=slide-<?=$num?>-layer-3 data-x=center data-hoffset
        data-y=center data-voffset=-152 data-width="['103']" data-height="['1']" data-type=shape
        data-responsive_offset="on"
        data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0]
        data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgb(182,162,129);">
    </div>
    <div class="tp-caption   tp-resizeme" id=slide-<?=$num?>-layer-4 data-x=center data-hoffset data-y=center
        data-voffset=-80 data-width="['auto']" data-height="['auto']" data-type=text data-responsive_offset="on"
        data-frames='[{"delay":310,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0]
        data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]"
        style="z-index: 7; white-space: nowrap; font-size: 72px; line-height: 102px; font-weight: 700; color: #ffffff; letter-spacing: 8px;font-family:Poppins;text-transform:uppercase;">
        <?php echo $slide->SliTitle; ?></div>
    <div class="tp-caption   tp-resizeme" id=slide-<?=$num?>-layer-5 data-x=center data-hoffset data-y=center
        data-voffset=33 data-width="['610']" data-height="['81']" data-visibility="['on','on','off','off']"
        data-type=text data-responsive_offset="on"
        data-frames='[{"delay":530,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['center','center','center','center']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0]
        data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]"
        style="z-index: 8; min-width: 610px; max-width: 610px; max-width: 81px; max-width: 81px; white-space: normal; font-size: 20px; line-height: 38px; font-weight: 500; color: #dedede; letter-spacing: 0px;font-family:Poppins;">
        <?php echo $slide->SliDescription; ?></div>
</li>

<?php } else {?>

<li data-index=rs-<?=$num?> data-transition=fade data-slotamount=default data-hideafterloop=0 data-hideslideonmobile=off
    data-easein=default data-easeout=default data-masterspeed=300 data-thumb=upload/slider-1-100x50.jpg data-rotate=0
    data-saveperformance=off data-title=Slide data-param1 data-param2 data-param3 data-param4 data-param5 data-param6
    data-param7 data-param8 data-param9 data-param10 data-description> <img
        src="<?=Com_Helper_Url::getInstance()->getUploads();?>/Image/<?=$slide->SliImage;?>" alt title=slider-1
        width=1800 height=1000 data-bgposition="center center" data-bgfit=cover data-bgrepeat=no-repeat
        class=rev-slidebg data-no-retina>

    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id=slide-<?=$num?>-layer-3 data-x=center data-hoffset
        data-y=center data-voffset=-152 data-width="['103']" data-height="['1']" data-type=shape
        data-responsive_offset="on"
        data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0]
        data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgb(182,162,129);">
    </div>
    <div class="tp-caption   tp-resizeme" id=slide-<?=$num?>-layer-4 data-x=center data-hoffset data-y=center
        data-voffset=-80 data-width="['auto']" data-height="['auto']" data-type=text data-responsive_offset="on"
        data-frames='[{"delay":310,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0]
        data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]"
        style="z-index: 7; white-space: nowrap; font-size: 72px; line-height: 102px; font-weight: 700; color: #ffffff; letter-spacing: 8px;font-family:Poppins;text-transform:uppercase;">
        <?php echo $slide->SliTitle; ?></div>

</li>

<?php }} else {?>

<li data-index=rs-<?=$num?> data-transition=fade data-slotamount=default data-hideafterloop=0 data-hideslideonmobile=off
    data-easein=default data-easeout=default data-masterspeed=300 data-thumb=upload/slider-1-100x50.jpg data-rotate=0
    data-saveperformance=off data-title=Slide data-param1 data-param2 data-param3 data-param4 data-param5 data-param6
    data-param7 data-param8 data-param9 data-param10 data-description> <img
        src="<?=Com_Helper_Url::getInstance()->getUploads();?>/Image/<?=$slide->SliImage;?>" alt title=slider-1
        width=1800 height=1000 data-bgposition="center center" data-bgfit=cover data-bgrepeat=no-repeat
        class=rev-slidebg data-no-retina>
    <div class="tp-caption   tp-resizeme" id=slide-<?=$num?>-layer-1 data-x=center data-hoffset data-y=center
        data-voffset=-182 data-width="['auto']" data-height="['auto']" data-type=text data-responsive_offset="on"
        data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0]
        data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]"
        style="z-index: 5; white-space: nowrap; font-size: 38px; line-height: 38px; font-weight: 400; color: #929294; letter-spacing: 2px;font-family:Poppins;text-transform:uppercase;">
    </div>

    <div class="tp-caption   tp-resizeme" id=slide-<?=$num?>-layer-4 data-x=center data-hoffset data-y=center
        data-voffset=-80 data-width="['auto']" data-height="['auto']" data-type=text data-responsive_offset="on"
        data-frames='[{"delay":310,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0]
        data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]"
        style="z-index: 7; white-space: nowrap; font-size: 102px; line-height: 102px; font-weight: 700; color: #ffffff; letter-spacing: 8px;font-family:Poppins;text-transform:uppercase;">
    </div>
    <div class="tp-caption   tp-resizeme" id=slide-<?=$num?>-layer-5 data-x=center data-hoffset data-y=center
        data-voffset=33 data-width="['610']" data-height="['81']" data-visibility="['on','on','off','off']"
        data-type=text data-responsive_offset="on"
        data-frames='[{"delay":530,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['center','center','center','center']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0]
        data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]"
        style="z-index: 8; min-width: 610px; max-width: 610px; max-width: 81px; max-width: 81px; white-space: normal; font-size: 20px; line-height: 38px; font-weight: 500; color: #dedede; letter-spacing: 0px;font-family:Poppins;">
    </div>
</li>
<?PHP }}

    }

    public function renderBestService()
    {

        $list = SlideShows_Model_SlideShow::getInstance()->getListEnable($this->lan->LanId, $this->type);
        $num = 0;
        ?>


<?PHP
foreach ($list as $slide) {$num++?>

<div class="gdlr-core-pbf-column gdlr-core-column-20 ">
    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
        style="margin: 20px 20px 20px 20px;padding: 75px 20px 45px 20px;" data-sync-height=height5>
        <div class=gdlr-core-pbf-background-wrap
            style="border-radius: 3px 3px 3px 3px;-moz-border-radius: 3px 3px 3px 3px;-webkit-border-radius: 3px 3px 3px 3px;">
            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                style="background-image: url(<?=Com_Helper_Url::getInstance()->getUploads();?>/Image/<?=$slide->SliImage;?>) ;background-size: cover ;background-position: center ;"
                data-parallax-speed=0></div>
        </div>
        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
            <div class=gdlr-core-pbf-element>
                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr"
                    style="padding-bottom: 0px;">
                    <div class="gdlr-core-column-service-media gdlr-core-media-image"><img
                            src=<?=Com_Helper_Url::getInstance()->getUploads();?>/Image/<?=$slide->SliImage;?> alt
                            width=35 height=50 title=law30></div>
                    <div class=gdlr-core-column-service-content-wrapper>
                        <div class=gdlr-core-column-service-title-wrap>
                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title"
                                style="font-size: 15px ;font-weight: 700 ;letter-spacing: 3px ;">
                                <?php echo $slide->SliTitle; ?></h3>
                        </div>
                        <div class=gdlr-core-column-service-content style="font-weight: 400 ;text-transform: none ;">
                            <p><?php echo $slide->SliDescription; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php }?>


<?PHP

    }

    public function renderCaseStudios()
    {

        $list = SlideShows_Model_SlideShow::getInstance()->getListEnable($this->lan->LanId, $this->type);
        $num = 0;
        ?>


<?PHP
foreach ($list as $slide) {$num++?>

<li>
    <div class=gdlr-core-portfolio-modern-desc>
        <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image ">
            <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img
                    src=<?=Com_Helper_Url::getInstance()->getUploads();?>/Image/<?=$slide->SliImage;?> alt width=600
                    height=600 title=Family1><span
                    class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center gdlr-core-js"
                    style="background: rgba(14, 60, 91, 0.8) ;"><span class=gdlr-core-image-overlay-content><span
                            class=gdlr-core-portfolio-icon-wrap><a class="gdlr-core-lightgallery gdlr-core-js "
                                href=<?=Com_Helper_Url::getInstance()->getUploads();?>/Image/<?=$slide->SliImage;?>
                                data-lightbox-group=gdlr-core-img-group-1><i
                                    class="gdlr-core-portfolio-icon arrow_expand"></i></a></span><span
                            class="gdlr-core-portfolio-title gdlr-core-title-font "
                            style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a
                                href=#><?php echo $slide->SliTitle; ?></a></span><span
                            class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font"><a href=#
                                rel=tag></a></span><span class=gdlr-core-portfolio-content></span></span>
                </span>
            </div>
        </div>
    </div>
</li>

<?php }?>


<?PHP

    }

}