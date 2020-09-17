<?php 
  $loc = $_GET['loc'];
  $user = $_GET['user'];

	if(!$loc || !$user) {
	  echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">잘못된 경로로 접근하였습니다.';
      return 0;
	}
?>
<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>사이버침해대응 모의훈련</title>
    <style type="text/css">
	  body { margin:0; font-family:'Malgun Gothic';}
	  .center { position:absolute; top:30px; left:50%; width:1000px; height:900px; overflow:hidden; margin-left:-500px; }
	  a { font-size: 20px; font-weight: bold; display: block; margin: auto; text-decoration: none; padding: 8px 12px; border-radius: 5px; }
	  a.button { color: #ffffff; background-color: #1b4792; width: 160px; }
	  a.button:hover { color: #ffffff; background-color: #069edb; }
	  .block-box { border: 2px solid #1b4792; margin-top: 56px; border-radius: 5px; }	
	  .block-title { font-size: 24px; color: #fff; font-weight: bold; text-align:center; padding: 10px; background-color: #1b4792;}
	  .block-info { font-size: 20px; color: #444; font-weight: bold; text-align:center; padding: 20px; }
  	  .block-info-content { color: #F54C4C; }
	  .stress { background-color: #ee6500; font-size: 24px; color: #ffffff; font-weight: bold; text-align:center; padding: 16px; margin-top: 24px; border-radius: 5px; }
	  .info { margin-top: 28px; font-size: 18px; font-weight: bold; color: #333333; line-height: 16px; }
	  .info li { margin-bottom: 16px; }
	  .info-plus { color: #0e598d; font-weight: bold; }
	  .request { width: 1000px; font-size: 20px; color: #444444; font-weight: bold; text-align:center; padding: 10px; margin-top: 10px; border-radius: 5px; }
	  .declaration { width: 1000px; text-align: center; margin-top: 364px; border-radius: 5px; }
	  .box-title { width: 200px; background-color: #badef0; padding-top: 40px; font-size: 20px; color: #444444; font-weight: bold; text-align: center; height: 96px; float: left;}
	  .box-content { width: 800px; background-color: #eeeeee; height: 136px; float: left;}
    </style>
  </head>
  <body>
    <div class="center">
		<div style="float: left;">
		  <img src="./logo.png" width="360" />
        </div>
		<div class="block-box">
		  <div class="block-title">사이버침해대응 모의훈련</div>
		  <div class="block-info">
			본 화면은 운영지원실에서 실시하는 <span class="block-info-content">해킹메일 모의훈련</span> 화면입니다.
		  </div>
		</div>
		<div class="stress">
			실제 상황이면 당신의 PC는 악성코드에 감염되었을 것입니다.
		</div>
		<div class="block-box" style="margin-top: 20px; margin-bottom: 20px;">
		  <div class="block-info">
			본 메일과 첨부파일은 악성메일 모의훈련과 관련하여 발송한 훈련용 메일이며<br />사용자 PC에 어떠한 영향도 주지 않습니다.<br />
			<span class="block-info-content">출처가 불분명하거나 현혹하는 메일은 열어보지 말고 바로 삭제합시다.</span>
		  </div>
		</div>
		<div class="box-title">
			의심스러운<br />전자 메일 종류
		</div>
		<div class="box-content">
			<ul class="info">
			  <li>첨부파일 확장자 보기로 설정 및 exe, bat, com, scr 등 파일 실행 금지</li>
			  <li>의심되는 URL 접근금지</li>
			  <li>첨부파일 저장 시 아이콘으로 해당 파일 확인 금지 </li>
			</ul>
		</div>
		<div class="box-title" style="margin-top: 20px; height: 126px;">
			전자메일<br />사용시 주의사항
		</div>
		<div class="box-content" style="margin-top: 20px; height: 166px; margin-bottom: 20px;">
			<ul class="info">
			  <li>출처가 불명확한 메일은 열람하지 말고 삭제</li>
			  <li>메일을 열람하더라도 URL 링크는 클릭하거나 실행 금지</li>
			  <li>의심스러운 첨부 파일은 저장하거나 실행 금지</li>
			  <li>최신 백신 설치 및 자동 검색, 자동 업데이트 기능 설정</li>
			</ul>
		</div>
		<div class="declaration">
			<a href="submit.php?loc=<?=$loc?>&user=<?=$user?>" target="_blank" class="button">신고하기</a>
		</div>
		<div class="request">
			문의사항: 홍보전삼팀(전산담당) 조현희 과장 (T : 031-259-6057)
		</div>
	</div>
  </body>
</html>
