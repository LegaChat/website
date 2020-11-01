$('.restart').click(function(){
    // restart animation
    var me = $(".large-piece,.small-piece");
    me.css({animation: 'none'});
    setTimeout(function() {
        me.css({animation: ''});
    }, 10);

});


