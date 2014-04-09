<?php include 'data/db.php';

$blog_enabled = false;

if($blog_enabled):
    
$db = new Database();
$articles = $db->get_articles();
 foreach($articles as $a):?>

<span class="article_title"><?=$a['title']?></span>

<div class="article_content"><?=$a['content']?></div>
<?php endforeach;


else:
    
    echo "<h1>Blog under construction</h1>";
// TODO: use this http://daveismyname.com/creating-a-blog-from-scratch-with-php-bp
endif;


?>


 