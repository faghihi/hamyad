/**
 * Created by hossein on 12/17/16.
 */

// $('#subscribe').click(function () {
//     var display2 = {};
//     display2["Email"] = $('#submail').val();
//     // console.log( JSON.stringify(display2) );
//     $.ajax({
//         Type:'get',
//         dataType: 'json',
//         url: '/Subscribe',
//         data: {'data':JSON.stringify(display2)},
//         success: function ($info) {
//             alert('salam');
//             // console.log($info);
//             // $('#Enter_string').text($info.begining_numbers);
//             console.log($info);
//         }
//     });
// });
$("#subscribe").click(function(){
    var url = $(this).attr("data-link");

    //add it to your data
    var data = {
        _token:$(this).data('token'),
        Email:$('#submail').val()
    };
    $.ajax({
        url: url,
        type:"POST",
        data: data,
        success:function(data){
            // alert(data.msg);
            if(data.msg==1){
                $('#subform').hide('slow');
                $('#errorform').show('fast')
            }
            if(data.msg==2){
                $('#subform').hide('slow');
                $('#errorform1').show('fast')
            }
            if(data.msg==3){
                $('#subform').hide('slow');
                $('#successform').show('fast')
            }

        },error:function(){
                $('#subform').hide('slow');
                $('#errorform2').show('fast')
        }
    }); //end of ajax
});

// function getMessage(){
//     var display2 = {};
//     display2["Email"] = $('#submail').val();
//     $.ajax({
//         type:'POST',
//         url:'/Subscribe',
//         data:{'_token': "<?php echo csrf_token() ?>",'data':JSON.stringify(display2)},
//         success:function(data){
//             // $("#msg").html(data.msg);
//             console.log(data.msg);
//         }
//     });
// }