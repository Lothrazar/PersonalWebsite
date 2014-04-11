<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//http://daveismyname.com/creating-a-blog-from-scratch-with-php-bp
 


    //include config
    ////TODO: require database
   // require_once('../includes/config.php');
     
    //if not logged in redirect to login page
 //   if(!$user->is_logged_in()){ header('Location: login.php'); }

?>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>

<br/>

<h2>Programming mini-projects</h2>

<p>I have been a full time programmer for a few years (not including school), so this section is where I can put up little things that 
are really cool, but that are not big enough for a github repository for example.</p>

<br/>
<section style="border: 1px solid; ">
    <h3>WSYWIG editors</h3>
<p>
The top area of this control is something called <a href="http://www.tinymce.com/">TinyMCE</a>, an html editor made in javascript (not by me!) that is Open Source under LGPL.
</p>
<p>
    Below that, I added a button and an empty area so you can type HTML in the lower area and push it up into the editor; and so the editor automatically 
    has somewhere to put its generated HTML content every time it gets updated.
</p>
<p>
    
    I used this to mock up a lot of the content on this page, including parts of the My Mods page, among others.  
    Eventually, after evaluating this and other tools, I will use it in a private admin section for posting to the Blog section. 
</p>

<script>
   
$(document).ready(function()
{ 
    tinymce.init(
    {
        selector:'#textarea'
        , setup : function(editor) 
        {
            editor.on('change', function(e) 
            { 
                //$('#output').empty();
                //$('#output').html("");    

               // $('#output').html(e.level.content)  ; //<div id="output"> &nbsp;  </div>
                
                $('#preload').val(e.level.content);
            });
        }        
    });
    
    //thanks to https://stackoverflow.com/questions/1582251/how-to-load-html-using-jquery-into-a-tinymce-textarea
    $('#btn_preload').on('click', function()
    {
        console.log($('#preload').val());
         tinyMCE.activeEditor.setContent($('#preload').val());
    return false;
    });
});
</script>




<textarea id="textarea"  style="width:800px;height:195px;">Your content here.</textarea>


<button id="btn_preload" style="width:800px;">Push HTML Content Up</button>


<textarea id="preload" style="width:800px;height:125px;">Pre load html.</textarea>
 


</section>
