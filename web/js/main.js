
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


    },
    timeline : function(){
        var $timelineContainer = $('#container'),
            timelineContainerHeight = $timelineContainer.height();
            $timeline = $('#timeline'),
            background = '<div id="js-dynamic-background" class="m-background" data-badge="09">';



        //Assigning columns
        var itemCol,
            $col = $('.m-col');

        $('.m-item').each(function(){
            itemCol = $(this).data('col');
            $col.filter('[data-col='+itemCol+']').append($(this));
            $(this).css('opacity', 1);
        });

        //Adding background
        $timelineContainer.append(background);

        var $background = $('#js-dynamic-background');
        $background.height(timelineContainerHeight).css('opacity', 1);

        //fake badge
        $('.m-col[data-col="1"]').append('<div class="js-badge m-year-badge" data-badge="07"> <div class="year">07</div> <div class="icon"></div></div>');
        $('.m-item').eq(7).after('<div class="js-badge m-year-badge" data-badge="08"> <div class="year">08</div> <div class="icon"></div></div>');

        $('.js-badge').waypoint(function(event) {
            var newBadge = $(this).data('badge');
            console.log(newBadge);
            $background.stop(true, false).fadeOut(200, function(){
                $(this).attr('data-badge', newBadge).fadeIn(200);
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