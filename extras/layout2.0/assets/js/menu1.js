$('ul.sub-menu li').click(function(e) {
    $('li.active').removeClass('active');
    var $this = $(this);
    $this.addClass('active');
    e.preventDefault();
});