<section>
	<div class="section">
		<div class="section-content">
			<div class="row align-items-center">
				<div class="col-sm-8">
					<h1><? print($var["title"]) ?></h1>
				</div>
				<div class="col-sm-4">
					<div class="section-img">
						<img src="<? print(Url($path_to_img . $var["img"])) ?>" alt="" class="section-img-icon">
					</div>
				</div>
			</div>
			<p><? print($var["text"]) ?></p>
		</div>
	</div>
</section>