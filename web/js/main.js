
//Octolobar Object
var EIGHT = EIGHT || {};

//Dom ready function
$(function() {
    EIGHT.init();
});

//Octolobar Object
EIGHT = {
    init : function(){

       this.timeline();

       this.layout();

    },
    layout : function(){
       $('.m-comment_box_wrapper .comment_box').cycle();

       $.get('/timeline/poll', function(response){
            console.log(response);
       });
    },
    timeline : function(){
        var $timelineContainer = $('#container'),
            timelineContainerHeight = $timelineContainer.height();
            $timeline = $('#timeline'),
            background = '<div id="js-dynamic-background" class="m-background" data-badge="09">';

        //Assigning columns
        var itemCol,
            itemTime,
            item,
            $col = $('.m-col');

        $('.m-item').each(function(){
            itemCol = $(this).data('col');
            itemTime = $(this).data('time');
            item = $(this);
            $col.filter('[data-col='+itemCol+']').append($(this));
            $(this).css('opacity', 1);
            // Add the badges
            $('.js-badge').each(function(){
                if($(this).data('time') >= itemTime){
                    $(this).insertBefore(item);
                }
            });
        });


        //Adding background
        $timelineContainer.append(background);

        var $background = $('#js-dynamic-background');
        $background.height(timelineContainerHeight).css('opacity', 1);

        $('.js-badge').waypoint(function(event) {
            var newBadge = $(this).data('badge');
            console.log(newBadge);
            $background.stop(true, false).fadeTo(200, 0.2, function(){
                $(this).attr('data-badge', newBadge).fadeTo(200, 1);
            });
        }/*, {
            offset: 'bottom-in-view'
        }*/);

        console.log('timeline initialized');
        this.fullview();

    },
    fullview : function(){

        $('[data-remote]').on('click', function(){
            var url = $(this).data('remote');
            console.log(url);
            $('#modal-item-view').modal({
                remote : url,
                cache: false
            });
        });
        //Workaround twitter bootstrap cache
        $('body').on('hidden', '.modal', function () {
            $(this).removeData('modal');
        });
        console.log('fullview ready');
    }
}