var LIST_LI = 1;
var LIST_LI_TOTAL = 3;
$(function(){
	$("#file_search").val($("#file_path").val());
	if($("#file_path").val() ==1){
		$("#post_file").attr("action","asp.php");
	}else if($("#file_path").val() ==2){
		$("#post_file").attr("action","remai.php");
	}else{
		$("#post_file").attr("action","tejia.php");
	}
	$(".banner_list li").eq(0).css("z-index",1).css("opacity",1);
	$(".round a").eq(0).css("background-color","#fb4472");
	setInterval(function(){
		listGo();
		LIST_LI = LIST_LI>=LIST_LI_TOTAL-1 ? 0 : LIST_LI+1;
	},3000);
	$(".round a").click(function(){
		var index = $(this).index();
		LIST_LI = index;
		listGo();
	});
	$(".banner_list,.banner_arrow").mouseover(function(){
		$(".banner_arrow").css("display","block");
	}).mouseout(function(){
		$(".banner_arrow").css("display","none");
	});
	$(".banner_arrow .arrow_prev").click(function(){
		LIST_LI = LIST_LI<=0 ? LIST_LI_TOTAL-1 : LIST_LI-1;
		listGo();
	});
	$(".banner_arrow .arrow_next").click(function(){
		LIST_LI = LIST_LI>=LIST_LI_TOTAL-1 ? 0 : LIST_LI+1;
		listGo();
	});
	$(".item-row").mouseover(function(){
		var index = $(this).index();
	});
});
function listGo(){
	$(".banner_list li").css("z-index",0).css("opacity",0);
	$(".round a").css("background-color","#e2e2e2");

	$(".banner_list li").eq(LIST_LI).css("z-index",1).css("opacity",1);
	$(".round a").eq(LIST_LI).css("background-color","#fb4472");
}
(function($){
	var ms = {
		init:function(obj,args){
			return (function(){
				ms.fillHtml(obj,args);
				ms.bindEvent(obj,args);
			})();
		},
		//填充html
		fillHtml:function(obj,args){
			return (function(){
				obj.empty();
				//上一页
				if(args.current > 1){
					obj.append('<a href="javascript:;" class="prevPage">上一页</a>');
				}else{
					obj.remove('.prevPage');
					obj.append('<span class="disabled">上一页</span>');
				}
				//中间页码
				if(args.current != 1 && args.current >= 4 && args.pageCount != 4){
					obj.append('<a href="javascript:;" class="tcdNumber">'+1+'</a>');
				}
				if(args.current-2 > 2 && args.current <= args.pageCount && args.pageCount > 5){
					obj.append('<span>...</span>');
				}
				var start = args.current -2,end = args.current+2;
				if((start > 1 && args.current < 4)||args.current == 1){
					end++;
				}
				if(args.current > args.pageCount-4 && args.current >= args.pageCount){
					start--;
				}
				for (;start <= end; start++) {
					if(start <= args.pageCount && start >= 1){
						if(start != args.current){
							obj.append('<a href="javascript:;" class="tcdNumber">'+ start +'</a>');
						}else{
							obj.append('<span class="current">'+ start +'</span>');
						}
					}
				}
				if(args.current + 2 < args.pageCount - 1 && args.current >= 1 && args.pageCount > 5){
					obj.append('<span>...</span>');
				}
				if(args.current != args.pageCount && args.current < args.pageCount -2  && args.pageCount != 4){
					obj.append('<a href="javascript:;" class="tcdNumber">'+args.pageCount+'</a>');
				}
				//下一页
				if(args.current < args.pageCount){
					obj.append('<a href="javascript:;" class="nextPage">下一页</a>');
				}else{
					obj.remove('.nextPage');
					obj.append('<span class="disabled">下一页</span>');
				}
			})();
		},
		//绑定事件
		bindEvent:function(obj,args){
			return (function(){
				obj.on("click","a.tcdNumber",function(){
					var current = parseInt($(this).text());
					ms.fillHtml(obj,{"current":current,"pageCount":args.pageCount});
					if(typeof(args.backFn)=="function"){
						args.backFn(current);
					}
				});
				//上一页
				obj.on("click","a.prevPage",function(){
					var current = parseInt(obj.children("span.current").text());
					ms.fillHtml(obj,{"current":current-1,"pageCount":args.pageCount});
					if(typeof(args.backFn)=="function"){
						args.backFn(current-1);
					}
				});
				//下一页
				obj.on("click","a.nextPage",function(){
					var current = parseInt(obj.children("span.current").text());
					ms.fillHtml(obj,{"current":current+1,"pageCount":args.pageCount});
					if(typeof(args.backFn)=="function"){
						args.backFn(current+1);
					}
				});
			})();
		}
	}
	$.fn.createPage = function(options){
		var args = $.extend({
			pageCount : 10,
			current : 1,
			backFn : function(){}
		},options);
		ms.init(this,args);
	}
})(jQuery);
