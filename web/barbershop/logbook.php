<?php
require_once('../includes/header.php');?>
<h2 class="text-center pt-3 ">Журнал записей</h2>
<h3 class="text-center pt-3 text-secondary mb-3">Заполнить форму</h3>
<div class="container pb-5">
	<div class="row">
		<div class="col-sm">
		</div>
		<div class="bg-light col-6 p-2">
			<form>
				<div class="form-group">
					<label for="exampleInputEmail1">ваше ФИО</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ваше ФИО">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">ваше время</label>
					<input type="date" class="form-control" id="exampleInputPassword1" placeholder="ваше время">
				</div>
				<button type="submit" class="btn btn-primary">Записаться</button>
			</form>
		</div>
		<div class="col-sm">
		</div>
	</div>
</div>

	<h3 class="text-center pt-3 text-secondary mb-3">Просмотр журнала</h3>
	<div class="row">
		<div class="col-sm">
		</div>
		<div class="bg-light col-8 p-2 border border-secondary rounded">
			<p>Тут будет вывод из базы данных</p>
		</div>
		<div class="col-sm">
		</div>
	</div>
<?php require_once('../includes/footer.php');
?>
