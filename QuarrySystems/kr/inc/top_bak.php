<?
	//GNG 서브 메뉴 보이기
	$selLeft=$PN-1;
?>

<script type="text/javascript">
$(function(){
<? if($PN !=""){?>
	$(".depth2 ul").eq("<?=($PN-1)?>").show();
<? } ?>
	$('.depth1 .menu').mouseover(function(){
		$(".depth2 ul").eq("<?=($PN-1)?>").hide();
		$('ul[class^=smenu]').eq($('.depth1 .menu').index(this)).show();
	});
	$('.depth1 ul li, ul[class^=smenu]').mouseout(function(){
		$('ul[class^=smenu]').hide();
	<? if($PN !=""){?>
		$(".depth2 ul").eq("<?=($PN-1)?>").show();
	<? } ?>
	});

	$('ul[class^=smenu]').mouseover(function(){
		$(".depth2 ul").eq("<?=($PN-1)?>").hide();
		$(this).show();
	});
});
</script>

<div id="top_nav">
	<div class="depth1">
		 <h1><a href="../main/main.php"></a></h1>
		 <p class="util"><a href="">ENGLISH</a></p>
		 <ul>
			<li class="menu"><a href="../aboutus/index.php?PN=1&SN=1" class="nav<?=$PN1;?>">회사소개</a></li>
			<li class="menu"><a href="../product/index.php?PN=2&SN=1" class="nav<?=$PN2;?>">제품소개</a></li>
			<li class="menu"><a href="../manual/index.php?PN=3&SN=1" class="nav<?=$PN3;?>">제품사용법</a></li>
			<li class="menu"><a href="../estimate/index.php?PN=4&SN=1" class="nav<?=$PN4;?>">제품 & 견적문의</a></li>
			<li class="menu"><a href="../community/index.php?PN=5&SN=1" class="nav<?=$PN5;?>">커뮤니티</a></li>
		</ul>		 
	</div>
	<!--
	<div class="depth2" style="display:none;">
		<ul style="display:none;" class="smenu1">
			<li><a href="/p-start/project.php?PN=1">프로젝트 만들기</a></li>
			<li><a href="/p-start/find_directory.php?PN=1">디렉토리 찾기</a></li>
			<li><a href="/p-start/case.php?PN=1">온라인스태핑 기업적용 사례</a></li>	
		</ul>
		<ul style="display:none;" class="smenu2">
			<li><a href="/p-list/index.php?PN=2">내 기술관련 프로젝트</a></li>
			<li><a href="/p-list/bookmark_project.php?PN=2">북마크</a></li>		
			<li><a href="/p-list/project_search.php?PN=2">프로젝트 찾아보기</a></li>	
			<li><a href="/p-list/all_project.php?PN=2">전체 프로젝트 보기</a></li>		
		</ul>
		<ul style="display:none;" class="smenu3">
			<li><a href="/myproject/index.php?PN=3">내 프로젝트</a></li>
			<li><a href="/myproject/project_list_1.php?PN=3">지원한 프로젝트</a></li>		
			<li><a href="/myproject/message.php?PN=3">메시지함</a></li>			
		</ul>
		<ul style="display:none;" class="smenu4">
			<li><a href="/help/index.php?PN=4">원더위즈 사용방법</a></li>
			<li><a href="/help/index.php?PN=4">프리랜서 사용방법</a></li>
			<li><a href="/help/index.php?PN=4">클라이언트 사용방법</a></li>
			<li><a href="/help/faq.php?PN=4">자주하는 질문 (FAQ)</a></li>		
			<li><a href="/help/dispute.php?PN=4">분쟁관련</a></li>	
		</ul>
		<ul style="display:none;" class="smenu5">
			<li><a href="/research/index.php?PN=5">온라인 스태핑 트렌드</a></li>
			<li><a href="/research/index.php?PN=5">온라인 스태핑 리포트</a></li>
			<li><a href="/research/index.php?PN=5">연간 주요보고서</a></li>
			<li><a href="/research/index.php?PN=5">설문조사 결과</a></li>		
		</ul>
		<ul style="display:none;" class="smenu6">
			<li><a></a></li>	
		</ul>
		<ul style="display:none;" class="smenu7">
			<li><a href="/mypage/transaction_1.php?PN=7">거래내역</a></li>	
			<li><a href="/mypage/transaction_3_2.php?PN=7">출금요청</a></li>	
			<li><a href="/mypage/message.php?PN=7">메시지함</a></li>	
			<li><a href="/mypage/minfo_individual.php?PN=7">개인정보 확인/수정</a></li>	
			<li><a href="/mypage/profile_view.php?PN=7">프로필 확인/수정</a></li>	
			<li><a href="/mypage/payment_1.php?PN=7">멤버쉽</a></li>	
			<li><a href="/mypage/contact.php?PN=7">1:1문의</a></li>	
			<li><a href="">로그아웃 </a></li>		
		</ul>
	</div>
	-->
</div>