$(document).ready(function(){
    $('#mySubmit').css("pointerEvents","none");
    $('#username').on('keyup',function(){
        $("#names").empty();
        var userVal = $(this).val();
        if(userVal=="" || userVal.length<6 || userVal.length>16){
            $(this).after("<span id='names' style='color: red;font-size:16px;'>*请将您的用户名保持在6~16位之间</span>");
            $('#mySubmit').css("pointerEvents","none");
        }else{
            $('#password').on('keyup',function(){
            $('#psws').empty();
			var pswVal = $(this).val();
            if(pswVal == ""){
                    $(this).after("<span id='psws' style='color: red;font-size:16px;'>*密码不可以为空</span>")
                    $('#mySubmit').css("pointerEvents","none");
                }else if(pswVal.length<6 || pswVal.length>16){
					$(this).after("<span id='psws' style='color: red;font-size:16px;'>*密码保持在6~16位之间</span>")
                    $('#mySubmit').css("pointerEvents","none");
					}else {
						$('#psw_confirm').on('keyup',function(){
						$('#psws_confirm').empty();
						var psw_confirm = $(this).val();
						if(psw_confirm !== pswVal){
							$(this).after("<span id='psws_confirm' style='color: red;font-size:16px;'>*两次密码不一致，请核实</span>");
							$('#mySubmit').css("pointerEvents","none");
						}else{
							$('#psw_confirm').after("<span id='psws_confirm' style='color: green;font-size:16px;'>*两次输入一致|可以注册</span>");
							$('#mySubmit').css("pointerEvents","auto");
						}
					})
				}
            })
        }
    })
})