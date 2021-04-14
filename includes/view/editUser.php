<?php
//view
?>
<!doctype html>
<html lang = "fa">
<head>
    <title>آرتمیس | ثبت نام</title>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
    <link rel = "stylesheet" href = "assets/css/style.css">
</head>
<body>

<main>
<h1 class="Hha">ویرایش اطلاعات کاربری</h1>
    
    <form action="" method="post" class="contactfrm">
        <div class="mb-3">
            <label for = "username" class = "form-label">نام کاربری👨‍💻/👩‍💻</label>
            <input type = "text" id = "username" name = "username" class = "form-control"
			placeholder="فقط حروف انگلیسی" value = "<?php echo $row['username']; ?>">
        </div>
        <div class="mb-3">
            <label for = "email" class = "form-label">آدرس ایمیل📧</label>
            <input type = "email" id = "email" name = "email" class = "form-control" value = "<?php echo $row['email']; ?>">
        </div>
        <div class="mb-3">
            <label for = "password" class = "form-label">رمز عبور🔐</label>
            <input type = "password" id = "password" name = "password" class = "form-control">
        </div>
        <input type = "submit" value = "ویرایش" class = "btn btn-primary" name = "submit">
        <input type = "reset" value = "پاک شدن" class = "btn btn-secondary">
    </form>
</main>
<aside></aside>
<footer>

</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>