var thisheight=500;

$(function() {
	$("#centerFrame").load(
			function() {
				var main = $(window.document).find("#centerFrame");
				thisheight = $(window.parent.document).height();
				if ($.browser.msie && ($.browser.version == "6.0")
						&& !$.support.style) {
					main.height(thisheight*0.70);
				} else if ($.browser.msie && ($.browser.version == "8.0")
						&& !$.support.style) {
					thisheight=thisheight*0.73;
					main.height(thisheight*0.76);
				} else if (($.browser.version == "10.0")) {
					thisheight=thisheight*0.65;
				}else {
					thisheight=thisheight*0.74;
				}
			});
	
	$('#menu').bind('click', showMenu);
	$('#overlay_startmenu').click(function(){
		
        if($('.menuwrap:visible').length)
        {
           $('#overlay_startmenu').hide();
           $(".menuwrap").slideUp('fast');
          
        }
     });
	
		
	
})
/*获取高度*/
function autoheight()
{
	thisheight = $(window.parent.document).height();
	if ($.browser.msie && ($.browser.version == "6.0")) {
	} else if ($.browser.msie && ($.browser.version == "8.0")) {
		thisheight=thisheight*0.73;
	} else if (($.browser.version == "10.0")) {
		thisheight=thisheight*0.70;
	}else {
		thisheight=thisheight*0.75;
	}
}
/*设置iframe高度*/
function setIframeH()
{
	
				var main = $(window.document).find("#centerFrame");
				thisheight = $(window.parent.document).height();
				if ($.browser.msie && ($.browser.version == "6.0")) {
					main.height(thisheight*0.70);
				} else if ($.browser.msie && ($.browser.version == "8.0")) {
					main.height(thisheight*0.84);
				} else if (($.browser.version == "10.0")) {
					main.height(thisheight*0.84);
				}else {
					main.height(thisheight*0.84);
				}
			
}
function showMenu() {
	var temp = $(".menuwrap").is(":hidden");
	if (temp) {
		$(".menuwrap").slideDown('fast');
	} else {
		$(".menuwrap").slideUp('fast');
	}
	 $('#overlay_startmenu').show();
}
function hideMenu() {
	$(".menuwrap").hide(200);
}
/*添加选项卡*/
function addTab(url, title,id) {

	
	//mask("加载");
	var exitst=null;
	$("#slide .tabbtn").each(function(i)
	{
		if($(this).text().indexOf(title)>-1)
		{
			exitst=i+1;
		}
		
	});
	if(exitst)
    {
		tab.tab(exitst);
		//$("#overLay").remove();
	    //$.powerFloat.hide();
		return;
    }
	autoheight();
	var tag="?";
	if(url.indexOf("?")>0)
    {
		tag="&";
    }
	
	var href="<a id=\"tabiframe\" href=\""+url+""+tag+"h:"+thisheight+"\" rel=\"nofollow iframe\"/>";
	alert(href);
	//title="<img src=\"../hbkh/res/images/house.png\" width=\"16\" height=\"16\"/> "+title;
	tab.add(title,href,true);
	//$(".menuwrap").hide(200);
	//$('#overlay_startmenu').hide();
	
}

