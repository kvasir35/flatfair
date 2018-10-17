$(document).ready(function () {
	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').toggleClass('active');
		$(this).toggleClass('active');
	});
    
    $( "#popUpLogin" ).on('hidden.bs.modal', function (e)
    {
        $("#alertModalLogin").empty();
        
        if($("#emailLogin").hasClass('is-invalid'))
        {
            $("#emailLogin").removeClass("is-invalid");
        }
        
        if($("#passwordLogin").hasClass('is-invalid'))
        {
            $("#passwordLogin").removeClass("is-invalid");
        }
    });
    
    $( "#popUpforgetPassword" ).on('hidden.bs.modal', function (e)
    {
        $("#alertModalLogin").empty();
        
        if($("#emailLogin").hasClass('is-invalid'))
        {
            $("#emailLogin").removeClass("is-invalid");
        }
        
        if($("#passwordLogin").hasClass('is-invalid'))
        {
            $("#passwordLogin").removeClass("is-invalid");
        }
    });
    
    $( "#alertModalSignin" ).on('hidden.bs.modal', function (e)
    {
        $("#alertModalLogin").empty();
        valid = true;
        
        if($("#signUpEmail").hasClass('is-invalid'))
        {
            $("#signUpEmail").removeClass("is-invalid");
        }
        
        if($("#signUpPassword").hasClass('is-invalid'))
        {
            $("#signUpPassword").removeClass("is-invalid");
        }
        
        if($("#signUpConfirmPassword").hasClass('is-invalid'))
        {
            $("#signUpConfirmPassword").removeClass("is-invalid");
        }
        
        if($("#signUpFirstName").hasClass('is-invalid'))
        {
            $("#signUpFirstName").removeClass("is-invalid");
        }
        
        if($("#signUpLastName").hasClass('is-invalid'))
        {
            $("#signUpLastName").removeClass("is-invalid");
        }
        
    });
    
    $("#formLogin").on('submit', function(e)
    {
        valid = true;
        if($('#emailLogin').val() == "") 
        {
            valid = false;
            
            if (!$("#emailLogin").hasClass('is-invalid'))
            {
                $("#emailLogin").addClass("is-invalid");
            }
        }
        else if($("#emailLogin").hasClass('is-invalid'))
        {
            $("#emailLogin").removeClass("is-invalid");
        }
        
        if ($('#passwordLogin').val() == "") 
        {
            valid = false;
            
            if (!$("#passwordLogin").hasClass('is-invalid'))
            {
                $("#passwordLogin").addClass("is-invalid");
            }
            $('#passwordLogin').val("");
        }
        else if($("#passwordLogin").hasClass('is-invalid'))
        {
            $("#passwordLogin").removeClass("is-invalid");
        }

        if(valid)
        {
            setCookie("user",$('#emailLogin').val());
            deleteCookie("document");
            $("#alertDiv").empty();
            $("#alertDiv").append("<div class='alert alert-success' role='alert'>You are now connect</div>");
            $("#popUpLogin").modal('toggle');
        }
        else
        {
            e.preventDefault();
            $("#alertModalLogin").empty();
            $("#alertModalLogin").append("<div class='alert alert-danger' role='alert' id='alertSuccess'>The e-mail or password is incorect</div>");
        }
    });

    $("#formForgetPassword").on('submit', function(e)
    {
        valid = true;
        if($('#emailForgetPassword').val() == "") 
        {
            valid = false;
            
            if (!$("#emailForgetPassword").hasClass('is-invalid'))
            {
                $("#emailForgetPassword").addClass("is-invalid");
            }
        }
        else if($("#emailForgetPassword").hasClass('is-invalid'))
        {
            $("#emailForgetPassword").removeClass("is-invalid");
        }

        if(valid)
        {
            $("#alertDiv").empty();
            $("#alertDiv").append("<div class='alert alert-success' role='alert'>Your new password as been send to your mail adress : "+$('#emailForgetPassword').val()+ "</div>");
            $("#popUpforgetPassword").modal('toggle');
        }
        else
        {
            e.preventDefault();
            $("#alertModalForgetPassword").empty();
            $("#alertModalForgetPassword").append("<div class='alert alert-danger' role='alert' id='alertSuccess'>This e-mail is incorect</div>");
        }
    });
    
    $("#formSignUp").on('submit', function(e)
    {
        valid = true;
        if ($('#signUpType').val() == "") 
        {
            valid = false;
        }

        if($('#signUpEmail').val() == "") 
        {
            valid = false;
            
            if (!$("#signUpEmail").hasClass('is-invalid'))
            {
                $("#signUpEmail").addClass("is-invalid");
            }
        }
        else if($("#signUpEmail").hasClass('is-invalid'))
        {
            $("#signUpEmail").removeClass("is-invalid");
        }
        
        if ($('#signUpPassword').val() == "" || $('#signUpPassword').val() != $('#signUpConfirmPassword').val()) 
        {
            valid = false;
            
            if (!$("#signUpPassword").hasClass('is-invalid'))
            {
                $("#signUpPassword").addClass("is-invalid");
            }
            $('#signUpPassword').val("");
        }
        else if($("#signUpPassword").hasClass('is-invalid'))
        {
            $("#signUpPassword").removeClass("is-invalid");
        }
        
        if ($('#signUpConfirmPassword').val() == "" || $('#signUpPassword').val() != $('#signUpConfirmPassword').val()) 
        {
            valid = false;
            
            if (!$("#signUpConfirmPassword").hasClass('is-invalid'))
            {
                $("#signUpConfirmPassword").addClass("is-invalid");
            }
            $('#signUpConfirmPassword').val("");
        }
        else if($("#signUpConfirmPassword").hasClass('is-invalid'))
        {
            $("#signUpConfirmPassword").removeClass("is-invalid");
        }
        
        if ($('#signUpFirstName').val() == "") 
        {
            valid = false;
            
            if (!$("#signUpFirstName").hasClass('is-invalid'))
            {
                $("#signUpFirstName").addClass("is-invalid");
            }
        }
        else if($("#signUpFirstName").hasClass('is-invalid'))
        {
            $("#signUpFirstName").removeClass("is-invalid");
        }
        
        if ($('#signUpLastName').val() == "") 
        {
            valid = false;
            
            if (!$("#signUpLastName").hasClass('is-invalid'))
            {
                $("#signUpLastName").addClass("is-invalid");
            }
        }
        else if($("#signUpLastName").hasClass('is-invalid'))
        {
            $("#signUpLastName").removeClass("is-invalid");
        }
        
        if(valid)
        {
            setCookie("user",$('#emailForm').val());
            deleteCookie("document");
            $("#alertDiv").empty();
            $("#alertDiv").append("<div class='alert alert-success' role='alert'>Your account had been created</div>");
            $("#popUpLogin").modal('toggle');
        }
        else
        {
            e.preventDefault();
            $("#alertModalSignin").empty();
            $("#alertModalSignin").append("<div class='alert alert-danger' role='alert' id='alertSuccess'>Correct the error in the form</div>");
        }
    });
    
    $("#disconnect").on("click",function()
    {
        deleteCookie("user");
        location.reload();
    });
});

function setCookie(key, value) 
{
    var expires = new Date();
    expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
    document.cookie = key + '=' + value + ';expires=' + expires.toUTCString() + "; path=/;";
}

function getCookie(key) 
{
    var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
    return keyValue ? keyValue[2] : null;
}

function deleteCookie( name ) 
{
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/;';
}