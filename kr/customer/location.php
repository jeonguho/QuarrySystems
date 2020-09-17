<? include("../inc/header.php"); ?>
<div class="contents">
	<ul class="inner">
		<li>
			<h3 class="h3S1"><span class="red">Quarry systems</span> Location</h3>
			<p class="txt_s2">
				Address : 서울특별시 송파구 백제고분로7길 8-12, 3층 (잠실동, 승현빌딩)<br>
				Tel : 02-421-8858 / Fax : 02-421-8852 / Email : quarry@quarry.kr
			</p>
		</li>
	</ul>
	<div>
		
			<!-- * Daum 지도 - 지도퍼가기 -->
			<!-- 1. 지도 노드 -->
			<div id="daumRoughmapContainer1484231483742" class="root_daum_roughmap root_daum_roughmap_landing"></div>

			<!--
				2. 설치 스크립트
				* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
			-->
			<script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>

			<!-- 3. 실행 스크립트 -->
			<script charset="UTF-8">
				new daum.roughmap.Lander({
					"timestamp" : "1484231483742",
					"key" : "fd4o",
					"mapWidth" : "1200",
					"mapHeight" : "500"
				}).render();
			</script>

	</div>
</div>
<? include("../inc/bottom.php"); ?>