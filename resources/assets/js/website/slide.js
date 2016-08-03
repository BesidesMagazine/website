$(function(){

    /*init */
    var number = $('.slide-container').length;
    var autoSwitch;
    var now = 0;
    var next = (now+1)%number;

    for(var i=0; i<number; i++){
        $('.slide-controller').append('<div id="'+i+'" class="slide-button"></div>');
    }

    for(var i=0; i<number; i++){
        $('.slide-button:eq('+i+')').click(function(){
            switchSlideTo(parseInt($(this).attr('id')));
            console.log($(this).attr('id'));
        });
    }



    switchSlideTo(0);
    setAutoSwitch();

    /*functions*/
    function switchSlideTo (to){
        $('.slide-container:eq('+now+')').hide();
        $('.slide-container:eq('+to+')').fadeIn('slow');

        now = to;
        next = (to+1)%number;
        console.log(now+' '+next);
    }

    function setAutoSwitch(){
        autoSwitch = setInterval(AutoSwitch,5000);
    }

    function AutoSwitch(){
        switchSlideTo (next);
    }


});
