<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app'] ?>/css/index.css"/>
<!--用于关键字搜索-->
<input id="file_path" type="hidden" value="1"/>
<div class="top_bar">
	<div class="banner_l">
		<dl>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"1")) ?>">
                    <i class="ct-icon ct-icon-nvzhuang"></i> 女装
                    <em class="ct-line"></em>
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"2")) ?>">
                    <i class="ct-icon ct-icon-nanzhuang"></i> 男装
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"3")) ?>">
                    <i class="ct-icon ct-icon-xiezi"></i> 鞋子
                    <em class="ct-line"></em>
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"4")) ?>">
                    <i class="ct-icon ct-icon-xiangbao"></i> 箱包
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"9")) ?>">
                    <i class="ct-icon ct-icon-muying"></i> 母婴
                    <em class="ct-line"></em>
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"5")) ?>">
                    <i class="ct-icon ct-icon-meizhuang"></i> 美妆
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"7")) ?>">
                    <i class="ct-icon ct-icon-jujia"></i> 居家
                    <em class="ct-line"></em>
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"10")) ?>">
                    <i class="ct-icon ct-icon-jiafang"></i> 户外
                </a>
            </dd>
            <dd class="border-none">
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"11")) ?>">
                    <i class="ct-icon ct-icon-neiyi"></i> 内衣
                    <em class="ct-line"></em>
                </a>
            </dd>
            <dd class="border-none">
                <a href="<?php echo $this->createUrl("tejia",array("promotionId"=>"12")) ?>">
                    <i class="ct-icon ct-icon-peishi"></i> 其他
                </a>
            </dd>
        </dl>
	</div>
    <div class="banner_r">
        <dl>
            <dd>
                <a href="<?php echo $this->createUrl("tejia") ?>" class="'right" title="楚楚街家居百货">
                    <img src="<?php echo $this->assets['app'] ?>/images/asp/5710b18379178.png" alt="">
                </a>
            </dd>
            <dd>
                <a href="<?php echo $this->createUrl("remai") ?>" class="'right" title="楚楚街1元包邮">
                    <img src="<?php echo $this->assets['app'] ?>/images/asp/57467bd1519dd.png" alt="">
                </a>
            </dd>
        </dl>
    </div>
    <div class="round">
        <a href="javascript:;"></a>
        <a href="javascript:;"></a>
        <a href="javascript:;"></a>
       <!-- <a href="javascript:;"></a>
        <a href="javascript:;"></a>-->
    </div>
    <div class="banner_arrow" style="display:none;">
        <a href="javascript:;" class="arrow_prev"><i></i></a>
        <a href="javascript:;" class="arrow_next"><i></i></a>
    </div>
    <ul class="banner_list">
        <li style="background-image: url(<?php echo $this->assets['app'] ?>/images/asp/1.png); z-index: 0; opacity: 0; background-position: 50% 50%; background-repeat: no-repeat no-repeat;">
        <a title="楚楚街欢乐淘百货专场" href="./asp.php" class="pic center"></a>
        </li>
        <li style="background-image: url(<?php echo $this->assets['app'] ?>/images/asp/2.png); z-index: 0; opacity: 0; background-position: 50% 50%; background-repeat: no-repeat no-repeat;"><a title="楚楚街时尚女包专场" href="./tejia.php" class="pic center"></a></li>
        <li style="background-image: url(<?php echo $this->assets['app'] ?>/images/asp/3.png); z-index: 0; opacity: 0; background-position: 50% 50%; background-repeat: no-repeat no-repeat;"><a title="欢乐淘楚楚街女装每周四上新" href="./remai.php" class="pic center"></a></li><!--<li style="background-image: url(./images/asp/4.png); z-index: 0; opacity: 0; background-position: 50% 50%; background-repeat: no-repeat no-repeat;"><a target="_blank" title="楚楚街夏季时尚T恤特价" href="/tag/view/k/Txunv.html" class="pic center"></a></li><li style="background-image: url(./images/asp/5.png); z-index: 0; opacity: 0; background-position: 50% 50%; background-repeat: no-repeat no-repeat;"><a target="_blank" title="春季运动季" href="/tag/view/k/lianyiqunxia.html" class="pic center"></a></li>-->
    </ul>
</div>
<div class="content">
	<div class="newusers">
        <div class="today">今日新品<span>每天10点上新</span></div>
    </div>
    <div class="today-items">
    <?php if(!empty($data)){
        foreach ($data as $key => $value) { 
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
	<?php }} ?>
    </div>
</div>

<!-- pagination -->
<div style="width:1200px;margin: 0 auto;position:relative;padding-left:600px;">
	<div class="tpage" style="margin:0 auto;">
		<?php if($page == 1){ ?>
	        <a disabled="disabled">首页</a>
	        <a class="next" disabled="disabled">上一页</a>
	    <?php }else{ ?>
	        <a href="<?php echo $this->createUrl('index',array('page'=>1)) ?>">首页</a>
	        <a class="next" href="<?php echo $this->createUrl('index',array('page'=>$page-1)) ?>">上一页</a>
	    <?php } ?>
	    <?php 
	        $s_page = $page-4>0?$page-4:1;
	        $e_page = $page+5>$pages?$pages:$page+5;
	        for($i=$s_page;$i<=$e_page;$i++){
	            if($i == $page){ ?>
	                <a class='cur' disabled="disabled" href="<?php echo $this->createUrl('index',array('page'=>$i)) ?>"><?php echo $i; ?></a>
	            <?php }else{ ?> 
	                <a class="page_n" href="<?php echo $this->createUrl('index',array('page'=>$i)) ?>"><?php echo $i; ?></a>
	    <?php }} ?>
	    
	    <?php if($pages == $page){ ?>
	        <a class="next" disabled="disabled">下一页</a>
	        <a disabled="disabled">尾页</a>
	    <?php }else{ ?>
	       <a class="next" href="<?php echo $this->createUrl('index',array('page'=>$page+1)) ?>">下一页</a>
	        <a href="<?php echo $this->createUrl('index',array('page'=>$pages)) ?>">尾页</a>
	    <?php } ?>
	</div>
</div>
<script type="text/javascript" src="<?php echo $this->assets['app'] ?>/js/main.js?ver=20130625"></script>
<div class="tb_ad" id="tb_ad" style="" pbflag="taobaoad">           
    <span class="tit">
        <i class="td_ad_flag"></i>
        <h2>今日特卖</h2>
        <i class="td_ad_close"></i>
    </span>
    <ul class="lunbo">
        <?php foreach ($ldata as $key => $val) { 
            //if($value['sid'] == 35418517){continue;}
        ?>
            <li>
                <div class="info" >             
                    <a target="_blank" href="http://item.taobao.com/item.htm?id=<?php echo $val['iid'] ?>" target="_blank">
                        <img src="<?php echo $val['pic_url'] ?>">               
                    </a>                
                    <span class="name"><?php echo $val['title'] ?></span>           
                </div>          
            </li>

        <?php } ?>
    </ul>
</div>