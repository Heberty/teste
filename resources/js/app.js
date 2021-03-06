require('./bootstrap');

$(document).ready(function() {

    if($(window).width() < 992) {
        $('.menu-link').bigSlide({
            menuWidth: '90%',
            side: 'right'
        });
    }


    var SPMaskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
      onKeyPress: function(val, e, field, options) {
          field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };

    $('.sp_celphones').mask(SPMaskBehavior, spOptions);

    $('.money2').mask("#.##0,00", {reverse: true});
});