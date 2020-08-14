$(function () {

    $('.mt-2 a').each(function () {
        let location = window.location.protocol + '//' + window.location.host + window.location.pathname;
        let link = this.href;
        if(link === location){
            $('.mt-2 li').removeClass('active');
            $(this).addClass('active');
            $(this).closest('.mt-2 li').addClass('active');

        }

    });

});
