
function validationofname() {
  var name;
  name=document.getElementById("name").value;
  var num=name.search(/[0-9]/ig);

  if(name=="")
  {
    document.getElementById('emptyname').style.display="inline-block";
    document.getElementById('name').style.border=" 1px red solid";
    return false;

  }
  else {
    if (num>-1) {
        document.getElementById('notchar').style.display="inline-block";
        document.getElementById('name').style.border="1px red solid";
      return false;
    }
    else {
      document.getElementById('emptyname').style.display="none";
      document.getElementById('notchar').style.display="none";
      document.getElementById('name').style.border="1px green solid";
    }

  }


}
function validationofphon() {
var phone;
phone=document.getElementById("phone").value;
var phonenum=phone.length;

if(phone=="")
{
  document.getElementById('emptyphone').style.display="inline-block";
  document.getElementById('phone').style.border="1px red solid";
  return false;

}
else {
  if (phonenum!=11) {
      document.getElementById('phonelength').style.display="inline-block";
      document.getElementById('phone').style.border="1px red solid";
    return false;
  }
  else {
    document.getElementById('emptyphone').style.display="none";
    document.getElementById('phonelength').style.display="none";
    document.getElementById('phone').style.border="1px green solid";

  }

}

}

function validationofmail() {
var email;
email=document.getElementById("email").value;
var char=email.search(/@/gi);
var dot=email.search(/.com/);
if(email=="")
{
  document.getElementById('emptymail').style.display="inline-block";
  document.getElementById('email').style.border="1px red solid";
  return false;

}
else {
  if (char==-1||dot==-1) {
      document.getElementById('notmail').style.display="inline-block";
      document.getElementById('email').style.border="1px red solid";
    return false;
  }
  else {
    document.getElementById('emptymail').style.display="none";
    document.getElementById('notmail').style.display="none";
    document.getElementById('email').style.border="1px green solid";
  }

}

}
function validationofpass() {
var pass;
pass=document.getElementById("pass").value;

if(pass=="")
{
  document.getElementById('emptypass').style.display="inline-block";
  document.getElementById('pass').style.border="1px red solid";
  return false;

}

  else {
    document.getElementById('emptypass').style.display="none";
    document.getElementById('pass').style.border="1px green solid";
  }

}
function confirmpass() {
  var password=document.getElementById("pass").value;
  var cpassword=document.getElementById("cpass").value;
  if(cpassword=="")
  {
    document.getElementById('emptycpass').style.display="inline-block";
    document.getElementById('cpass').style.border="1px red solid";
    return false;

  }
  if(password!=cpassword)
  {
      document.getElementById('cpas').style.display="inline-block";

  }
  else {
    document.getElementById('emptycpass').style.display="none";
    document.getElementById('cpas').style.display="none";
  }
}
