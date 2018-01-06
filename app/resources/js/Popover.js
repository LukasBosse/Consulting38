$(document).ready(function(){
    $("[data-toggle=\"popover\"]").popover({
        trigger : 'hover',
        placement : 'top',
        html: 'true',
        content : '<span class="glyphicon glyphicon-phone" aria-hidden="true"></span> 05351/XXX' + '<br><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> test@test.de',
        template: '<div class="popover"><div class="arrow"></div>'+
        '<h3 class="popover-title"></h3><div class="popover-content">'+
        '</div><div class="popover-footer center" style="border-top: 1px solid red; width: 100%; height: 35px; background-color: whitesmoke; padding-top: 7px !important;">Meld dich bei mir</div></div>'
    })

});