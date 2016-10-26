    $(document).ready(function(){
        $("#submit").show('fast');
        $("#submit").click(function () {
            var thisinput=$('#form_input').val();//this is the argument passed
            //var thiszip="30030";    
            $.ajax({
                url: "do_stuff.php",//this is php the page it calls
                type: "POST",
                dataType:'json',
                
                data: {input: thisinput},
                //async: false,//keep loading gif from showing up
                success: function (data) {
                    console.log(data);//log the data returned
                    $('#form_input').val(data);//display the returned JSON data in the input box
                    //do other stuff with the returned date
                },
                error: function () {
                    alert( "Posting failed." );
                    $('#message').html("");
                },
            });
        
        return false;
        });
    });



 


