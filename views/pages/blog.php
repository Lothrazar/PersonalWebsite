<?php include 'data/db.php';

$db = new Database();
$articles = $db->get_articles();
?>



<?php foreach($articles as $a):?>

<span class="article_title"><?=$a['title']?></span>

<div class="article_content"><?=$a['content']?></div>
<?php endforeach;?>



 TODO: use this http://daveismyname.com/creating-a-blog-from-scratch-with-php-bp

<p> </p>