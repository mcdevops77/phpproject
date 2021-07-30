function loginvalidation(){
    var usr = document.forms["frmLogin"]["UserName"].value;
    if(usr == "" || usr == null){
        alert("please Enter Username");
        return false;
    }

    var pwd = document.forms["frmLogin"]["Password"].value;
    if(pwd == "" || pwd == null){
        alert("please Enter Password");
        return false;
    }

}
