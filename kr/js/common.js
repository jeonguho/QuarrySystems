/*---------------------------------------------------------
				디자이너 전용 스크립트 시작
---------------------------------------------------------*/
//1. PNG 패치
function setPng24(obj)
{
	obj.width=obj.height=1;
	obj.className=obj.className.replace(/\bpng24\b/i,'');
	obj.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+ obj.src +"',sizingMethod='image');"
	obj.src='';
	return '';
}

//2. 롤오버 스크립트
var gony_rollover_preImage = new Array;

function gony_rollover(){
        var i, len = document.images.length;
        var obj, overmode, oversrc;
        
        for(i = 0; i < len; i++){
                obj = document.images[i];
                overmode = obj.getAttribute('overmode');
                oversrc = obj.getAttribute('oversrc');

                switch(overmode){
                        case 'gray_color':
                                obj.style.filter = 'gray';
                                obj.onmouseover = new Function("this.style.filter=''");
                                obj.onmouseout = new Function("this.style.filter='gray'");
                                break;
                        case 'color_gray':
                                obj.onmouseover = new Function("this.style.filter='gray'");
                                obj.onmouseout = new Function("this.style.filter=''");
                                break;
                        case 'overlay':
                                if(oversrc){
                                        obj.style.filter = "blendTrans(duration=1)";
                                        obj.onmouseover = new Function("this.filters.blendTrans.Apply(); this.src='"+oversrc+"'; this.filters.blendTrans.Play()");
                                        obj.onmouseout = new Function("this.filters.blendTrans.Apply(); this.src='"+obj.src+"'; this.filters.blendTrans.Play()");
                                        gony_rollover_preImage[gony_rollover_preImage.length] = oversrc;
                                }
                                break;
                        default:
                                if(oversrc){
                                        obj.onmouseover = new Function("this.src='"+oversrc+"'");
                                        obj.onmouseout = new Function("this.src='"+obj.src+"'");
                                        gony_rollover_preImage[gony_rollover_preImage.length] = oversrc;
                                }
                }
        }
        gony_preload();
}
function gony_preload(){
        var i, len = gony_rollover_preImage.length;
        var image_object = new Image;

        for(i = 0; i < len; i++) image_object.src = gony_rollover_preImage[i];
}

window.onload = gony_rollover;

//3. 플래시패치/

function MakeFlash(Url,Width,Height){                 
  document.writeln("<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0\" width=\"" + Width + "\" height=\"" + Height + "\">"); 
  document.writeln("<param name=\"movie\" value=\"" + Url + "\">"); 
  document.writeln("<param name=\"quality\" value=\"high\" />");     
  document.writeln("<param name=\"wmode\" value=\"transparent\">"); 
  document.writeln("<embed src=\"" + Url + " \"wmode=\"transparent\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"" + Width + "\"  height=\"" + Height + "\">"); 
  document.writeln("</object>");     
} 


//4. 레이어팝업


$(document).ready(function(){
						   		   
	//When you click on a link with class of poplight and the href starts with a # 
	$('a.poplight[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Pull Query & Variables from href URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value

		//Fade in the Popup and add close button
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="../images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Define margin for center alignment (vertical + horizontal) - we add 80 to the height/width to accomodate for the padding + border width defined in the css
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Apply Margin to Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade in Background
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Close Popups and Fade Layer
	$('a.close, #fade').live('click', function() { //When clicking on the close or fade layer...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //fade them both out
		
		return false;
	});

	
});




//5. 상단메뉴 

function menu_set(mn,sn,cn,evt1,evt2){
	  
	  var dep1 = null;
	  var dep2 = null;
	  var dep2_left = null;
	  var dep3 = null;
	  var chk1=null;
	  var chk2=null;
	  var chk2_left=null;
	  var chk3=null;
	  var id=null;

	  if($('ul[id=top_menu]')){
		dep1 = $('#top_menu .dep1');
		dep2 = $('#top_menu .dep2');
		dep2.find('>li').addClass('off');
		dep1.find('>a').keyup(function(e){clearId();chk2=null;if(chk1!=$(this).parent().index()){chk1=$(this).parent().index();chk_dep1();}});
		dep2.find('>li>a').keyup(function(e){clearId();chk2=$(this).parent().index();chk_dep2();});
		if(evt1==0 || evt1==null){dep1.find('>a').on('mouseenter',function(e){clearId();dep2.find('>li').removeClass('on').addClass('off');chk2=null;if(chk1!=$(this).parent().index()){chk1=$(this).parent().index();chk_dep1();}});};
		if(evt1==1){dep1.find('>a').on('mouseenter',function(e){clearId();dep2.find('>li').removeClass('on').addClass('off');chk2=null;});dep1.find('>a').on('click',function(e){if(chk1!=$(this).parent().index()){chk1=$(this).parent().index();chk_dep1();}});};
		dep1.find('>a').on('mouseleave',function(e){autoChk();});
		dep2.find('>li>a').on('mouseenter',function(e){clearId();chk2=$(this).parent().index();chk_dep2();});
		dep2.find('>li>a').on('mouseleave',function(e){autoChk();});
		function autoChk(){id=setInterval(function(){chkDepth()},500);};
		function chkDepth(){if(mn==null || mn==0){dep1.removeClass('on').addClass('off');dep2.find('>li').removeClass('on').addClass('off');dep2.clearQueue().stop().slideUp(0);return}else{clearId();chk1=mn-1;chk2=sn-1;if(!dep1.eq(chk1).hasClass('on')){chk_dep1();};chk_dep2();}};chkDepth();
		function chk_dep1(){if(dep1.eq(chk1).children('.dep2')){dep2.clearQueue().stop().slideUp(0); dep1.eq(chk1).children('.dep2').clearQueue().finish().slideDown();};dep1.removeClass('on').addClass('off');dep1.eq(chk1).removeClass('off').addClass('on')};
		function chk_dep2(){dep2.find('>li').removeClass('on').addClass('off');dep2.eq(chk1).find('>li').eq(chk2).removeClass('off').addClass('on');};
	  }

	  if($('ul[id=left_menu]')){
		dep2_left = $('#left_menu .dep2');
		dep3 = $('#left_menu .dep3');
		dep2_left.find('>a').keyup(function(e){clearId();chk3=null;if(chk2_left!=$(this).parent().index()){chk2_left=$(this).parent().index();chk_dep2_left();}});
		dep3.find('>li>a').keyup(function(e){clearId();chk3=$(this).parent().index();chk_dep3();});
		if(evt2==0 || evt2==null){dep2_left.find('>a').on('mouseenter',function(e){clearId();chk3=null;if(chk2_left!=$(this).parent().index()){chk2_left=$(this).parent().index();chk_dep2_left();}});};
		if(evt2==1){dep2_left.find('>a').on('mouseenter',function(e){clearId();});dep2_left.find('>a').on('click',function(e){chk3=null;if(chk2_left!=$(this).parent().index()){chk2_left=$(this).parent().index();chk_dep2_left();}});};
		dep2_left.find('>a').on('mouseleave',function(e){autoChk2();});
		dep3.find('>li>a').on('mouseenter',function(e){clearId();chk3=$(this).parent().index();chk_dep3();});
		dep3.find('>li>a').on('mouseleave',function(e){autoChk2();});
		function autoChk2(){id=setInterval(function(){chkDepth_left()},500);};
		function chkDepth_left(){if(sn==null || sn==0){return};clearId();chk2_left=sn-1;chk3=cn-1;if(!dep2_left.eq(chk2_left).hasClass('on')){chk_dep2_left();};chk_dep3();};chkDepth_left();
		function chk_dep2_left(){if(dep2_left.eq(chk2_left).children('.dep3')){dep3.clearQueue().stop().slideUp();dep2_left.eq(chk2_left).children('.dep3').clearQueue().finish().slideDown();};dep2_left.removeClass('on').addClass('off');dep2_left.eq(chk2_left).removeClass('off').addClass('on')};
		function chk_dep3(){dep3.find('>li').removeClass('on').addClass('off');dep2_left.eq(chk2_left).children('.dep3').find('>li').eq(chk3).removeClass('off').addClass('on');};
	  }

	  function clearId(){if(id){clearInterval(id);}};
}
		



/*---------------------------------------------------------
				디자이너 전용 스크립트 끝
---------------------------------------------------------*/