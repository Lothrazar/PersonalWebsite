
    <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
    <div style="margin:10px">
    <h3>Article Builder</h3>
    <p>
    I used an WSYWIG editor called<a href="http://www.tinymce.com/">TinyMCE</a>, an html editor made in javascript, to make an article creator.
    </p>
    <p>
       To make this a two way editor, I added a button and an empty area so you can type HTML in the lower area and push it up into the editor; and so the editor automatically 
        has somewhere to put its generated HTML content every time it gets updated.
    </p>
    <p>

        I used this to mock up a lot of the content on this page, including parts of the My Mods page, among others.  
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

        $('#btn_download').on('click', function()
        { 
            var win = window.open("", "Title", "toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=780, height=200, top="+(screen.height-400)+", left="+(screen.width-840));
            win.document.body.innerHTML = $('#preload').val();;
        });
    });
    </script>




    <textarea id="textarea"  style="width:100%;height:195px;">Your content here.</textarea>


    <button id="btn_preload" style="width:100%;">Push HTML Content Up</button>


    <textarea id="preload" style="width:100%;height:200px;">Pre load html.</textarea>

    <button id="btn_download" style="width:100%;">Preview in new window</button>

    </div>