<?php
$pageTitle = "Главная страница";
include("templates/_head.php"); //нестрогое подключение
require("config.php"); //строгое подключение
?>

<!-- white-plate -->
<div class="white-plate">
	<div class="container-fluid">

		<?php include("templates/_header.php") ?>

		<div class="line-between"></div>

		<div class="row">


			<?php include("templates/_aside.php") ?>

			<!-- Center Part -->
			<div class="col-md-9 col-lg-10">
				<div class="row">



					<!-- подключение шаблона с товаром  -->

					<?php
					//for($i = 1; $i < 7; $i++){
					//include("templates/_product-item.php");
					//}
					$sql = "SELECT * FROM products";
					//Выполняем запрос и результат сохраняем в переменную $result
					$result = $db->query($sql);
					//Преобразовываем ответ в ассоциативный массив и записываем в $products
					$products = $result->fetchAll(PDO::FETCH_ASSOC);
					//echo"<pre>";
					//print_r($products);
					//echo"</pre>";

					foreach ($products as $product) {
						include("templates/_product-item.php");
					}
					?>


				</div>
			</div>
			<!-- // Center Part -->
		</div>
		<!-- content block -->
	</div>
</div>
<!-- // white-plate -->


<?php include("templates/_footer.php"); ?>

<!--как сбросить кэш браузера => Contr + R-->