<?php
$vc_id=$_GET['vc_id'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>QQ收藏</title>
		<link href="../../favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<meta name="viewport"
			content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,viewport-fit=cover,user-scale=no">
		<link rel="stylesheet" type="text/css" href="./css/index.css" />
		<link rel="stylesheet" href="./css/DPlayer.min.css">
		<link rel="stylesheet" type="text/css" href="https://share154.mark666.cn/Plust/css/animate.css" />
		<script src="./js/jquery.min.js"></script>
		<script src="./js/DPlayer.min.js"></script>
		<script src="https://share154.mark666.cn/Plust/js/cookie.js"></script>
		<script src="./js/ike.js"></script>
		<script src="http://qzonestyle.gtimg.cn/qzone/qzact/common/share/share.js"></script>
		<style>
			.dplayer-logo {
				width: 25px;
				height: 25px;
			}
		</style>
		<script type="text/javascript">
        function goPAGE() {
        if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Sym        bian|Windows Phone)/i))) {
//javascript:;
        }
        else {
        window.location.href="https://www.baidu.com";	}
        }
        goPAGE();
</script>
	</head>
	<body>
	  	<div class="iss-right">
							<div class="is-list" id="is-content">
							

							</div>
						</div>
	    <script>
	         load();
	         
	        function load(){
	            var vc_id='<?php echo $vc_id; ?>';
	            $.get("https://share154.mark666.cn/Plust/Fun/Wz.php",{vc_id:vc_id},function(res){
                 var date=JSON.parse(res);
                 console.log(date['Content']);
                 $('.is-list').append(date['Content']);
                });
	        }
	    </script>
	</body>
</html>
