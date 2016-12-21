

$(document).ready(function () {
   $('.more_course').hide();
   $('.more_packs').hide();

});

function showcourses() {
    $('.more_course').slideToggle();
    if($('#coursebut').attr('name')=='show')
    {
        $('#coursebut').text('بستن');
        $('#coursebut').attr('name','close');
    }
    else
    {
        $('#coursebut').text('مشاهده ی بیشتر');
        $('#coursebut').attr('name','show');
    }
}
function showpacks() {
    $('.more_packs').slideToggle();
    if($('#packbut').attr('name')=='show')
    {
        $('#packbut').text('بستن');
        $('#packbut').attr('name','close');
    }
    else
    {
        $('#packbut').text('مشاهده ی بیشتر');
        $('#packbut').attr('name','show')
    }
}

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



function CheckNewPass() {
    var psw=$('#NewPass').val();
    var repsw=$('#RePass').val();
    console.log(psw);
    console.log(repsw);

    if(repsw==psw) {
        return true;
    }
    else {
        $('#errorpsw').show();
        // $("#changePass").removeAttribute('disabled');
        alert('salam');
        $('#changePass').prop("disabled", false);
        return false;
    }
}

