// function frmvalidate() {
//     var UserName=document.frmLogin.UserName.value;
//     var password=document.frmLogin.password.value;

//     var username = document.frmLogin.UserName.value;
//     var passwd = document.frmLogin.Password.value
    
//     if (username=null || username==""){
//         alert("pleade Enter your correct username");
//         username.focus();
//         return false;
//     }
//     if (password==null || password==""){
//         alert("please Enter correct password");
//         password.focus();
//         return false;
//     }else {
//         alert("cannot be loged in");
//         return false;
//     }
// }


function lgvalidation() {
   var a = document.forms["frmlogin"]["uname"].value;
   if(a == "" || a == null) {
       alert("please Enter username");
       return false;
   }

   var p = document.forms["frmlogin"]["pwd"].value;
   if(p == "" || p == null) {
       alert("please enter password");
       return false;
   }
}