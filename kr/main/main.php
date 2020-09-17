<? include("../inc/head.php"); ?>
<body id="main">
<div id="wrap">
	<? include("../inc/top.php"); ?>
	<script type="text/javascript" src="../js/jquery.DB_slideStepBanner.min.js"></script>

	<!-- Hot Product -->
	<div id="hot_product">
		<div class="rolling_banner">
			<div class="DB_mask">
				<ul class="DB_imgSet">
					<li>
						<a href="../product/qsrm.php?PN=3&SN=0&ssN=1">
							<img src="../images/main/hot_prod_img_0.png" class="img" alt=""/>
							<p class="tit">QSRM</p>
							<p class="txt">QSRM은 다양하고 복잡한 방화벽 정책을 통합관리하여 효율적인 정책관리를 가능하게 합니다.</p>
						</a>
					</li>
					<li>
						<a href="../product/index.php?PN=3&SN=1&ssN=1#arcsight">
							<img src="../images/main/hot_prod_img_1.png" class="img" alt=""/>
							<p class="tit">ArcSight</p>
							<p class="txt">ArcSight는 모든 IT자원들로 부터의 Log 수집, 통합, 상관관계, 협업에 대한 결과물을 도출하여 위험을 사전에 대비할 수 있습니다.</p>
						</a>
					</li>
					<li>
						<a href="../product/savvius.php?PN=3&SN=1&ssN=5">
							<img src="../images/main/hot_prod_img_4.png" class="img" alt=""/>
							<p class="tit">Vigil</p>
							<p class="txt">SIEM/IDS/IPS의 보안 이벤트와 연동하여 지능적으로 패킷을 저장합니다. 유용한 패킷만을 선별·분류하여 저장된 패킷은 장기간의 보안 사건 조사를 가능하게 합니다.</p>
						</a>
					</li>
					<li>
						<a href="../product/index.php?PN=3&SN=1&ssN=1#fortify">
							<img src="../images/main/hot_prod_img_3.png" class="img" alt=""/>
							<p class="tit">Fortify</p>
							<p class="txt">개발 라이프 사이클에 대응하는 시큐어코딩 솔루션으로 정적 진단, 동적 진단 통합 분석을 통해 애플리케이션의 보안 취약점을 개발 단계에서 제거할 수 있습니다.</p>
						</a>
					</li>
				</ul>
			</div>
			<span class="DB_prevBtn"><img src="../images/main/btn_arrow_prev.png" alt="next"/></span>
			<span class="DB_nextBtn"><img src="../images/main/btn_arrow_next.png" alt="prev"/></span>		
		</div>
		<script type="text/javascript">
				$('.rolling_banner').DB_slideStepBanner({
					moveSpeed:500,                  //이동속도
					autoRollingTime:5000            //자동롤링시간(밀리초)
				})
		</script>
		
	</div>
	<!-- //Hot Product -->
	
	<!-- 슬라이드 이벤트 -->
    <div id="main_visual">		
        <ul class="DB_img">
            <li><img src="../images/main/main_visual_1.jpg" alt=""></li>
            <li><img src="../images/main/main_visual_2.jpg" alt=""></li>
            <li><img src="../images/main/main_visual_3.jpg" alt=""></li>
        </ul>
        <ul class="DB_menu">
            <li><img src="../images/main/btn_page_off.png" alt=""/></li>
            <li><img src="../images/main/btn_page_off.png" alt=""/></li>
            <li><img src="../images/main/btn_page_off.png" alt=""/></li>
        </ul>
		<!--
        <div class="DB_dirBtn">
            <span class="DB_prev"><img src="../images/main/prevBtn_off.png" alt=""/></span>
            <span class="DB_next"><img src="../images/main/nextBtn_off.png" alt=""/></span>
        </div>
		-->
    </div>
    <script type="text/javascript">
            $('#main_visual').DB_tabFadeWide({
                motionSpeed:500,        //모션속도
                autoRollingTime:2000    //자동롤링속도(밀리초)
            })
    </script>
	<!-- //슬라이드 이벤트 -->

	<div id="main_container">	
	
		<!-- 회사소개 -->
		<div class="aboutus_area">
			<h3>회사소개</h3>
			<ul>
				<li>
					<a href="../company/index.php?PN=1&SN=1">
						<img src="../images/main/about_icon_1.png" alt="">
						<p class="tit">회사소개</p>
						<p class="txt">최고의 품질과 서비스를 제공 해드리기 위해 노력하겠습니다.</p>
					</a>
				</li>
				<li>
					<a href="../company/recruit.php?PN=1&SN=4">
						<img src="../images/main/about_icon_2.png" alt="">
						<p class="tit">인재채용</p>
						<p class="txt">젊은 IT기업 쿼리시스템즈와 함께 미래를 만들어 가십시요.</p>
					</a>
				</li>
			</ul>
		</div>
		<!-- //회사소개 -->
	
		<!-- 서비스 -->
		<div class="service_area">
			<h3>서비스</h3>
			
			<div class="service_banner">
				<div class="DB_mask">
					<ul class="DB_imgSet">
						<li>
							<a href="../service/index.php?PN=2&SN=1">
								<img src="../images/main/service_img_1.png" class="img" alt=""/>
								<p class="tit">보안컨설팅</p>
								<p class="txt">고객 인프라 분석을 통한 컨설팅으로 가장 적합한 보안시스템  및 중장기 로드맵을 구현할 수 있도록 전문 엔지니어 서비스를 제공합니다.</p>
							</a>
						</li>
						<li>
							<a href="../service/service5.php?PN=2&SN=5">
								<img src="../images/main/service_img_2.png" class="img" alt=""/>
								<p class="tit">IT인프라 운영관리</p>
								<p class="txt">정보시스템 통합유지보수 및 위탁운영 통합 운영체계에 맞는 전문 인력과 체계를 바탕으로 24시간 365일 무중단 서비스를 제공합니다.</p>
							</a>
						</li>
					</ul>
				</div>
				<span class="DB_prevBtn"><img src="../images/main/btn_arrow_prev2.png" alt="next"/></span>
				<span class="DB_nextBtn"><img src="../images/main/btn_arrow_next2.png" alt="prev"/></span>		
			</div>
			<script type="text/javascript">
					$('.service_banner').DB_slideStepBanner({
						moveSpeed:500,                  //이동속도
						autoRollingTime:5000            //자동롤링시간(밀리초)
					})
			</script>

		</div>
		<!-- //서비스 -->
	
		<!-- 빠른서비스 -->
		<ul class="quick_area">
			<li>
				<a href="../customer/index.php?PN=4&SN=1">
					<img src="../images/main/quick_icon_1.png" class="img" alt=""/>
					<p class="tit">연락처</p>
					<p class="txt">쿼리시스템즈 연락처 바로가기</p>
				</a>
			</li>
			<li>
				<a href="../customer/location.php?PN=4&SN=2">
					<img src="../images/main/quick_icon_2.png" class="img" alt=""/>
					<p class="tit">오시는길</p>
					<p class="txt">쿼리시스템즈 오시는길 바로가기</p>
				</a>
			</li>
			<li class="last">
				<a href="http://helpu.kr/quarry/" target="_blank">
					<img src="../images/main/quick_icon_3.png" class="img" alt=""/>
					<p class="tit">원격지원</p>
					<p class="txt">원격지원으로 빠른 서비스 제공</p>
				</a>
			</li>
		</ul>
		<!-- //빠른서비스 -->
	
		<!-- 고객센터 -->
		<div class="customer_area">
			<img src="../images/main/customer_img.png" alt="고객센터 : 연락처-02-421-8858">
		</div>
		<!-- //고객센터 -->

	</div>
	<? include("../inc/footer.php"); ?>
</div>
</body>
</html>
