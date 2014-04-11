    $(document).ready(function()
    { 
        $('.mod_content').click(function()
        { 
            if ($(this).height() > 80)
            {
                $(this).animate({height: '80px'});
            }
            else
            {
                $(this).animate({height: '100%'});
            }
        });
    });

