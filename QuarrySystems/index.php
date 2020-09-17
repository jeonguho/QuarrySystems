<script language=javascript>

//window.location.href="kr/main/main.php";

</script>

<html>
<head>
<title>쿼리시스템</title>
<script>
function Frameset(page)
{
    framecode = "<frameset rows='1*'>"
    + "<frame name=main src='" + page + "'>"
    + "</frameset>";
    document.write(framecode);
    document.close();
}
</script>
</head>
<!--<body onLoad="Frameset('http://quarry.kr/kr/main/main.php')">-->
<body onLoad="Frameset('http://localhost/kr/main/main.php')">
</body>
</html>