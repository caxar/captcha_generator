<!DOCTYPE html>
<?php session_start()?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	</head>
<body>


	<div class="container">
    <div class="row">
    <div class="col-12 mt-5">
		<h3 class="text-primary">Captcha generator</h3>
		<?php
				if(ISSET($_POST['verify'])){
					if(!empty($_POST['captcha'])){
						if($_SESSION['captcha'] == $_POST['captcha']){
							echo "<p class='text-success fw-bold'>Каптча совпала</p>";
						}else{
							echo "<p class='text-danger fw-bold''>Неверная каптча!</p>";
						}
					}else{
						echo "<p class='text-secondary fw-bold''>Каптча не была заполнена!</p>";
					}
				}
			?>
		<form action="" method="POST">
			<img class="d-block mb-3" src="./captcha.php" >
			<input class="d-block mb-4" type="text" name="captcha" >
			<button name="verify" class="btn btn-primary">Проверка</button>
			
		</form>
	</div>
    </div>
    </div>
</body>
</html>