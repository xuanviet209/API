<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search Image</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center">MOVIE</h1>
		<div class="row my-5">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Tìm kiếm ảnh ở đây" aria-label="Recipient's username" aria-describedby="basic-addon2" id="imageName">
			  <button class="input-group-text" id="searchImage">Tìm kiếm</button>
			</div>
		</div>
		<div class="row my-3">
			<div class="col text-center">
			   <img src="images/load.gif" id="load" style="display:none;" width="20%">
			</div>
		</div>
		<div id="result"></div>
	</div>
	<script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
	<script type="text/javascript">
        $(function  () {
				$('#searchImage').click(function() {
					let imageName = $('#imageName').val().trim();
					if (imageName !=='') {
						$.ajax({
							url:'search.php',
							type: 'post',
							data:{name: imageName},
							beforeSend:function(){
								$('#load').show();
							},
							success:function(data){
								$('#load').hide();
								$("#result").html(data);
							}
						});
					}
				});
			});
	</script>
</body>
</html>