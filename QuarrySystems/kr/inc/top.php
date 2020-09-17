<div id="header">	
	<div class="inner">
		<h1><a href="/kr/main/main.php"><img src="../images/common/logo.png" alt=""></a></h1>
		<script type="text/javascript">
		  $(document).ready(function(){
			 /*EX(mn=1뎁스체크넘버, sn=2뎁스체크넘버, cn=3뎁스체크넘버, evt1=탑메뉴 버튼이벤트설정, evt2=레프트메뉴 버튼이벤트설정)*/
			 var mn=10;
			 var sn=10;
			 var cn=1;
			 var evt1=0;
			 var evt2=0;
			 menu_set(mn,sn,cn,evt1,evt2);
		  });
		</script>
		<!--헤드 인크루드-->
		<ul id='top_menu'>
			<li class='dep1'><a href='../company/index.php?PN=1&SN=1' class="<?=$PN1?>">Our Company</a>
			   <ul class='dep2 n1'>
				 <li><a href='../company/index.php?PN=1&SN=1'>회사소개</a></li>
				 <li><a href='../company/organization.php?PN=1&SN=2'>조직도</a></li>
				 <li><a href='../company/history.php?PN=1&SN=3'>회사연혁</a></li>
				 <li><a href='../company/partner.php?PN=1&SN=5'>파트너</a></li>
				 <li><a href='../company/recruit.php?PN=1&SN=4'>인재채용</a></li>
			   </ul>
			 </li>

			 <li class='dep1'><a href='../service/SeviceSoar.php?PN=2&SN=7' class="<?=$PN2?>">Service</a>
			   <ul class='dep2 n2'>
				 <li><a href='../service/SeviceSoar.php?PN=2&SN=7'>SOAR</a></li>
				 <li><a href='../service/index.php?PN=2&SN=1'>정보보안컨설팅</a></li>
				 <li><a href='../service/service2.php?PN=2&SN=2'>보안관제</a></li>
				 <li><a href='../service/service2.php?PN=2&SN=3'>시스템통합(SI/SM)</a></li>
				 <li><a href='../service/service2.php?PN=2&SN=4'>네트워크통합분석</a></li>
				 <li><a href='../service/service2.php?PN=2&SN=5'>IT인프라 운영관리</a></li>
				 <li><a href='../service/service2.php?PN=2&SN=6'>개발(R&D)</a></li>
			   </ul>
			 </li>

			 <li class='dep1'><a href='../product/qsrm.php?PN=3&SN=0&ssN=1' class="<?=$PN3?>">Product</a>
			   <ul class='dep2 n3'>
				 <li>
					<a href='../product/qsrm.php?PN=3&SN=0&ssN=1' class="tt">QUARRY</a>
					<a href='../product/qsrm.php?PN=3&SN=0&ssN=1' class="dep3">QSRM</a>
					<br>
				 </li>
				 <li class="first">
					<a href='../product/index.php?PN=3&SN=1&ssN=1' class="tt">보안 솔루션</a>
					<a href='../product/index.php?PN=3&SN=1&ssN=1' class="dep3">HPE</a>
					<a href='../product/bluecoat.php?PN=3&SN=1&ssN=3' class="dep3">BLUECOAT</a>
					<a href='../product/rapid7.php?PN=3&SN=1&ssN=4' class="dep3">Rapid7</a>
					<a href='../product/savvius.php?PN=3&SN=1&ssN=5' class="dep3">SAVVIUS</a>
					<a href='../product/piolink.php?PN=3&SN=1&ssN=7' class="dep3">PIOLINK</a>
					<a href='../product/somansa.php?PN=3&SN=1&ssN=8' class="dep3">소만사</a>
          <a href='../product/cososys.php?PN=3&SN=1&ssN=9' class="dep3">CoSoSys</a>
					<br>
				 </li>
				 <li>
					<a href='../product/paloalto.php?PN=3&SN=2&ssN=1' class="tt">네트워크&인프라</a>
					<a href='../product/paloalto.php?PN=3&SN=2&ssN=1' class="dep3">PaloAlto</a>
					<a href='../product/secui.php?PN=3&SN=2&ssN=2' class="dep3">SECUI</a>
					<a href='../product/fortigate.php?PN=3&SN=2&ssN=3' class="dep3">FortiGate</a>
					<a href='../product/brocade.php?PN=3&SN=2&ssN=4' class="dep3">BROCADE</a>
					<a href='../product/piolink_2.php?PN=3&SN=2&ssN=5' class="dep3">PIOLINK</a>
					<br>
				 </li>
				 <li>
					<a href='../product/tmax.php?PN=3&SN=3&ssN=1' class="tt">DB&미들웨어</a>
					<a href='../product/tmax.php?PN=3&SN=3&ssN=1' class="dep3">TMAX</a>
					<br>
				 </li>
				 <li>
					<a href='../product/solutions.php?PN=3&SN=4' class="tt">제안솔루션</a>
					<br>
				 </li>
			   </ul>
			 </li>

			 <li class='dep1'><a href='../customer/index.php?PN=4&SN=1' class="<?=$PN4?>">Contac Us</a>
			   <ul class='dep2 n4'>
				 <li><a href='../customer/index.php?PN=4&SN=1'>연락처</a></li>
				 <li><a href='../customer/location.php?PN=4&SN=2'>오시는길</a></li>
			   </ul>
			 </li>

			 <li class='dep1'><a href='http://helpu.kr/quarry ' target="_blank" class="remote_btn">원격지원</a></li>
		  </ul>		
	</div>
</div>