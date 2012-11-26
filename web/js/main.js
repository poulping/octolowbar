
//Octolobar Object
var EIGHT = EIGHT || {};

//Dom ready function
$(function() {
    EIGHT.init();
});

//Octolobar Object
EIGHT = {
    init : function(){

       EIGHT.timeline();
       EIGHT.fullview();

    },
    fullview : function(){
        // $('#modal-item-view').modal({
        //     keyboard: false
        // });
    },
    timeline : function(){
        console.log('timeline initialized');
        var itemCol,
            $col = $('.m-col');

        $('.m-item').each(function(){
            itemCol = $(this).data('col');
            $col.filter('[data-col='+itemCol+']').append($(this));
            $(this).addClass('in');
        });
    }
}