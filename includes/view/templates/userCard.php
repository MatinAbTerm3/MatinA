<?php

echo "
	<div class = 'container'>
		<div class = ''>
			<div class = ''>
				<div class = 'card'>
					<div class = 'card-header'>کاربر : {$row['id']}</div>
					<div class = 'card-body'>
						<h5 class = 'card-title'>نام کاربری : {$row['username']}</h5>
							<h6>ایمیل : {$row['email']}</h6>
						<a href = 'editUser.php?id={$row['id']}' class = 'btn btn-primary'>ویرایش</a>
						<a href = '#' class = 'btn btn-danger'>حذف</a>
					</div>
				</div>
			</div>
		</div>
	</div>
";

?>