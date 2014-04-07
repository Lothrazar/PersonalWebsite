<?php include 'data/db.php';

$db = new Database();
$articles = $db->get_articles();
?>



<p>
    Welcome to my home page, where I talk about the games and mods I code, play, and collect.
</p>
        



<?php foreach($articles as $a):?>

<span class="article_title"><?=$a['title']?></span>

<div class="article_content"><?=$a['content']?></div>
<?php endforeach;?>


<p></p>

