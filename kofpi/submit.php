<?php require 'inc/config.php'; ?>
<?php $loc = $_GET['loc']; ?>
<?php
	if(!$loc) {
	  echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">잘못된 경로로 접근하였습니다. 반드시 메일 본문이나 모의훈련 안내 페이지의 신고하기 버튼을 클릭하여 접근해야 합니다.';
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
    <title>신고하기</title>
	<script src="inc/jquery-1.12.3.min.js"></script>
	<script src="inc/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
    <style type="text/css">
	  body { margin:0; font-family:'Malgun Gothic';}
	  .center { position:absolute; top:50px; left:50%; width:1200px; overflow:hidden; margin-left:-600px; }
	  .block-box { border: 2px solid #187f40; margin-top: 56px; border-radius: 5px; }	
	  .block-title { font-size: 20px; color: #fff; font-weight: bold; text-align:center; padding: 12px; background-color: #187f40;}
	  .block-info { font-size: 18px; color: #444; font-weight: bold; text-align:center; padding: 12px; }
  	  .block-info-content { color: #F54C4C; }
	  .input-area { margin-top: 32px; }
	  .input-title { width: 350px; height: 32px; font-size: 16px; color: #444; font-weight: bold; text-align: center; padding: 10px; float: left; }
	  .input-item { width: 350px; padding: 10px; float: left; }
	  .input-submit { width: 100px; padding: 10px; float: left; }
	  .input-message { width: 350px; height: 24px; padding: 0 10px; color: #F54C4C; float: left; }
	  .message { width: 1000px; padding: 0 10px; float: left;}
    </style>
	<script type="text/javascript">
		$(function() {
		  $("#submit_button").click(function() { 
			var loc = $("input#loc").val(); 
			if (loc == "") { 
			   $('#message').html('<b style="color:#F54C4C;">잘못된 경로로 접근하셨습니다.</b>');
			}
			var dept = $("input#dept").val(); 
			if (dept == "") { 
			   $('#dept_message').html('부서명을 입력하세요.');
			} else {
			   $('#dept_message').html('');
			}
			var name = $("input#name").val(); 
			if (name == "") { 
			   $('#name_message').html('성명을 입력하세요.');
			} else {
			   $('#name_message').html('');
			}
			var email = $("input#email").val(); 
			if (email == "") { 
			   $('#email_message').html('메일주소를 입력하세요.');
			} else {
			   $('#email_message').html('');
			}
			if (loc == "" || dept == "" || name == "" || email == "") {
				return false;
			}

			$.ajax({ 
			  type: "POST", 
			  url: 'procSubmit.php', 
			  data: 'location=' + loc + '&dept=' + dept + '&name=' + name + '&email=' + email, 
			  dataType: "html", 
			  success: function(data) { 
          if (data == "") { 
            $('#message').html('<b style="color:#F54C4C;">알 수 없는 오류</b>'); 
          } else if (data == "invaild dept") {
            $('#message').html('<b style="color:#F54C4C;">부서명이 없습니다.</b>'); 
          } else if (data == "invaild name") {
            $('#message').html('<b style="color:#F54C4C;">성명이 없습니다.</b>'); 
          } else if (data == "invaild email") {
            $('#message').html('<b style="color:#F54C4C;">메일주소가 없습니다.</b>'); 
          } else if (data == "success") {
            $('#message').html('<b>신고 제출이 완료되었습니다. 창을 닫으셔도 됩니다.</b>');
          } else {
            $('#message').html('<b style="color:#F54C4C;">알 수 없는 오류</b>'); 
          }
        },
        error: function() {
          $('#message').html('<b style="color:#F54C4C;">알 수 없는 오류</b>'); 
        }
			 });
			return false;
			});
		});
	</script>
  </head>
  <body>
    <div class="center">
		<div class="block-box">
		  <div class="block-title">해킹메일로 판단시 중요 정보 유출 등에 따른 피해를 사전에 막고 최소화를 위해 반드시 신고하여 주시기 바랍니다.</div>
		  <div class="block-info">
			운영지원실에서 실시하는 <span class="block-info-content">해킹메일 모의훈련으로 아래 정보를 입력·제출하시면 신고가 접수</span>됩니다. <span class="block-info-content">(따로 유선 신고 필요 없음)</span>
		  </div>
		</div>
		<div class="input-area">
			<form class="form-horizontal" role="form" method="POST">
				<input type="hidden" value="<?=$loc?>" id="loc" name="loc">
				<div class="input-title">부서명</div>
				<div class="input-title">성명</div>
				<div class="input-title">메일주소</div>
				<div class="input-submit"></div>
				<div class="input-item">
					<input type="text" class="form-control" id="dept" name="dept">
				</div>
				<div class="input-item">
					<input type="text" class="form-control" id="name" name="name">
				</div>
				<div class="input-item">
					<input type="text" class="form-control" id="email" name="email">
				</div>
				<div class="input-submit">
					<button id="submit_button" name="submit" type="submit" class="btn btn-default">제출하기</button>
				</div>
				<div id="dept_message" class="input-message"></div>
				<div id="name_message" class="input-message"></div>
				<div id="email_message" class="input-message"></div>
				<div class="input-submit"></div>
			</form>
		</div>
		<div id="message" class="message">
			<b style="color:#6666bb;">부서명, 성명, 메일주소 입력 후 제출하기 버튼을 클릭하면 신고가 완료됩니다.</b>
		</div>
	</div>
  </body>
</html>