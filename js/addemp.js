$(document).ready(function () {
    $('#btnemp').click(function(){

        var empid = $('#emp_code');

        var empname = $('#emp_name');

        if(empid.val() == ""){
            alert("Please Enter Employee Code");
            return false;
        }

        if(empname.val() == ""){
            alert("Please Enter Employee Name");
            return false;
        }
    });
});