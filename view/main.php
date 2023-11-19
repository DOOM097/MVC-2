<?php
    ob_start();

    ?>

    <h2>Проект MVC технологии.  Книги </h2>
    <article>
        <p>
            Просмотр списка книг и детальной информации по одной книге
        </p>
    </article>
    <?php
    $content = ob_get_clean();
    ?>
        <?php  include'view/templates/layout.php';?>

    

