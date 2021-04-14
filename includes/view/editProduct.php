<?php
//view
?>
<!doctype html>
<html lang = "fa">
    <head>
        <title>آرتمیس | افزودن محصول</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
        <link rel = "stylesheet" href = "assets/css/style.css">
        <script src = "assets/js/js.js"></script>
    </head>
    <body>
  
        <main>
            <h1 class="Hha">ویرایش کتاب</h1>
            <form action = "addProduct.php" method = "post" enctype = "multipart/form-data" class="contactfrm">
                <div class="mb-3">
                    <label for = "bookname" class = "form-label">نام کتاب📕</label>
                    <input type = "text" id = "bookname" name = "bookname" 
					class = "form-control" required value = "<?php echo $row['bookname']; ?>">
                </div>
                <div class="mb-3">
                    <label for = "writername" class = "form-label">نام نویسنده🙎‍♂️🖋</label>
                    <input type = "text" id = "writername" name = "writername" 
					class = "form-control" required value = "<?php echo $row['writername']; ?>">
                </div>
                <div class="mb-3">
                    <label for = "releaseyear" class = "form-label">سال انتشار📅</label>
                    <span class = "input-group">
                        <input type = "number" min="1200" max="1400"  id = "releaseyear" name = "releaseyear" 
						class = "form-control" required value = "<?php echo $row['releaseyear']; ?>">
                        <span class = "input-group-text">شمسی</span>
                    </span>
                </div>
                <div class="mb-3">
                    <label for = "genre" class = "form-label">ژانر کتاب📖</label>
                    <input type = "text" id = "genre" name = "genre" class = "form-control" 
					placeholder="در صورت وجود بیش از یک ژانر ، ژانرها را با کاما جدا کنید." required value = "<?php echo $row['genre']; ?>">
                </div>
                <div class = "mb-3">
                    <label for = "review" class = "form-label">خلاصه ای از کتاب📃</label>
                    <textarea placeholder = "حداکثر نویسه مجاز 1000 کارکتر است." maxlength="1000" id="review" 
					name = "review" class = "form-control"><?php echo $row['review']; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for = "pagenumber" class = "form-label">تعداد صفحات📄</label>
                        <input type = "number" min="10" max="6000"  id = "pagenumber" 
						name = "pagenumber" class = "form-control" required value = "<?php echo $row['pagenumber']; ?>">
                </div>
                <div class="mb-3">
                    <label for = "booklanguage" class = "form-label">زبان کتاب🌏</label>
                    <input type = "text" id = "booklanguage" name = "booklanguage" 
					class = "form-control" maxlength="10" required value = "<?php echo $row['booklanguage']; ?>">
                </div>
                <div class="mb-3">
                    <label for = "image" class = "form-label">تصویر کتاب🎴</label>
                    <input type = "file" id = "image" name = "image" class = "form-control">
                </div>

                <div class="mb-3">
                    <label for = "price" class = "form-label">قیمت کتاب؟💵</label>
                    <input type = "number" min="1000" max="5000000"  id = "price" name = "price" 
					class = "form-control" required value = "<?php echo $row['price']; ?>">
                </div>
                <div class = "mb-3">
                    <label for = "description" class = "form-label">توضیحات شما📜</label>
                    <textarea placeholder = "حداکثر نویسه مجاز 1000 کارکتر است." maxlength="1000" id="description" name = "description" 
					class = "form-control"><?php echo $row['description']; ?></textarea>
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