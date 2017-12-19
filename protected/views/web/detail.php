<div id="show-shop" class="container">
    <div class="clearfix" style="height:120px;">
        <div class="shop-pic">
            <a href="" target="_blank"><img src=""></a>
        </div>
        <div class="shop-info">
            <div class="shop-detail">
                <p><a href="" target="_blank"><span class="detail1" style="color:red;font-size:15px;font-weight:bold"></span></a></p>
                <div style="display:block;width:400px;max-height:72px;"><span class="detail2"><strong>店铺简介：</strong><?php if(!empty($data['desc'])){echo preg_replace($this->citys,'',strip_tags($data['desc']));} ?></span></div>
                <p><strong>综合评分：</strong><span class="detail4">4.8</span></p>
                <p><strong>开店时间：</strong><span class="detail3"><?php if(!empty($data['created'])){echo $data['created'];} ?></span></p>
            </div>
             <!-- JiaThis Button BEGIN -->
            <div class="jiathis_style_32x32" style="float:right;margin-top:50px;margin-right:40px;">
                <a href="<?php echo $route; ?>" target="_blank" id="shop-title" style="float:left;margin-right:5px;width:127px;height:36px;background:url('http://img03.taobaocdn.com/imgextra/i3/62192401/T2RzaxXodbXXXXXXXX_!!62192401.gif') no-repeat 95% center;display:block;"></a>
                <a class="jiathis_button_qzone"></a>
                <a class="jiathis_button_tsina"></a>
                <a class="jiathis_button_weixin"></a>
            </div>
            <script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js?uid=1373890231172857" charset="utf-8"></script>
            <!-- JiaThis Button END -->
        </div>

    </div>
</div>
<!--
<div style="width:980px;margin:0 auto;margin-top:20px;height:32px;color:#ff6600;"><span style="font-size:20px;float:left;"><img src="./images/asp/remai01.png"></span></div>
-->
<!--店铺宝贝展示-->

<div class="shop-items">
<?php if(!empty($data['items'])){ ?>
<?php foreach ($data['items'] as $key => $value) { 
        $value['title'] = preg_replace($this->citys,'',$value['title']);
    ?>
    <dl class="item-row">
        <div class="items-flag"></div>
        <a href="http://item.taobao.com/item.htm?id=<?php echo $value['iid'] ?>" target="_blank">
        <dt class="item-row-pic"><img src="<?php echo $value['pic_url'] ?>" title="<?php echo $value['pic_url'] ?>"></dt>
        <dd class="item-row-desc" title="<?php echo $value['title'] ?>"><?php echo $value['title'] ?></dd>
        <dd class="item-row-price" title="<?php echo $value['price'] ?>"><span><?php echo $value['price'] ?></span></dd>
        </a>
    </dl>
<?php }} ?>
</div>