/*global $*/
/*eslint-env browser*/

$(function() {
    //DATEPICKER
    $('.datepicker').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        showButtonPanel: true,
        changeMonth: true,
        changeYear: false,
        numberOfMonths: 1,
        minDate: 0,
        //minDate: "-1D"
        //minDate: "-1W"
        //minDate: "-1Y"
        //minDate: "-1W -3D"
        maxDate: "+3M"
    });
    
    /*
    //Hiding and showing footer
    var showFooter = false;
    var docHeight = 0;
    $(window).scroll(function() {
        var scrollPosition = $(window).scrollTop() + $(window).height();
        if (showFooter == false) {docHeight = $(document).height()}
            
        if (scrollPosition >= docHeight) {
            showFooter = true;
            $('.footer').css('display', 'flex');
        } else if (scrollPosition <= docHeight) {
            showFooter = false;
            $('.footer').css('display', 'none');
        }
    });*/
});