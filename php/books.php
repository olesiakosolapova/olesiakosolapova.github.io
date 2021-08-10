<!DOCTYPE html>
<html lang="uk">
<head>
<meta charset = "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>КНИГИ</title>

<link rel="stylesheet" href="../styles/reset.css">

<link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    
<!-- ЛОГОТИП -->
<header>
    <div class = "logo">
        <img src="../images/logo_3.png"  alt="LOGO"  >
    </div>
</header>

<!-- ГЛАВНОЕ МЕНЮ -->
<nav>
    <ul>
        <li><a href="../index.html">ГОЛОВНА</a></li>
        <li><a href="../pages/bio.html"> БІОГРАФІЯ </a></li>
        <li><a href="books.php">КНИГИ</a></li>
        <li><a href="../pages/movies.html">ЕКРАНІЗАЦІЇ</a></li>
      </ul>
</nav>

<!-- ТАБЛИЦЫ С КНИГАМИ -->
<main>
    <table class="table_book1">
        <tr>
            <td>
                <img src="../images/book1.JPEG" title="20 000 льє під водою"  alt="BOOK"></a>
            </td>
            <td>
                <img src="../images/book2.JPEG"  title="Діти капітана Гранта" alt="BOOK"></a>
            </td>
            <td>
                <img src="../images/book3.JPEG" title="Навколо світу за вісімдесят днів"  alt="BOOK"></a>
            </td>
            <td>
                <img src="../images/book4.JPEG"  title="П'ятнадцятирічний капітан" alt="BOOK"></a>
            </td>
            <td>
                <img src="../images/book5.JPEG"  title="Незвичайні пригоди експедиції Барсака" alt="BOOK"></a>
            </td>
        </tr>
    </table>
    <table class="table_book2">
        <tr>
            <td>
                <a href="../pdf/20_000_lie_pid_vodoiu_vyd1956.fb2.zip" download="">
                    <button>ЗАВАНТАЖИТИ</button>
                </a>
            </td>
            <td>
                <a href="../pdf/Dity_kapitana_Hranta.fb2.zip" download="">
                    <button>ЗАВАНТАЖИТИ</button>
                </a>
            </td>
            <td>
                <a href="../pdf/Navkolo_svitu_za_visimdesiat_dniv.fb2.zip" download="">
                    <button>ЗАВАНТАЖИТИ</button>
                </a>
            </td>
            <td>
                <a href="../pdf/Piatnadtsiatyrichnyi_kapitan_vyd2011.fb2.zip" download="">
                    <button>ЗАВАНТАЖИТИ</button>
                </a>
            </td>
            <td>
                <a href="../pdf/Nezvychaini_pryhody_ekspedytsii_Barsaka.fb2.zip" download="">
                    <button>ЗАВАНТАЖИТИ</button>
                </a>
            </td>
        </tr>
    </table>
    <br>
    <table class="table_book1">
        <tr>
            <td>
                <img src="../images/book6.JPEG" title="Таємничий острів"  alt="BOOK"></a>
            </td>
            <td>
                <img src="../images/book7.JPEG" title="Подорож на Місяць"  alt="BOOK"></a>
            </td>
            <td>
                <img src="../images/book8.JPEG" title="Замок у Карпатах"  alt="BOOK"></a>
            </td>
            <td>
                <img src="../images/book9.JPEG" title="Плавучий острів"  alt="BOOK"></a>
            </td>
            <td>
                <img src="../images/book10.JPEG" title="Прорив блокади"  alt="BOOK"></a>
            </td>
        </tr>
    </table>
    <table class="table_book2">
        <tr>
            <td>
                <a href="../pdf/taiemnychyy_ostriv.rar" download="">
                    <button>ЗАВАНТАЖИТИ</button>
                </a>
            </td>
            <td>
                <a href="../pdf/Podorozh_na_Misiats.fb2.zip" download="">
                    <button>ЗАВАНТАЖИТИ</button>
                </a>
            </td>
            <td>
                <a href="../pdf/Zamok_u_Karpatakh.fb2.zip" download="">
                    <button>ЗАВАНТАЖИТИ</button>
                </a>
            </td>
            <td>
                <a href="../pdf/Plavuchyi_ostriv.fb2.zip" download="">
                    <button>ЗАВАНТАЖИТИ</button>
                </a>
            </td>
            <td>
                <a href="../pdf/Proryv_blokady.fb2.zip" download="">
                    <button>ЗАВАНТАЖИТИ</button>
                </a>
            </td>
        </tr>
    </table>
<?php
 //Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
    require_once 'connect.php'; 
?>  

<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
//Вставляем данные, подставляя их в запрос
mysqli_query($connect, "INSERT INTO `comments` (`id`, `name`, `email`, `message`) VALUES (NULL, '$name', '$email', '$message')")   
?>
    <hr><br>
    
</form>
      <form action=""  method="post" class="postcard">
        <div class="form-row">
        <label for="name">Ваше Ім'я</label><input type="text" name="name">
        </div>
        <div class="form-row">
        <label for="email">Ваш Email</label><input type="email" name="email">
        </div>
        <div class="form-row">
        <label for="message">Ваш Коментар</label><textarea rows="5" name="message"></textarea>
        </div>
        <div class="form-row">
        <input type="submit" value="Відправити">
        </div>
        </form>

    <table class="com">
    <tr>
        <th>КОРИСТУВАЧ</th>
        <th>КОМЕНТАР</th>
    </tr>

    <?php
    //Делаем выборку всех строк из таблицы "comments"
        $comments = mysqli_query($connect, "SELECT * FROM `comments`");

    //Преобразовываем полученные данные в нормальный массив
        $comments = mysqli_fetch_all($comments);

        foreach ($comments as $comments) 
        {
            ?>
                <tr>
                    <td><?= $comments[1] ?></td>
                    <td><?= $comments[3] ?></td>
                </tr>
            <?php
        }
    ?>
</table>
     
</main>
</body>
</html>