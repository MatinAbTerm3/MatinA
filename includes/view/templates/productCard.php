<?php
echo "
	<article class = 'col-3 card-deck'>
		<section class = 'card container fluid'>
			<img src = '{$row['image']}' class = 'card-img-top'>
			<section class = 'card-body'>
				<h4 class = 'card-title'>
					<a href = '#' class = 'card-link'>
						نام کتاب:{$row['bookname']}
					</a>
				</h4>
				<section class = 'card-text'>
					<p>
						<span class = 'fw-bold'>قیمت : </span>"
						.number_format($row['price'])." نومان <br>
						<span class = 'fw-bold'>توضیحات : </span>"
						.$row['description']."
					</p>
					<a href = 'editProduct.php?id={$row['id']}' class = 'btn btn-primary'>ویرایش</a>
					<a href = '#' class = 'btn btn-danger'>حذف</a>
					
				</section>
			</section>
		</section>
	</article>
";

?>