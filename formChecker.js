function resetForm()
{
  document.getElementById("myForm").reset();
}

function validateEmail(e)
{
  var r = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; //aped this code from http://stackoverflow.com/questions/46155/validate-email-address-in-javascript
  return r.test(e);
}


function validate()
{
  var v1 = document.getElementById("i1").value;
  var v2 = document.getElementById("i2").value;
  var v3 = document.getElementById("i3").value;
  var uname = document.getElementById("un").value;

  var v4 = document.getElementById("q1");
  var v5 = document.getElementById("q2");
  var v6 = document.getElementById("q3");

  if((v1 == '')||(v2 =='')||(v3==''))  //1.validate quantities are zero or higher and not blank
  {
    alert("Enter a quantity of 0 or more for each item");
  }else if((v1<0)||(v2<0)||(v3<0))
  {
    alert("The values for the items need to be greater than 0");
  }else if(uname == "")//2. username not blank
  {
    alert("Please enter a username");
  }else if(!validateEmail(uname))   //2.user name in the form of an email
  {
    alert("Please enter a valid username (e.g., Notlob@flyingcircus.com)");

  }else if(document.getElementById("pw").value == '')  //3.password cannot be blank
  {
    alert("Please enter a password");

  }else if(!(v4.checked||v5.checked||v6.checked))//4.shipping option picked
  {
      alert("Pick a shipping option");
  }else //5.process with php
  {
    document.getElementById("myForm").submit();

  }
}
