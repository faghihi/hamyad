/**
 * Created by RshNk on 20/12/2016.
 */
// $(document).ready(function () {
//
//     $.ajax(
//
//     );
//
// });


$("#changeName").click(function(){
    // console.log('salam');
    var url = $('#changeName').attr("data-link");
    console.log(url);
    //add it to your data
    var data = {
        _token:$(this).data('token'),
        Name:$('#NameInput').val()
    };
    $.ajax({
        url: url,
        type:"POST",
        data: data,
        success:function(data){
            // alert(data.msg);
            if(data.msg==1){
                $('#changeName').parent().parent().hide('slow');
                $('#errorform').show('fast');
            }
            if(data.msg==2){

                $('#changeName').parent().parent().hide('slow');
                $('#errorform').show('fast');
            }
            if(data.msg==3){

                $('#changeName').parent().parent().hide('slow');
                $('#successform').show('fast');
            }

        },error:function(){
            $('#changeName').parent().parent().hide('slow');
            $('#errorform').show('fast');
        }
    });
});

