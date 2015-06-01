function ClearForm()
{
    document.registration.reset();
}
var validate;
function validateTeamname()
{
        validate = true;
        var u = document.forms["registration"]["teamname"].value;
        var uLength = u.length;
        var illegalChars = /\W/; // allow letters, numbers, and underscores
        if (u == null || u == "")
        {
          alert("Teamname must be filled out");
            validate     = false;
        }
        else if (uLength <4 || uLength > 11)
        {
          alert("Charater length is 4-11 ");
            validate     = false;
        }
        else if (illegalChars.test(u))
        {
          alert("Use of special characters in denied");
            validate     = false;
        }
        teamname.focus;

}
function checkEmail()
{
        var email = document.forms["loginform"]["email"].value;
        var filter = /^(([^<>()[]\.,;:s@"]+(.[^<>()[]\.,;:s@"]+)*)|(".+"))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
        if (!filter.test(email.value))
        {
        alert('Please provide a valid email address');
        email.focus;
        validate = false;
        }
}
function validatePassword()
   {
       var p = document.forms["registration"]["password"].value
       var pLength = p.length;
       if (p == null || p == "")
       {
         alert('You left the password field empty');
          validate     = false;
       }
       else if (pLength < 6 || pLength > 20)
       {
         alert('Your password must be between 6 and 20 characters in length');
           validate     = false;
       }

   }
function validateCPassword()
   {
       var p = document.forms["registration"]["password"].value
       var cP = document.forms["registration"]["cpassword"].value
       var pLength = p.length;
       if (p != cP)
       {
         alert('The passwords do not match!');
           validate     = false;
       }

   }

function validateForm()
{
     validateText();
     checkEmail();
     validatePassword();
}
