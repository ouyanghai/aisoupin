<?php
class WebController extends TopController{
	public $layout = '//layouts/main';
	public $menu = array(
		'tejia'=>array('label'=>'今日特价','url'=>'http://www.aisoupin.com','title'=>"爱搜品-优质商品导购 为您挑选好商品 楚楚街，卷皮网，9.9元包邮，天天特价，蘑菇街，折800",'des'=>"爱搜品-优质商品导购 为您挑选好商品 楚楚街，卷皮网，9.9元包邮，天天特价，蘑菇街，折800"),
		'index'=>array('label'=>'限时特卖','url'=>'http://temai.aisoupin.com',"title"=>"爱搜品-优质商品导购 为您挑选好商品 楚楚街，卷皮网，9.9元包邮，天天特价，蘑菇街，折800","des"=>"爱搜品-优质商品导购 为您挑选好商品 楚楚街，卷皮网，9.9元包邮，天天特价，蘑菇街，折800"),
		'shop'=>array('label'=>'商家大全','url'=>'http://shop.aisoupin.com',"title"=>"爱搜品-优质商品导购 为您挑选好商品 楚楚街，卷皮网，9.9元包邮，天天特价，蘑菇街，折800"),
		'about'=>array('label'=>'关于我们','url'=>'http://about.aisoupin.com',"title"=>"爱搜品-优质商品导购 为您挑选好商品 楚楚街，卷皮网，9.9元包邮，天天特价，蘑菇街，折800"),
		'detail'=>array('label'=>'关于我们','url'=>'http://about.aisoupin.com',"title"=>"爱搜品-优质商品导购 为您挑选好商品 楚楚街，卷皮网，9.9元包邮，天天特价，蘑菇街，折800"),
	);
	public $citys = "/香港|台湾|广东|广州|东莞|佛山|中山|珠海|惠州|江门|汕头|湛江|肇庆|茂名|揭阳|梅州|清远|阳江|韶关|河源|云浮|汕尾|潮州|台山|阳春|顺德|惠东|博罗|河南|郑州|洛阳|新乡|南阳|许昌|平顶山|安阳|焦作|商丘|开封|濮阳|周口|信阳|驻马店|漯河|漯河|三门峡|鹤壁|济源|明港|鄢陵|禹州|长葛|江苏|山东|青岛|济南|烟台|淄博|潍坊|泰安|聊城|济宁|临沂|日照|枣庄|东营|菏泽|威海|诸城|垦利|莱芜|德州|章丘|寿光|滨州|苏州|常州|南京|扬州|徐州|无锡|南通|淮安|镇江|宿迁|盐城|连云港|溧阳|如皋|泰州|大丰|启东|沭阳|东海|海门|扬中|新沂|邳州|兴化|泰兴|东台|海安|如东|沛县|建湖|靖江|丹阳|浙江|杭州|宁波|温州|金华|嘉兴|台州|绍兴|湖州|丽水|舟山|乐清|衢州|瑞安|义乌|余姚|诸暨|象山|温岭|桐乡|慈溪|长兴|嘉善|海宁|德清|安徽|蚌埠|合肥|阜阳|淮南|安庆|宿州|淮北|芜湖|六安|滁州|马鞍山|黄山|铜陵|宣城|亳州|池州|巢湖|霍邱|和县|桐城|天长|宁国|福建|福州|莆田|厦门|三明|宁德|漳州|泉州|南平|龙岩|石狮|晋江|南安|武夷山|南宁|玉林|柳州|梧州|百色|北海|钦州|贺州|桂林|河池|来宾|防城港|崇左|广西|海南|琼海|三亚|五指山|三沙|海口|湖北|湖南|江西|襄阳|黄石|武汉|宜昌|十堰|黄冈|咸宁|荆州|孝感|恩施|随州|潜江|鄂州|荆门|天门|神农架|仙桃|宜都|株洲|长沙|湘潭|益阳|衡阳|常德|岳阳|邵阳|怀化|永州|郴州|娄底|湘西|张家界|赣州|吉安|九江|宜春|南昌|上饶|永新|景德镇|萍乡|新余|抚州|鹰潭|辽宁|黑龙江|吉林|鞍山|营口|大连|锦州|辽阳|抚顺|盘锦|丹东|沈阳|朝阳|本溪|葫芦岛|铁岭|庄河|阜新|瓦房店|齐齐哈尔|哈尔滨|牡丹江|绥化|大庆|鸡西|佳木斯|双鸭山|伊春|大兴安岭|鹤岗|黑河|七台河|吉林|四平|长春|白山|通化|松原|白城|延边|辽源|四川|云南|贵州|西藏|南充|绵阳|成都|德阳|自贡|宜宾|乐山|达州|泸州|攀枝花|内江|资阳|广安|眉山|遂宁|巴中|甘孜|阿坝|雅安|凉山|广元|丽江|红河|大理|文山|曲靖|楚雄|昆明|昭通|德宏|西双版纳|玉溪|临沧|迪庆|怒江|保山|普洱|贵阳|遵义|黔东南|铜仁|毕节|黔南|安顺|黔西南|六盘水|日喀则|拉萨|昌都|山南|林芝|那曲|阿里|河北|山西|内蒙古|廊坊|秦皇岛|保定|邯郸|唐山|沧州|石家庄|衡水|张家口|邢台|承德|定州|张北|馆陶|赵县|正定|太原|长治|临汾|运城|大同|朔州|晋中|阳泉|吕梁|忻州|晋城|清徐|临猗|呼和浩特|包头|鄂尔多斯|赤峰|呼伦贝尔|兴安盟|乌兰察布|通辽|锡林郭勒盟|乌海|巴彦淖尔市|阿拉善盟|海拉尔|陕西|新疆|甘肃|宁夏|青海|渭南|咸阳|汉中|榆林|宝鸡|西安|商洛|延安|安康|铜川|乌鲁木齐|巴音郭楞|伊犁|昌吉|喀什|阿克苏|博尔塔拉|克拉玛依|哈密|吐鲁番|和田|克孜勒苏|阿拉尔|五家渠|石河子|图木舒克|库尔勒|白银|庆阳|天水|兰州|平凉|酒泉|定西|武威|金昌|临夏|陇南|嘉峪关|张掖|甘南|石嘴山|吴忠|银川|中卫|固原|果洛|黄南|海北|西宁|海东|玉树|海南|海西|北京|上海|天津|重庆|公司|有限公司/i";


	public $niuren = "http://i.haodianpu.com/";
	public function init(){
		parent::init();
		ini_set('date.timezone','Asia/Shanghai');
	}

	public function actionIndex(){
		$this->layout = '//layouts/main';
		$tpage = $page = !empty($_GET['page'])&&is_numeric($_GET['page'])&&$_GET['page']>0 ? $_GET['page'] : 1;
		
		$keyword = !empty($_GET['keyword']) ? $_GET['keyword'] : '';
		$price = !empty($_GET['price']) ? $_GET['price'] : 'all';
		$shop = !empty($_GET['shop']) ? $_GET['shop'] : '';
		$file = $this->niuren."site/shouyeget?page={$page}&keyword={$keyword}&price={$price}&shop={$shop}";
		$content = file_get_contents($file);
		$res = json_decode($content,true);
		if(empty($res)){
			$res = json_decode(substr($content,3),true);	
		}
		$pages = $res['pages'];
		$data = $res['items'];
		$ldata = $res['gitem'];
		$this->render("index",array('data'=>$data,"ldata"=>$ldata,'pages'=>$pages,'page'=>$tpage));
	}

	public function actionTejia(){
		$this->layout = '//layouts/main';
		$tpage = $page = !empty($_GET['page'])&&is_numeric($_GET['page'])&&$_GET['page']>0 ? $_GET['page'] : 1;
		
		$keyword = !empty($_GET['keyword']) ? $_GET['keyword'] : '';
		$price = !empty($_GET['price']) ? $_GET['price'] : 'all';
		$shop = !empty($_GET['shop']) ? $_GET['shop'] : '';
		$file = $this->niuren."/site/tejiaget?page={$page}&keyword={$keyword}&price={$price}&shop={$shop}";
		$content = file_get_contents($file);
		$res = json_decode($content,true);
		if(empty($res)){
			$res = json_decode(substr($content,3),true);	
		}
		$pages = $res['pages'];
		$data = $res['items'];
		$this->render("tejia",array('data'=>$data,'pages'=>$pages,'page'=>$tpage,'res'=>$res));
	}

	public function actionAdmin($code="",$status=""){
		if(empty($code) || $code!="35418517"){
			$this->redirect("/web/tejia");
		}
		$item_id = isset($_GET['item_id']) ?$_GET['item_id'] : 0;
		$page = isset($_GET['p']) ? $_GET['p'] : 1;
		$status = isset($_GET['status']) ? $_GET['status'] : 0;
		$this->render("admin",array('item_id'=>$item_id,'page'=>$page,'status'=>$status));
	}
	public function actionDoAdmin(){
		$command = Yii::app()->db->createCommand();
		$status = isset($_POST['status']) ? $_POST['status'] : 0;
		if($status == 0){
			//宝贝查询
			if(!empty($_POST['update']) && !empty($_POST['page']) && !empty($_POST['number'])){
				$page = $_POST['page'];
				$num = $_POST['number'];
				$item_id = ($page-1)*20 + $num;
				$res = $command->setText("select * from `huigou_item` where item_id={$item_id} and status=0")->queryRow();
				if(empty($res)){
					$this->redirect("/web/admin?code=35418517&status=0");
					exit;
				}else{
					$this->render("admin",array('data'=>$res,'item_id'=>$item_id,'page'=>$page,'status'=>$status));
					exit;
				}
			}
			//宝贝修改
			if(empty($_POST['page']) || empty($_POST['number']) || empty($_POST['title']) || empty($_POST['pic']) || empty($_POST['price']) || empty($_POST['link']) || empty($_POST['old_price'])){
				$this->redirect("/web/admin?code=35418517&status=0");
				exit;
			}
			$page = $_POST['page'];
			$num = $_POST['number'];
			$item_id = ($page-1)*20 + $num;
			$title = $_POST['title'];
			$pic = $_POST['pic'];
			$price = $_POST['price'];
			$link = $_POST['link'];
			$desc = '';//$_POST['desc'];
			$baoyou = $_POST['baoyou'];
			$old_price = $_POST['old_price'];
			$zhe = round($old_price/$price,1);//$_POST['zhe'];
			$ctime = date('Y-m-d H:i:s',time());
			$res = $command->setText("select * from `huigou_item` where item_id={$item_id} and status=0")->queryRow();
			if(empty($res)){
				$sql = "insert into `huigou_item` (item_id,title,pic,link,price,ctime,`desc`,zhe,baoyou,old_price,status) values('{$item_id}','{$title}','{$pic}','{$link}','{$price}','{$ctime}','{$desc}','{$zhe}','{$baoyou}','{$old_price}','0')";
			}else{
				$sql = "update `huigou_item` set title='{$title}',ctime='{$ctime}',pic='{$pic}',link='{$link}',price='{$price}',`desc`='{$desc}',zhe='{$zhe}',baoyou='{$baoyou}',old_price='{$old_price}' where item_id='{$item_id}' and status='0'";
			}
			$command->setText($sql)->execute();
			$num += 1;
			$this->redirect("/web/admin?code=35418517&item_id={$num}&p={$page}&status=0");
			exit;
		}else if($status == 1){
			//宝贝查询
			if(!empty($_POST['update']) && !empty($_POST['number'])){
				$item_id = $_POST['number'];
				$res = $command->setText("select * from `huigou_item` where item_id={$item_id} and status=1")->queryRow();
				if(empty($res)){
					$this->redirect("/web/admin?code=35418517&status=1");
					exit;
				}else{
					$this->render("admin",array('data'=>$res,'item_id'=>$item_id,'status'=>$status));
					exit;
				}
			}
			//宝贝修改
			if(empty($_POST['number']) || empty($_POST['title']) || empty($_POST['pic']) || empty($_POST['price']) || empty($_POST['link']) || empty($_POST['desc'])){
				$this->redirect("/web/admin?code=35418517&status=1");
				exit;
			}
			$item_id = $_POST['number'];
			$title = $_POST['title'];
			$pic = $_POST['pic'];
			$price = $_POST['price'];
			$link = $_POST['link'];
			$desc = $_POST['desc'];
			$ctime = date("Y-m-d H:i:s");
			$res = $command->setText("select * from `huigou_item` where item_id={$item_id} and status=1")->queryRow();
			if(empty($res)){
				$sql = "insert into `huigou_item` (item_id,title,pic,link,price,ctime,`desc`,status) values('{$item_id}','{$title}','{$pic}','{$link}','{$price}','{$ctime}','{$desc}','{$status}')";
			}else{
				$sql = "update `huigou_item` set title='{$title}',ctime='{$ctime}',pic='{$pic}',link='{$link}',price='{$price}',`desc`='{$desc}' where item_id='{$item_id}' and status='1'	";
			}
			$command->setText($sql)->execute();
			$item_id += 1;
			$this->redirect("/web/admin?code=35418517&item_id={$item_id}&status=1");
			exit;
		}else if($status == 2){
			//宝贝查询
			if(!empty($_POST['update']) && !empty($_POST['number'])){
				$item_id = $_POST['number'];
				$res = $command->setText("select * from `huigou_item` where item_id={$item_id} and status=2")->queryRow();
				if(empty($res)){
					$this->redirect("/web/admin?code=35418517&status=2");
					exit;
				}else{
					$this->render("admin",array('data'=>$res,'item_id'=>$item_id,'status'=>$status));
					exit;
				}
			}
			//宝贝修改
			if(empty($_POST['number']) || empty($_POST['title']) || empty($_POST['pic']) || empty($_POST['link']) || empty($_POST['desc'])){
				$this->redirect("/web/admin?code=35418517&status=2");
				exit;
			}
			$item_id = $_POST['number'];
			$title = $_POST['title'];
			$pic = $_POST['pic'];
			$link = $_POST['link'];
			$desc = $_POST['desc'];
			$ctime = date('Y-m-d H:i:s',time());
			$res = $command->setText("select * from `huigou_item` where item_id={$item_id} and status=2")->queryRow();
			if(empty($res)){
				$sql = "insert into `huigou_item` (item_id,title,pic,link,ctime,`desc`,status) values('{$item_id}','{$title}','{$pic}','{$link}','{$ctime}','{$desc}','{$status}')";
			}else{
				$sql = "update `huigou_item` set title='{$title}',ctime='{$ctime}',pic='{$pic}',link='{$link}',`desc`='{$desc}' where item_id='{$item_id}' and status='2'	";
			}
			$command->setText($sql)->execute();
			$item_id += 1;
			$this->redirect("/web/admin?code=35418517&item_id={$item_id}&status=2");
			exit;
		}else{
			
		}
		$this->redirect("/web/admin?code=35418517&item_id={$item_id}&status={$status}");
	}

	public function actionShop(){
		$page = !empty($_GET['page'])&&is_numeric($_GET['page'])&&$_GET['page']>0? $_GET['page'] : 1;
		$keyword = !empty($_GET['keyword']) ? $_GET['keyword'] : '';
		$file = $this->niuren."/site/qijianshopget?page={$page}&keyword={$keyword}";
		$content = file_get_contents($file);
		$info = json_decode($content,true);
		if(empty($info)){
			$info = json_decode(substr($content,3),true);	
		}
		$pages = $info['pages'];
		$users = $info['items'];
		$this->render("shop",array('users'=>$users,'pages'=>$pages,'page'=>$page));
	}

	public function actionTemai(){
		$this->render("temai");
	}

	public function actionDetail(){
		$from = isset($_GET['from']) ? $_GET['from'] : "";
		$id = isset($_GET['id']) ? $_GET['id'] : "";
		$sid = isset($_GET['sid']) ? $_GET['sid'] : "";
		$iid = isset($_GET['iid']) ? $_GET['iid'] : "";
		$cid = isset($_GET['cid']) ? $_GET['cid'] : 0;
		$did = isset($_GET['did']) ? $_GET['did'] : 0;//detail_id
		
		if( $from != "tbd" ||(empty($id) && empty($sid))){
			$this->redirect("index");
			exit;
		}
	    $url = "http://i.haodianpu.com/best/bdtg/tongji?id={$id}&did={$did}&sid={$sid}&rdm=".time();
	    $route = @file_get_contents( $url );
	    empty($route) && $route = "http://www.aisoupin.com/";
	    $route .= ( strstr($route, "?") == "" ? "?" : "&" ) . "from=tg"; 
	    if( strstr($route, "shop") ) {            
	        if( preg_match('/shop([\d]{5,12})\.taobao\.com/', $route, $match)) {
	            $sid = $match[1];
	        }
	    }
	    if( strstr($route, "item.taobao.com") ) {          
	        if( preg_match('/id=([\d]{9,12})\S+(?:\.0|&sid=(\d{6,12}))/', $route, $match)) {
	            $iid = $match[1];
				$sid = !empty($match[2]) ? $match[2] : '';
	        }
	    }  
		
		$file = $this->niuren."/site/shopget?sid={$sid}";
		$content = file_get_contents($file);
		
		$res = json_decode($content,true);

		if(empty($res)){
			$res = json_decode(substr($content,3),true);	
		}
		$data = array();
		while(1){
			if(count($data) > 20){
				break;
			}
			$data = array_merge($data,$res['items']);
		}
		$res['items'] = array_slice($data, 0,20);
		$this->render("detail",array("route"=>$route,"data"=>$res));
	}

	public function actionAbout(){
		$this->render("about");
	}
}
?>