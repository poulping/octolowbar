
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
        $('#modal-item-view').modal({
            keyboard: false
        });
    },
    timeline : function(){
        console.log('timeline initialized');
    }
}