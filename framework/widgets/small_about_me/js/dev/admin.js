function updateCount($, $textarea){
    "use strict";

    var iCount, iRemaining;
    iCount = parseInt($textarea.val().length, 10);
    iRemaining = 160 -iCount;

    $textarea
        .next()
        .children('small-about-me-count')
        .text(iRemaining);
}


function updateTextareas($, $textareas){
    "use strict";

    $textareas.each(function(){
        updateCount($, $(this));
        $(this).keyup(function(){
           updateCount($, $(this));
        });
    });
}

(function($) {
    "use strict";
    $(function(){
        updateTextareas($, $('.small-about-me textarea'));
    });

    $(document).ajaxSuccess(function(){
        updateTextareas($, $('.small-about-me textarea'));
    });
}(jQuery));