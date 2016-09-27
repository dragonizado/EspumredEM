<!DOCTYPE html>
<html>
	<head>
		<!-- ajustar el jquery -->
		<title>WEBCAM</title>
		
	</head>
	<body>
		<button id="foto">
			Tomar Foto!
		</button>
		<button id="enviar">
			Enviar Foto!
		</button>
		<canvas id="canvas" width="450" height="368">
		</canvas>
		<video id="video" width="450" height="368" autoplay="autoplay">
		</video>

		<script>
			$(function() {
				var cxt = canvas.getContext("2d");
				canvas = document.getElementById("canvas");
				video = document.getElementById("video");

				if(!navigator.getUserMedia)
					navigator.getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
				if(!window.URL)
					window.URL = window.webkitURL;
				
				if (navigator.getUserMedia) {
					navigator.getUserMedia({
						"video" : true,
						"audio": false
					}, function(stream) {
						video.src = window.URL.createObjectURL(stream);
						video.play();
					},function(err){
						console.log("Ocurrió el siguiente error: " + err);
					});
				}
				else{
					alert("getUserMedia no disponible");
					return;
				}

				// Evento click para capturar una foto.
				$("#foto").click(function() {
					cxt.drawImage(video, 0, 0, 450, 368);
				});

				// Evento click para enviar la foto al servidor.
				$("#enviar").click(function() {
					var data = canvas.toDataURL("image/jpeg");
					
					// Separamos el "data:image/jpeg;base64,"
					var info = data.split(",", 2);
					$.ajax({
						type : "POST",
						url : 'index.php?r=Ingresopersonal/guardar_foto',
						data : {
							type : info[0],
							data : info[1]
						},
						success : function(result) {
							console.log("result:", result);
						}
					});
				});
			});
		</script>
	</body>
</html>