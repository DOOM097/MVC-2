<?php
    ob_start();
?>
<h2>Список книг</h2>
<?php
foreach ($booksList as $bookOne) {
    echo '<article>';
    echo '<h3>';
    echo '<a href ="book?title='.$bookOne['bookname'].'">'.$bookOne['bookname'].'</a>';
    echo '</h3>';
    echo '<img src = "public/images/'.$bookOne['image'].'">';
    echo '<p>Author(s):  '.$bookOne['author'].'</p>';
    echo '<p>Price: '.$bookOne['price'].'</p>';
    echo '<p style="padding-top:10px;">';
    echo '<a href="book?title='.$bookOne['bookname'].'" role="button"> Содержание &raquo;</a>';
    echo '</article>';
    echo '<div style ="clear:both;"></div>';
}

?>

<?php
$content = ob_get_clean();
include 'view/templates/layout.php';
?>