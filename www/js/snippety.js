jQuery(function($){
    $('.student:first').css('color','red');
    $('a.ajax').click(function(){
        $.get(this.href);
        return false;
    })  ;

    $('a.jscallback').click(function(){
        $.get(this.href, function(payload){
            $.nette.success(payload);

            if(typeof(payload.odpoved) != 'undefined')
                alert(payload.odpoved);

        });
        return false;
    });
});