
$(
    function(){
        
    }
)
var aud = $('audio')[0];

$('.play-pause').on('click', function(){
    if(aud.onpause){
        aud.play();
        $('.play-pause').removeClass('icon-play');
        $('.play-pause').addClass('icon-stop');
    }else {
        aud.onpause();
        $('play-pause').removeClass('icon-stop');
        $('play-pause').addClass('icon-play');
    }

    
})


aud.ontimeupdate = function(){
    $('.progress').css('width', aud.currentTime / aud.duration * 100 + '%')
}