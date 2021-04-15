<section>
	<div class="gradient top"></div>
	<div class="section">
		<div class="section-content">
			<div class="row">
				<div class="col-sm-8">
					<h1><? print($var["title"]) ?></h1>
					<p><? print($var["text"]) ?></p>
				</div>
				<div class="col-sm-4">
					<div class="item_fon">
						<div class="image">
							<img src="<? print($path_to_img . $var["img"]) ?>" alt="" class="section-img-icon1">
						</div>
					</div>
				</div>
			</div>
			<div class="row align-items-right">
				<input type="submit" class="btn button" value="<? print($var["price"]) ?>">
			</div>
		</div>
	</div>	
</section>