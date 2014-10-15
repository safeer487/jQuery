<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<style>
	#content{
	
		widht:500px;
		height: 600px;
		text-align: center;

	}
	</style>
</head>
<body>
	<div id="content">
	<video id="video" controls autoplay  src="video/dilation.mp4"></video><br>

	<input type="button" value="siguente" onclick="siguente()">		
	<input type="button" value="hackControl" onclick="hackControl()">
	
	</div>
	

	<script>

	

		var jsonVideo = {
		'1' : 'video/dilation.mp4',
		'2' : 'video/radar.mp4',
		'3' : 'video/tides.mp4'
	};
		var iCount = 0;
		var $video = $('#video');

		function siguente(){
			if (iCount == Object.keys(jsonVideo).length) iCount = 0;
			iCount++;
			$video.attr('src', jsonVideo[iCount + '']); 
		}

		function hackControl(){
			$video.removeAttr('controls');
		}

		








	</script>

	
</body>
</html>