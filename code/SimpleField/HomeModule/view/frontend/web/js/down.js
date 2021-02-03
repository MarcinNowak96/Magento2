require(['jquery'], function ($) {
    $('[data-dropdown-menu="true"]').hover(function (){
        ($(this).find('ul')).toggle();
    });
});
