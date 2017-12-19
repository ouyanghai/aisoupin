<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app'] ?>/css/tejia.css">
<!-- 淘宝广告start -->
<script type="text/javascript" src = "http://www.niurj.com/js/taobao.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.niurj.com/css/taobao.css">
<div id="poster" style="z-index:99999;">
    <div class="post-title">
        <span>淘宝热卖商品推荐</span>      
        <a href="javascript:;"></a>
    </div>
    <div>
        <script type="text/javascript" src="http://i.haodianpu.com/detail.php?aid=59&param=360*160"></script>  
    </div>
</div>
<!-- 淘宝广告end -->
<div class="content">
    <div class="items-cid">
        <div class="banner_cid">
        <dl>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"0")) ?>">
                    <span style="line-height:60px;height:60px;">全部</span>
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"1")) ?>">
                    <span>时尚女装</span>
                    <i class="ct-icon ct-icon-nvzhuang"></i> 
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"2")) ?>">
                    <span>品质男装</span>
                    <i class="ct-icon ct-icon-nanzhuang"></i> 
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"3")) ?>">
                    <span>男鞋女鞋</span>
                    <i class="ct-icon ct-icon-xiezi"></i> 
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"4")) ?>">
                    <span>包包配饰</span>
                    <i class="ct-icon ct-icon-xiangbao"></i> 
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"9")) ?>">
                    <span>母婴儿童</span>
                    <i class="ct-icon ct-icon-muying"></i> 
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"5")) ?>">
                    <span>美容护肤</span>
                    <i class="ct-icon ct-icon-meizhuang"></i> 
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"7")) ?>">
                    <span>日用百货</span>
                    <i class="ct-icon ct-icon-jujia"></i> 
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"10")) ?>">
                    <span>车品户外</span>
                    <i class="ct-icon ct-icon-jiafang"></i> 
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"8")) ?>">
                    <span>美食特产</span>
                    <i class="ct-icon ct-icon-meishi"></i> 
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"6")) ?>">
                    <span>数码家电</span>
                    <i class="ct-icon ct-icon-shuma"></i> 
                </a>
            </dd>
            <dd class="border-none">
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"11")) ?>">
                    <span>舒适内衣</span>
                    <i class="ct-icon ct-icon-neiyi"></i> 
                </a>
            </dd>
            <dd class="border-none">
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"12")) ?>">
                    <span>其他</span>
                    <i class="ct-icon-qita"></i> 
                </a>
            </dd>
        </dl>
    </div>
    </div>
    <div class="today-items">
    <?php foreach ($data as $key => $value) { 
        $forbid = array(520982017191,535374130608,39511788088,546360340630,529498559597,551450611525,540768458526,547053378954,548698221432,548724669515,547053378954,553799951863,527579090126,551852727917,553263885177,547053378954,554512387354,547693220942,543231728981,541320407678,537570970782);
            if(in_array($value['iid'], $forbid)){
                continue;
            }
    ?>
        <dl class="item-row">
            <div class="items-flag"></div>
            <a href="http://item.taobao.com/item.htm?id=<?php echo $value['iid']; ?>" target="_blank">
            <dt class="item-row-pic"><img src="<?php echo $value['pic_url']; ?>" title="<?php echo $value['pic_url']; ?>"></dt>
            <dd class="item-row-desc" title="<?php echo $value['title']; ?>"><?php echo $value['title']; ?></dd>
            </a>
            <dd class="item-row-price" title="<?php echo $value['price']; ?>"><span><?php echo $value['price']; ?></span></dd>
            <a href="http://item.taobao.com/item.htm?id=<?php echo $value['iid']; ?>" target="_blank">
            <dd class="item-row-flag" title="淘宝">
                    <i></i>
                    <span>淘宝</span>
            </dd>
            </a>
        </dl>
    <?php } ?>
    </div>
    <div class="page-items">
        <div id="nothing_tip" style="display:none;width:200px;text-align:center;margin:0 auto;">没有相应结果</div>
        <div class="tcdPageCode"></div>
    </div>
</div>

<!-- pagination -->
<div style="width:1200px;margin: 0 auto;position:relative;padding-left:600px;">
	<div class="tpage" style="display:inline-block;margin:0 auto;">
		<?php if($page == 1){ ?>
	        <a disabled="disabled">首页</a>
	        <a class="next" disabled="disabled">上一页</a>
	    <?php }else{ ?>
	        <a href="<?php echo $this->createUrl('tejia',array('page'=>1)) ?>">首页</a>
	        <a class="next" href="<?php echo $this->createUrl('tejia',array('page'=>$page-1)) ?>">上一页</a>
	    <?php } ?>
	    <?php 
	        $s_page = $page-4>0?$page-4:1;
	        $e_page = $page+5>$pages?$pages:$page+5;
	        for($i=$s_page;$i<=$e_page;$i++){
	            if($i == $page){ ?>
	                <a class='cur' disabled="disabled" href="<?php echo $this->createUrl('tejia',array('page'=>$i)) ?>"><?php echo $i; ?></a>
	            <?php }else{ ?> 
	                <a class="page_n" href="<?php echo $this->createUrl('tejia',array('page'=>$i)) ?>"><?php echo $i; ?></a>
	    <?php }} ?>
	    
	    <?php if($pages == $page){ ?>
	        <a class="next" disabled="disabled">下一页</a>
	        <a disabled="disabled">尾页</a>
	    <?php }else{ ?>
	       <a class="next" href="<?php echo $this->createUrl('tejia',array('page'=>$page+1)) ?>">下一页</a>
	        <a href="<?php echo $this->createUrl('tejia',array('page'=>$pages)) ?>">尾页</a>
	    <?php } ?>
	</div>
</div>
