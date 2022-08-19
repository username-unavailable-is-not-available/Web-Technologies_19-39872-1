function valName() {
    let a = document.forms["formValidation"]["fName"].value;
    let b = document.forms["formValidation"]["lName"].value;
    let pattern = /^[a-zA-Z]+$/;
  
    if (a == "" || b == "") {
      alert("Name Can Not Be Empty!");
      return false;
    } else if (pattern.test(a) == false || pattern.test(b) == false) {
      alert("Name Is Not Valid!");
      //return false;
    }  
}

function valMail() {
  let c = document.forms["formValidation"]["email"].value;
  let pattern = /(\w+)@(\w+){3,}.com/;

  if (c == "") {
    alert("Email Can Not Be Empty");
    return false;
  } else if (pattern.test(c) == false) {
    alert("Email Is Not Valid!");
    //return false;
  }
}

function valGender() {
  let d = document.forms["formValidation"]["gender"].value;
  if (d == "") {
    alert("Gender Can Not Be Empty");
    return false;
  }
}

function valDOB() {
  let e = document.forms["formValidation"]["DOB"].value;
  if (e == "") {
    alert("Date of Birth Can Not Be Empty!");
    return false;
  }
}

function valPass() {
  let x = document.forms["formValidation"]["password"].value;
  let y = document.forms["formValidation"]["conPassword"].value;

  if (x == "") {
    alert("Password Can Not Be Empty!");
    return false;
  } else if (x.length <= 8) {
    alert("Password Can Not Be Less Than 8 Characters!");
    return false;
  } else if (x !== y) {
    alert('Password Did Not Match!');
    return false;
  }
}
