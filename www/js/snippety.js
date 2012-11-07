jQuery(function($){
    $('a.ajax').click(function(){
        $.get(this.href);
        return false;
    })
});