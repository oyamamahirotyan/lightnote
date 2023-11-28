var appname = 'lightnote';
var readyStatus = false;

$(document).ready(function(){
    let id = $(location).attr('pathname').replace(/\//, '');

    if(/(^[a-zA-Z0-9]{1,10}\.slide$)/.test(id)){
        pullid = id.replace(/\.slide/, '');
        $(document).attr('title', appname + ' /' + id);

        $.get('/api/pullNote', {id: pullid})
        .done(function(data){
            $('.note').text(data);
            Reveal.initialize({
                plugins: [ RevealMarkdown ]
            });
        });
    }
});