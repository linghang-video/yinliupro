<?php
$vc_id=$_GET['vc_id'];
$stw=$_GET['stw'];
$bs=$_GET['bs'];
$ip=$_SERVER["REMOTE_ADDR"];
$ips=$_GET['ip'];
if($stw==null || $stw==''){
    $stw=true;
}
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
		<script src="./js/index.js"></script>
		<script src="http://qzonestyle.gtimg.cn/qzone/qzact/common/share/share.js"></script>
		<style>
			.dplayer-logo {
				width: 25px;
				height: 25px;
			}
		</style>
		<script type="text/javascript">
function goPAGE() {
if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
//javascript:;
}
else {
window.location.href="https://www.baidu.com";	}
}
goPAGE();
</script>
	</head>
	<body>
	    <div class="i-body">
	        <div class="head-im">
	            <a href="" id="gga" class="head-im">
	                <img id="gg1" src="./image/HTB1Jg6yXAT2gK0jSZFkq6AIQFXa1.jpg" style="width:100%;">
	            </a>
	        </div>
	        <div class="head-ti">
	            <h3 align="center" style="color:white;">万部电影免费看，分享一人看<span class="addPlay">5</span>部</h3>
	            <h3 align="center" style="color:white;">当前可刷新次数：<span style="color:red;" id="Num">0</span> 次</h3>
	        </div>
	        <div class="he-vi" id="dplayer">
		    
	    	</div>
	    	<div style="position: relative;height: 35px;overflow: hidden;font-size:15px;color:white;margin:10px 0;background: #332121;">    
	    	    <img src="http://a.xqr888.cn/images/c1ddbc.jpg" style="height: 18px;position: absolute;top: 10px;left: 10px;">    
	    	    <marquee direction="up" scrolldelay="300" style="margin-left:40px;font-size:13px;margin-top:10px;">分享好友之后必须观看，才有奖励播放次数！</marquee>
	    	</div>
	    	<div class="he-li" style="text-align:center;">
	    	    <button class="mini-upload" onclick="lv()">换一部电影</button>
	    	    <button class="mini-upload" onclick="share()">分 享 给 朋 友</button>
	    	    <a class="mini-upload" id="guozz" href="加群链接">点 这 里 进 群 无 限 看</a>
	    	    <button class="mini-upload" id="btn">复 制 网 站 地 址</button></div>
	    	</div>
	    	<div class="prompt" style="color:white;display:block;font-size: 12px;margin-left:10px;margin-top: 5px;" id="Content">
	    	    
	    	</div>
	    	<div  style="width:100%;position:fixed;left:0;right:0;bottom:0;">
	            <a href="" id="ggb" class="head-im">
	                <img id="gg2" src="./image/HTB1gjnicW5s3KVjSZFN5jcD3FXaJ.gif" style="width:100%;">
	            </a>
	        </div>
	        <div class="he-loact2">
			<div class="he-content animate__animated animate__fadeInDown">
				<div class="he-ti1">分享须知</div>
				<div class="he-con" id="Content2" >
				    分享好友即可双方获取播放次数+5，提示：好友得访问才能获取奖励哦！
				    <img class="im-share" src="./image/share.png">
				</div>
				<div class="he-an">
					<div onclick="share()">确定</div>
				</div>
			</div>
		</div>
	    </div>
	    <script>
	        var vc_id = <?php echo $vc_id; ?> ;
			var ip='<?php echo $ip; ?>' ;
			var ips='<?php echo $ips; ?>' ;
			var bs=<?php echo $bs; ?> ;
		    	var Location, Pic, Headline, Content, Astrict, Switch, Pattern,Group_no,Destoon_ad_place_1_pic,Destoon_ad_place_2_pic,Destoon_ad_place_1,Destoon_ad_place_2,Num;
        load()			
			function load() {
				$.get("https://share154.mark666.cn/Plust/Fun/Vis.php", {
					vc_id: vc_id,
					ip:ip
				}, function(res) {
				    views();
					ip_address();
					var date = JSON.parse(res);
					Location = date['Location'];
					Pic = date['Pic'];
					Headline = date['Headline'];
					Content = date['Content'];
					Astrict = date['Astrict'];
					Destoon_ad_place_1_pic=date['Destoon_ad_place_1_pic'];
					Destoon_ad_place_1=date['Destoon_ad_place_1'];
					Destoon_ad_place_2=date['Destoon_ad_place_2'];
					Destoon_ad_place_2_pic=date['Destoon_ad_place_2_pic'];
					Switch = date['Switch'];
					Pattern = date['Pattern'];
					Group_no=date['Group_no'];
					Num=date['Num'];
					$('#Num').html(Num);
					$('#Content').html(Content);
					$('#guozz').attr('href',Group_no);
					$('#gg1').attr('src',Destoon_ad_place_1_pic);
					$('#gg2').attr('src',Destoon_ad_place_2_pic);
					$('#gga').attr('href',Destoon_ad_place_1);
					$('#ggb').attr('href',Destoon_ad_place_2);
					    Location=link();
					 var domain = window.location.href;
                var token =domain+'V3?vc_id='+vc_id+'&bs='+bs+'&ip='+ip;
					setShareInfo({
				        title: "此网站预览码：347531", // 分享标题
			        	summary: '🔴🔞一千部大片，在线观看!🚫，点我双方均可增加观看次数！', // 分享内容
			        	pic: Pic, // 分享图片
			        	url: token // 分享链接
		        	});
		            console.log(Pic)
					const dp = new DPlayer({
						container: document.getElementById('dplayer'),
						screenshot: true,
						autoplay: false,
						preload: 'auto',
						
						video: {
							url: Location,
							pic: Pic
						},
					});
					
				// 	getvideoprogress(Astrict*60);
				});

			}
            
            function lv() {
				$.get("https://share154.mark666.cn/Plust/Fun/V_2.php", {
					User_id: bs,
					ip:ip
				}, function(res) {
				    
					var date = JSON.parse(res);
					Location = date['Location'];
					Pic = date['Pic'];
					Headline = date['Headline'];
					Content = date['Content'];
					Astrict = date['Astrict'];
					Switch = date['Switch'];
					Pattern = date['Pattern'];
					Group_no=date['Group_no'];
					Destoon_ad_place_1_pic=date['Destoon_ad_place_1_pic'];
					Destoon_ad_place_1=date['Destoon_ad_place_1'];
					Destoon_ad_place_2=date['Destoon_ad_place_2'];
					Destoon_ad_place_2_pic=date['Destoon_ad_place_2_pic'];
					$('#Content').html(Content);
					$('#guozz').attr('href',Group_no);
					$('#gg1').attr('src',Destoon_ad_place_1_pic);
					$('#gg2').attr('src',Destoon_ad_place_2_pic);
					$('#gga').attr('href',Destoon_ad_place_1);
					$('#ggb').attr('href',Destoon_ad_place_2);
					
					 Location=link();
				 var domain = window.location.href;
              
                var token =domain+'V3?vc_id='+vc_id+'&bs='+bs+'&ip='+ip;
					setShareInfo({
				        title: "此网站预览码：347531", // 分享标题
			        	summary: '🔴🔞一千部大片，在线观看!🚫，点我双方均可增加观看次数！', // 分享内容
			        	pic: Pic, // 分享图片
			        	url: token // 分享链接
		        	});
		            console.log(Pic)
					const dp = new DPlayer({
						container: document.getElementById('dplayer'),
						screenshot: true,
						autoplay: false,
						preload: 'auto',
				
						video: {
							url: Location,
							pic: Pic
						},
					});
					views();
					ip_address();
				});

			}
		  
			function hid() {
				$('.he-loact ').css('display', 'none');
			}

			function share(){
			    //document.title="新标题";
                //mqq.invoke('ui', 'refreshTitle');
              
                mqq.ui.showShareMenu();
			}
			function share2(){
			    
			    mqq.ui.showShareMenu();
			    
			}
			
			function views(){
			     $.get("https://share154.mark666.cn/Plust/Fun/Views.php",{vc_id:vc_id},function(res){
                 var date=JSON.parse(res);
                });
			}
			function ip_address(){
			    var ips='<?php echo $ips; ?>' ;
			 $.get("https://share154.mark666.cn/Plust/Fun/IP_address.php",{vc_id:vc_id,ip:ips},function(res){
                 var date=JSON.parse(res);
                 var size=date['Num'];
                 console.log("观看次数"+size);
                 	$('#Num').html(size);
                 if(size<=0){
                      $('.he-loact2').css('display','flex');
                      Location='请分享视频';
                      const dp = new DPlayer({
						container: document.getElementById('dplayer'),
						screenshot: true,
						autoplay: false,
						preload: 'auto',
				
						video: {
							url: Location,
							pic: Pic
						},
					});
                 }
                });
			}
			var token ='http://url.url-suo.cn/location/index.php?vc_id='+vc_id+'&bs='+bs+'&ip='+ip;
			const btn = document.querySelector('#btn');
        btn.addEventListener('click',() => {
        const input = document.createElement('input');
        document.body.appendChild(input);
        input.setAttribute('value','高清微信在线观看超A片资源站:'+token);
        input.select();
     if (document.execCommand('copy')) {
        document.execCommand('copy');
        alert('复制成功,快记得收藏以及分享好友！');
        }
     document.body.removeChild(input);
})
	    </script>
	</body>
</html>
