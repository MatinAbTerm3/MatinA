<?php /*
echo "
	<article class = 'col-3 card-deck'>
		<section class = 'card container fluid'>
			<img src = '{$row['image']}' class = 'card-img-top'>
			<section class = 'card-body'>
				<h4 class = 'card-title'>
					<p class = 'card-link'>
						شناسه: {$row['id']} <br>
						نام کتاب:{$row['bookname']} <br>
						نام نویسنده: {$row['writername']} <br>
						سال انتشار: {$row['releaseyear']} <br>
						ژانر: {$row['genre']} <br>
						خلاصه: {$row['review']} <br>
						تعداد صفحات: {$row['pagenumber']} <br>
						زبان کتاب: {$row['booklanguage']} <br>
					</p>
				</h4>
				<section class = 'card-text'>
					<p>
						<span class = 'fw-bold'>قیمت : </span>"
						.number_format($row['price'])." نومان <br>
						<span class = 'fw-bold'>توضیحات : </span>"
						.$row['description']."
					</p>
					
					
				</section>
			</section>
		</section>
	</article>
";
*/
?>
<?php 
echo "
	<div class='card' style='width: 18rem;'>
		<img src = '{$row['image']}' class='card-img-top' >
		<div class='card-body'>
			
				<ul class='list-group list-group-flush'>
					<li class='list-group-item'>شناسه: {$row['id']}</li>
					<li class='list-group-item'>نام کتاب:{$row['bookname']}</li>
					<li class='list-group-item'>نام نویسنده: {$row['writername']}</li>
					<li class='list-group-item'>سال انتشار: {$row['releaseyear']}</li>
					<li class='list-group-item'>ژانر: {$row['genre']}</li>
					<li class='list-group-item'>خلاصه: {$row['review']}</li>
					<li class='list-group-item'>تعداد صفحات: {$row['pagenumber']}</li>
					<li class='list-group-item'>زبان کتاب: {$row['booklanguage']}</li>
					<li class='list-group-item'>قیمت : {$row['price']}</li>
					<li class='list-group-item'>توضیحات : {$row['description']}</li>
					
				</ul>
			
		</div>
	</div>
";
?>