<br />
<?php
if(isset($_POST["done"])) {
 if($_POST["name"] == "")
   echo "Введите имя. <a href='/'>Исправить</a>";
 else
   header("Location:index.php");
}
   ?>
            <form name "test" action="check.php" method="post">
            <label>Имя: </label><br />
            <input type="text" name="name" placeholder="Имя" /><br />
            <label>Email</label><br />
            <input type="text" name="email" placeholder="Email" /><br />
            <label>Сообщение</label><br />   
            <textarea name="message" cols"40" rows="20"></textarea>
            <br />
            <input type="submit" name="done" value="Готово" />
            </form>
</body>
</html>