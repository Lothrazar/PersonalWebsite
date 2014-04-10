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


This is <a href="http://www.tinymce.com/">TinyMCE</a>, an html editor made in javascript (not by me!) that is Open Source under LGPL.

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
    
    $('#btn_preload').on('click', function()
    {
        console.log($('#preload').val());
         tinyMCE.activeEditor.setContent($('#preload').val());
    return false;
    });
});
</script>




<textarea id="textarea">Your content here.</textarea>


<button id="btn_preload" style="width:800px;">Push HTML Content Up</button>


<textarea id="preload" style="width:800px;height:125px;">Pre load html.</textarea>
 