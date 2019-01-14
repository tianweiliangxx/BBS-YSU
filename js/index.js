$(document).ready(function(){
    $('#mySubmit').css("pointerEvents","none");
    $('#user').on('keyup',function(){
        $("#names").empty();
        var userVal = $(this).val();
        if(userVal=="" || userVal.length<6 || userVal.length>16){
            $(this).after("<span id='names' style='color: red;font-size:14px;'>*用户名格式输入错误，请重新输入</span>");
            $('#mySubmit').css("pointerEvents","none");
        }else{
            $('#password').on('keyup',function(){
            $('#psws').empty();
            var pswVal = $(this).val();
            if(pswVal == "" || pswVal.length<6 || pswVal.length>16){
                    $(this).after("<span id='psws' style='color: red;font-size:14px;'>*密码格式输入错误，请重新输入</span>")
                    $('#mySubmit').css("pointerEvents","none");
                }
            else{
                    $('#mySubmit').css("pointerEvents","auto");
                }
            })
        }
    })
})