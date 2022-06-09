$(document).ready(function () {
    
    $('.submitbtn').click(function (event) {
        
        var error = 0;
        
        $('#info-container').empty();
        $('.required').each(function () {
            
            if (!$(this).val()) {
                error++;
                $(this).css('border-color', 'red');
            }
            $(this).bind("change paste keyup", function () {
               var remainingError=0;
              if(!$(this).val()){
                $(this).css('border-color', 'red');  
             
              }
              else{
                      $(this).css('border-color', 'green'); 
                  }

                   $('.required').each(function (){
                     if (!$(this).val()) {
                        remainingError++;
                         }
                   });
                  
                    var msg = '<p class ="warning_msg"> You did not fill up ' + remainingError + ' required field(s). Fill up these and try again</p>';
                    $('#info-container').empty();
                    if(!remainingError){
                         msg = '<p class ="success_msg"> You filled up all required field(s).</p>';
                    }
                    $('#info-container').append(msg);
                
            });

        });

        if (error) {
            var msg = '<p class ="warning_msg"> You did not fill up ' + error + ' required field(s). Fill up these and try again</p>';
            $('#info-container').append(msg);
            event.preventDefault();
        }
    });

});






