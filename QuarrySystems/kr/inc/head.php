<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Language"    content="ko-KR" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type"  content="text/css" />
<meta http-equiv="X-UA-Compatible"     content="IE=edge" />

<meta name="author"      content="쿼리시스템즈" />
<meta name="keywords"    content="쿼리시스템즈" />
<meta name="description" content="쿼리시스템즈" />
<meta name="copyright"   content="copyright ⓒ QUARRY SYSTEMS. All Rights Reserved." />
<meta name="viewport" content="width=1250">

<!--<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">-->

<title>쿼리시스템즈</title>

<link href="../css/layout.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="../js/common.js"></script>
<script type="text/javascript" src="../js/jquery-1.3.2.js"></script>

<script type="text/javascript" src="../js/baseJs/jquery-1.11.2.min.js"></script>
<!--[if lte IE 9]>
<script type="text/javascript" src="../js/baseJs/respond.min.js"></script>
<script type="text/javascript" src="../js/baseJs/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="../js/baseJs/jquery.min.js"></script>
<script type="text/javascript" src="../js/baseJs/modernizr.custom.js"></script><!--IE 7 8 브라우저에서 html5&css3가 동작할 수 있게 해주는 스크립트-->

<!-- jquery상단메뉴 -->
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>

<!-- jquery메인비주얼 -->
<script type="text/javascript" src="../js/jquery.DB_tabFadeWide.min.js"></script>


<?			
		$PN = $_GET['PN'];
		$SN = $_GET['SN'];
		$ssN = $_GET['ssN'];
		$Home = "";
		if($PN == "" ? $PN = "" : $PN = $PN);
		if($SN == "" ? $TSN = "" : $TSN = " <span></span> ");
		if($ssN == "" ? $TssN = "" : $TssN = " <span></span> ");

		//first depth list
		$CateArray = array("1"=>"Our Company","2"=>"Service","3"=>"Product","4"=>"Contac Us","5"=>"","6"=>"","7"=>"","8"=>"","9"=>"");

		//second depth list
		$MenuArray = array(
			"1"=>array("1"=>"회사소개","2"=>"조직도","3"=>"회사연혁","4"=>"인재채용","5"=>"파트너","6"=>""),
			"2"=>array("7"=>"통합보안솔루션","1"=>"정보보안컨설팅","2"=>"보안관제","3"=>"시스템통합(SI/SM)","4"=>"네트워크통합분석","5"=>"IT인프라 운영관리","6"=>"개발(R&D)"),
			"3"=>array("0"=>"QUARRY","1"=>"보안솔루션","2"=>"네트워크&인프라","3"=>"DB&미들웨어","4"=>"제안솔루션","5"=>"","6"=>""),
			"4"=>array("1"=>"연락처","2"=>"오시는길","3"=>"","4"=>"","5"=>"","6"=>""),
			"5"=>array("1"=>"","2"=>"","3"=>"","4"=>"","5"=>"","6"=>""),
			"6"=>array("1"=>"","2"=>"","3"=>"","4"=>"","5"=>"","6"=>""),
			"7"=>array("1"=>"","2"=>"","3"=>"","4"=>"","5"=>"","6"=>""),
			"8"=>array("1"=>"","2"=>"","3"=>"","4"=>"","5"=>"","6"=>""),
			"9"=>array("1"=>"","2"=>"","3"=>"","4"=>"","5"=>"")
		);		

		
		//third depth list
			$subArray = array(				
				"1"=>array (
					"4"=>array("1"=>"","2"=>"","3"=>"")				
					),
				"2"=>array (
					"4"=>array("1"=>"","2"=>"","3"=>"")	
				),
				"4"=>array (
					"4"=>array("1"=>"","2"=>"","3"=>"")	
				),
				"6"=>array (
					"4"=>array("1"=>"","2"=>"","3"=>"")	
				)
			);		


		//top text
		$topTxt = array(
			"1"=>"작지만 강한 Totally Smart IT Service 전문기업",
			"2"=>"작지만 강한 Totally Smart IT Service 전문기업",
			"3"=>"작지만 강한 Totally Smart IT Service 전문기업",
			"4"=>"작지만 강한 Totally Smart IT Service 전문기업",
			"5"=>"작지만 강한 Totally Smart IT Service 전문기업",
			"6"=>"작지만 강한 Totally Smart IT Service 전문기업"
		);		

		$CATEMENU1= $Home.$CateArray[$PN];
		$CATEMENU2= $Home.$CateArray[$PN].$TSN.$MenuArray[$PN][$SN];
		$CATEMENU3= $Home.$CateArray[$PN].$TSN.$MenuArray[$PN][$SN].$TssN.$subArray[$PN][$SN][$ssN];
		$CATETITLE1= $MenuArray[$PN][$SN];	
		$CATETITLE2= $subArray[$PN][$SN][$ssN];
		$CATETXT1= $topTxt[$PN];	
		reset($CateArray);

		$PN1 = ""; $PN2 = ""; $PN3 = ""; $PN4 = ""; $PN5 = ""; $PN6 = ""; $PN7 = ""; $PN8 = ""; $PN9 = ""; $PN10 = "";
		$SN1 = ""; $SN2 = ""; $SN3 = ""; $SN4 = ""; $SN5 = ""; $SN6 = ""; $SN7 = ""; $SN8 = ""; $SN9 = ""; $SN10 = "";
		$TN1 = ""; $TN2 = ""; $TN3 = ""; $TN4 = ""; $TN5 = ""; $TN6 = ""; $TN7 = ""; $TN8 = ""; $TN9 = ""; $TN10 = "";
		$ssN1 = ""; $ssN2 = ""; $ssN3 = ""; $ssN4 = ""; $ssN5 = ""; $ssN6 = ""; $ssN7 = ""; $ssN8 = ""; $ssN9 = ""; $ssN10 = "";
		$dp1 = "none"; $dp2 = "none"; $dp3 = "none"; $dp4 = "none"; $dp5 = "none"; $dp6 = "none"; $dp7 = "none"; $dp8 = "none"; $dp9 = "none"; $dp10 = "none";

		switch($PN){
            case('0'): $PN0 = "on"; break;
			case('1'): $PN1 = "on"; break;
			case('2'): $PN2 = "on"; break;
			case('3'): $PN3 = "on"; break;
			case('4'): $PN4 = "on"; break;
			case('5'): $PN5 = "on"; break;
			case('6'): $PN6 = "on"; break;
			case('7'): $PN7 = "on"; break;
			case('8'): $PN8 = "on"; break;
			case('9'): $PN9 = "on"; break;
			case('10'): $PN10 = "on"; break;
		}
		switch($SN){
            case('0'): $SN0 = "on"; $dp0 = "display"; break;
			case('1'): $SN1 = "on"; $dp1 = "display"; break;
			case('2'): $SN2 = "on"; $dp2 = "display"; break;
			case('3'): $SN3 = "on"; $dp3 = "display"; break;
			case('4'): $SN4 = "on"; $dp4 = "display"; break;
			case('5'): $SN5 = "on"; $dp5 = "display"; break;
			case('6'): $SN6 = "on"; $dp6 = "display"; break;
			case('7'): $SN7 = "on"; $dp7 = "display"; break;
			case('8'): $SN8 = "on"; $dp8 = "display"; break;
			case('9'): $SN9 = "on"; $dp9 = "display"; break;
			case('10'): $SN10 = "on"; $dp10 = "display"; break;
		}
		switch($ssN){
            case('0'): $ssN0 = "on"; break;
			case('1'): $ssN1 = "on"; break;
			case('2'): $ssN2 = "on"; break;
			case('3'): $ssN3 = "on"; break;
			case('4'): $ssN4 = "on"; break;
			case('5'): $ssN5 = "on"; break;
			case('6'): $ssN6 = "on"; break;
			case('7'): $ssN7 = "on"; break;
			case('8'): $ssN8 = "on"; break;
			case('9'): $ssN9 = "on"; break;
			case('10'): $ssN10 = "on"; break;
		}
		switch($TN){
            case('0'): $TN0 = "on"; break;
			case('1'): $TN1 = "on"; break;
			case('2'): $TN2 = "on"; break;
			case('3'): $TN3 = "on"; break;
			case('4'): $TN4 = "on"; break;
			case('5'): $TN5 = "on"; break;
			case('6'): $TN6 = "on"; break;
			case('7'): $TN7 = "on"; break;
			case('8'): $TN8 = "on"; break;
			case('9'): $TN9 = "on"; break;
			case('10'): $TN10 = "on"; break;
		}
?>


</head>
