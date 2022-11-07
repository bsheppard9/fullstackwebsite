/*global $*/
/*eslint-env browser*/

$(function(){
    $('.box').draggable();
    
    $('#box1').draggable({scroll: true, revert: "invalid"});
    
    $('#box2').draggable({axis: "x"});
    
    $('#box3').draggable({axis: "y"});
    
    $('#box4').draggable({containment: ".container", revert: "invalid"});
    //$('#box4').draggable({containment: "parent"});
    
    //DROPPABLE
    
    $('#droppable').droppable({
        accept: '#box1',
        drop: function() {
            $(this).find('span').html("When a box got attitude, drop it like it's hot!");
        }
    });
    
    //SORTABLE
    $('#sortable').sortable({ connectWith: "#sortableToo", placeholder: "placeholderBox"});
    $('#sortableToo').sortable({ connectWith: "#sortable"});
    
    //ACCORDION
    $('#accordion').accordion({ collapsible: true, heightStyle: "content" });
    
    //DATEPICKER
    $('.date').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        showButtonPanel: true,
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 1,
        minDate: 0,
        //minDate: "-1D"
        //minDate: "-1W"
        //minDate: "-1Y"
        //minDate: "-1W -3D"
        maxDate: "+1M +6D"
    });
    
    //TODO LIST
    $('#todoList ul').sortable({
        items: "li:not('.listTitle, .addItem')", //Items that cannot be sorted include the listTitle class or the addItem class
        connectWith: "ul", //Can connect with all other unordered lists
        dropOnEmpty: true, //You can drop on an empty, unordered list
        placeholder: "emptySpace"
    });
    
    $('input').keydown(function(e) {
        if (e.keyCode == 13) { //Checks to see if the return key was pressed
            var item = $(this).val();
            $(this).parent().parent().append('<li>' + item + '</li>'); //Turns the input into a new list item
            $(this).val(''); //Clears the value in the input when finished
        }
    });
    
    $('#trash').droppable({
        drop: function(event, ui) {
            ui.draggable.remove(); //Removes the list item upon dragging it to the square
        }
    })
});