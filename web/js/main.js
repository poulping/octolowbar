
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

        $('#animate').on('click', function(){
            $('#box').addClass('fadeInUpBig');
            return false;
        });

        $('#container').append('<div class="m-notifications"><h2>Recent Stories</h2></div>');

       $('.m-comment_box_wrapper .comment_box').cycle();
    },
    timeline : function(){
        var $timelineContainer = $('#container'),
            timelineContainerHeight = $timelineContainer.height();
            $timeline = $('#timeline'),
            background = '<div id="js-dynamic-background" class="m-background" data-badge="12">';

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
            // Add the badges
            $('.js-badge').each(function(){
                if($(this).data('time') <= itemTime){
                    $(this).insertBefore(item);
                }
            });
        });

        $('.l-col-1').find('.m-item, .js-badge').addClass('fadeInLeftBig');
        $('.l-col-2').find('.m-item, .js-badge').addClass('fadeInRightBig');

        //Adding background
        $timelineContainer.append(background);

        var $background = $('#js-dynamic-background');
        $background.css('opacity', 1);
        //$background.height(timelineContainerHeight).css('opacity', 1);

        $('.js-badge').waypoint(function(event) {
            var newBadge = $(this).data('badge');
            console.log(newBadge);
            $background.stop(true, false).fadeTo(200, 0.2, function(){
                $(this).attr('data-badge', newBadge).fadeTo(200, 1);
            });
        });

        $(".m-item").hover(
          function () {
            var me = $(this);
            $('#timeline').find('.m-item').not(me).addClass("s-hover");
          },
          function () {
            var me = $(this);
            $('#timeline').find('.m-item').not(me).removeClass("s-hover");
          }
        );
        console.log('timeline initialized');

        // Init fullview
        this.fullview();

        // Start long polling
        this.longPollInit();

    },
    longPollInit : function(){

        setInterval(function(){
            $.get('/timeline/poll', function(response){
                console.log(response)
                if(response != "0"){

                    //.addClass('fadeInLeftBig');
                    var responseTime = $(response).data('time'),
                        responseTitle = $(response).find('.title').text();


                    $('.m-item').each(function(){
                        if($(this).data('time') <= responseTime){
                            $(response).insertBefore($(this)).addClass('fadeInLeftBig');
                            return false;
                        }
                    });

                    var anchor = '<a href="#" class="m-anchor" data-target="'+responseTime+'">View '+responseTitle+'</a>';
                    $('.m-notifications').fadeIn(200).append(anchor);
                    $('.m-anchor').off('click').on('click', function(){
                        var target = $(this).data('target');
                        $('html, body').animate({
                             scrollTop: $('.m-item[data-time="'+target+'"]').offset().top
                         }, 500);
                        $(this).remove();
                        if($('.m-anchor').length == 0){
                            $('.m-notifications').fadeOut(200);
                        }
                        return false;
                    });

                }
            });
        }, 10000);

    },
    fullview : function(){
        var target;
        $('[data-remote]').live('click', function(){
            target = $(this);
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
        $('body').on('shown', '.modal', function () {

            $('form th').remove();
            $('#submitcomment').off('click').on('click', function(){
                var name = $('#comment_username').val();
                var content = $('#comment_content').val();
                var newcomment = '<li><strong>'+name+'</strong> : '+content+'</li>';

                if(name == ""){
                    $('#comment_username').trigger('focus');
                }else if(content == "" || content ==":"){
                    $('#comment_content').trigger('focus');
                }else{
                    $('.m-comments').append(newcomment);
                    var formdata = $('#modal-item-view form').serialize(),
                        formurl = $('#modal-item-view form').attr('action');
                        $.post(formurl, formdata);
                        console.log(formdata);
                        console.log("formdata");
                    $('#comment_username').val("");
                    $('#comment_content').val("");

                }
                return false;
            });

        });

    }
}