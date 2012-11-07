function reloadSnippet(index, indexes, code){
    if( (index) === indexes.length ) return;

    $('#'+indexes[index]).fadeOut(function(){ $('#'+indexes[index]).html(code[indexes[index]]); }).fadeIn(function(){
        reloadSnippet(index+1, indexes, code);
    });
}

jQuery(function($){
    $('.student:first').css('color','red');
    $('a.ajax').click(function(){
        $.get(this.href);
        return false;
    })  ;

    $('a.ajaxChangeName').click(function(){

        $.get(this.href, function(payload){
            var time = 0;
            var indexes = new Array();
            for (var i in payload.snippets) {
                indexes.push(i);
            }
            reloadSnippet(0,indexes,payload.snippets);

/*            if(typeof(payload.snippets['snippet--student-2']) != 'undefined'){
                $('#snippet--student-2').fadeOut(function(){ $.nette.success(payload); }).fadeIn();
            }*/
        })  ;
        return false;
    });

    $('a.jscallback').click(function(){
        $.get(this.href, function(payload){
            $.nette.success(payload);

            if(typeof(payload.odpoved) != 'undefined')
                alert(payload.odpoved);

        });
        return false;
    });
});