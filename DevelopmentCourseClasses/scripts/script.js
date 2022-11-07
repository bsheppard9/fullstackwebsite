/*global $*/
/*eslint-env browser*/

$(function() {
    //Basic syntax of jQuery
    //$(selector).action();
    //$('#box').fadeOut();
    //$('h1').css("color", "blue");
    $("button").click(function() {
       $('#box').fadeOut(1000);
    });
    
    //$('h2, h3, h4').css('border', 'solid 1px red');
    
    //$('div#container').css('border', 'solid 1px red');
    
    //$('li:first').css('border', 'solid 1px red');
    
    //$('p:even').css('border', 'solid 1px red');
    
    //$('div em').css('border', 'solid 1px red');
    
    //Selects only child elements
    //$('div > p').css('border', 'solid 1px red');
    
    //$(':header').css('border', 'solid 1px red');
    
    //$('div:contains("Brad")').css('border', 'solid 1px red');
    
    /* ---------------------------------------
        jQUERY EVENT METHODS
       ---------------------------------------*/
    $('#box').click(function() {
        alert('You just clicked the box!');
    });
    
    $("input").blur(function() {
        if ($(this).val() == "") {
            $(this).css('border', 'solid 1px red');
            $('#box').text('Forgot to add text?')
        }
    });
    
    $("input").keydown(function() {
        if ($(this).val() !== "") {
            $(this).css('border', 'solid 1px #777');
            $('#box').text('Thank you!');
        }
    });
    
    $('#box').hover(function() {
        $(this).text('You hovered!');
    }, function() {
        $(this).text('You hovered out!');
    });
    
    
    /*jQUERY CHAINING*/
    $('.notification-bar').delay(1000).slideDown().delay(1000).fadeOut();
    
    /*jQUERY HIDING AND SHOWING*/
    //$('h1').hide();
    //$('div.hidden').show();
    
    //$('p').fadeOut();
    //$('div.hidden').fadeIn(8000); //The CSS needs to set display as 'none'
    $('#box1').click(function() {
        $(this).fadeTo(2000, 0.25, function() {
            //Animation complete
            
            $(this).slideUp();
        });
    });
    $('div.hidden').slideDown();
    
    $('button').click(function() {
        $('#box1').slideToggle();
    })
    
    /*jQUERY ANIMATE */
    $('#left').click(function() {
        $('.box').animate({
            left: '-=40px',
            fontSize: "+=2px"
        }, function() {
            //Animation is complete!
        });
    });
    $('#up').click(function() {
        $('.box').animate({
            top: '-=40px',
            opacity: "+=0.1"
        }, function() {
            //Animation is complete!
        });
    });
    $('#right').click(function() {
        $('.box').animate({
            left: '+=40px',
            fontSize: "-=2px"
        }, function() {
            //Animation is complete!
        });
    });
    $('#down').click(function() {
        $('.box').animate({
            top: '+=40px',
            opacity: "-=0.1"
        }, function() {
            //Animation is complete!
        });
    });
    
    
    /*jQUERY CSS*/
    //$('#circle2').css('background','#8a8d22');
     $('#circle2').css({
        'display': 'inline-block',
        'background': '#8a8d22',
        'color': 'white',
        'text-align': 'center',
        'line-height': '140px',
        'height': '140px',
        'width': '140px',
        'margin': '40px' 
                       
    }).addClass('circleShape');
    
    //$('circle2').addClass('circleShape');
    
    //Racecar Animation
    
    //Click the GO Button
    $('#go').click(function() {
        
        //build a function that checks to see if a car has won the race
        function checkIfComplete() {
            if (isComplete == false) {
               isComplete = true;
            } else {
                place = 'second';
            }
        }
        //get the width of the cars
        var carWidth = $('#car1').width();
        
        //get the width of the racetrack
        var raceTrackWidth = $(window).width() - carWidth;
        
        //generate a random number between 1 and 5000
        var raceTime1 = Math.floor((Math.random() * 5000) + 1);
        var raceTime2 = Math.floor((Math.random() * 5000) + 1);
        
        //set a flag variable to FALSE by default
        var isComplete = false;
        
        //set a flag variable to FIRST by default
        var place = 'first';
        
        // animate car 1
        $('#car1').animate({
            
            //move the car width of the racetrack
            left: raceTrackWidth
        }, raceTime1, function() {
            //animation is complete
            
            //run a function
            checkIfComplete();
            
            //Give some text feedback in the race info box
            $('#raceInfo1 span').text('Finished in ' + place + ' and clocked in at ' + raceTime1 + ' milliseconds!');
        });
        // animate car 2
        $('#car2').animate({
            
            //move the car width of the racetrack
            left: raceTrackWidth
        }, raceTime2, function() {
            //animation is complete
            
            //run a function
            checkIfComplete();
            
            //Give some text feedback in the race info box
            $('#raceInfo2 span').text('Finished in ' + place + ' and clocked in at ' + raceTime2 + ' milliseconds!');
        });
    });
    
    $('#reset').click(function() {
        $('.car').css('left', '0');
        $('.raceInfo span').text('');
    })
});