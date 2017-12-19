<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app'] ?>/css/shop.css">
<div class="content">
    <form style="float:left;margin-left:100px;margin-bottom:20px;height:40px;display:block;" method="get" action="/shop.php" id="post_file">
        <input style="float:left;width:196px;height:31px;padding:0px;text-align:middle;" id="keyword" name="keyword" placeholder="在此输入您的店铺名！" type="text"/>
        <input type="hidden" id="file_search" value="1" />
        <input id="sub" type="submit" value=""/>
    </form>

    <input id="file_path" type="hidden" placeholder="请输入店铺名"/>
    <div class="shop-items">
        <?php foreach ($users as $data) { 
            if($data['sid'] == 35418517){continue;}
            $star['level'] = ceil($data['level']/5);
            $star['num'] = $data['level']%5 == 0 ? 5 : $data['level']%5;
        ?>
        <div class="shop-row">
            <div class="items-shop">
                <span class="shop-img">
                    <a href="http://shop<?php echo $data['sid'] ?>.taobao.com" target="_blank"><img src="http://logo.taobao.com/shop/<?php echo $data['pic'] ?>" /></a>
                </span>
                <span class="shop-title">
                    <a href="http://shop<?php echo $data['sid'] ?>.taobao.com" target="_blank"> <?php echo $data['title'] ?></a>
                </span>
                <span class="shop-level">
                    <a href="http://shop<?php echo $data['sid'] ?>.taobao.com" target="_blank">
                    <?php for($i=1;$i<=$star['num'];$i++){ ?>
                        <i class="lv<?php echo $star['level']?>"></i>
                    <?php } ?>
                    </a>
                </span><br/>
                
                <span class="shop-nick" style="display:inline-block;">
                    <font color="#666">卖家:</font>
                    <a href="http://shop<?php echo $data['sid'] ?>.taobao.com" target="_blank"><?php echo $data['nick'] ?></a>
                    <a target="_blank" href="http://www.taobao.com/webww/ww.php?ver=3&touid=<?php echo $data['nick'] ?>&siteid=cntaobao&status=2&charset=utf-8"><img style="border:0;width:16px;height:16px;" src="http://amos.alicdn.com/online.aw?v=2&uid=<?php echo $data['nick'] ?>&site=cntaobao&s=2&charset=utf-8" alt="点这里给我发消息" /></a>
                </span>
                
                <span class="shop-cat"><font color="#666">主营:</font><a title="<?php echo $data['cat'] ?>" href="http://shop<?php echo $data['sid'] ?>.taobao.com" target="_blank"><?php echo $data['cat'] ?></a></span>
            </div>
            <ul class="bao-items">
            <?php foreach ($data['shops'] as $value) { ?>
                <li>
                    <a href="http://item.taobao.com/item.htm?id=<?php echo $value['iid'] ?>" target="_blank"><img style="width:140px;height:140px;" src="<?php echo $value['pic_url'] ?>"/></a>
                    <span class="bao-item-price">￥<?php echo $value['price'] ?></span>
                </li>
            <?php } ?>
            </ul>
            <span style="float:right;margin-top:10px;margin-right:20px;"><a style="color:#0063dc" href="http://shop<?php echo $data['sid'] ?>.taobao.com" target="_blank">查看更多宝贝&gt;</a></span>
        </div>
        <?php } ?>
    </div>
</div>
<!-- pagination -->
<div style="width:1200px;margin: 0 auto;position:relative;padding-left:600px;">
    <div class="tpage" style="display:inline-block;margin:0 auto;">
        <?php if($page == 1){ ?>
            <a disabled="disabled">首页</a>
            <a class="next" disabled="disabled">上一页</a>
        <?php }else{ ?>
            <a href="<?php echo $this->createUrl('shop',array('page'=>1)) ?>">首页</a>
            <a class="next" href="<?php echo $this->createUrl('shop',array('page'=>$page-1)) ?>">上一页</a>
        <?php } ?>
        <?php 
            $s_page = $page-4>0?$page-4:1;
            $e_page = $page+5>$pages?$pages:$page+5;
            for($i=$s_page;$i<=$e_page;$i++){
                if($i == $page){ ?>
                    <a class='cur' disabled="disabled" href="<?php echo $this->createUrl('shop',array('page'=>$i)) ?>"><?php echo $i; ?></a>
                <?php }else{ ?> 
                    <a class="page_n" href="<?php echo $this->createUrl('shop',array('page'=>$i)) ?>"><?php echo $i; ?></a>
        <?php }} ?>
        
        <?php if($pages == $page){ ?>
            <a class="next" disabled="disabled">下一页</a>
            <a disabled="disabled">尾页</a>
        <?php }else{ ?>
           <a class="next" href="<?php echo $this->createUrl('shop',array('page'=>$page+1)) ?>">下一页</a>
            <a href="<?php echo $this->createUrl('shop',array('page'=>$pages)) ?>">尾页</a>
        <?php } ?>
    </div>
</div>