$(document).ready(function () {
    $('#selectedSeat').hide();
    var id = '';
    $('.showseats').click(function () {
        if ($(this).hasClass('booked')) {
            alert('This seat already booked');
        }
        else if($(this).hasClass('ordered')){
             alert('This seat already ordered');
        }
        else {
            var realSeat = $(this).attr('name');
               var findString = $(this).attr('id')+'>'+realSeat;
               
               
            if( id.indexOf(findString) >= 0){
                    id = id.replace(findString, "");
            };
            id = id + ',' + $(this).attr('id')+'>'+realSeat;
            
            console.log(findString);
            $('#selectedSeat').val(id);
            $(this).css('background-color', '#E26A6A');
            $(this).css('cursor', 'not-allowed');
        }
    });
 
    $('#bookbtn').click(function(){

        var selected = $('#selectedSeat').val();
        if (typeof selected == 'undefined' || selected == false || selected.length == 0 || selected == "" || selected.replace(/\s/g,"") == "") {
         alert("You did not select any seat!");

             return false;
        }
            else
        {
          
            return true;
        }

    });

});


