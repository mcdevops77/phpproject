$(document).ready(function(){
    $('#Submit').click(function (e) { 
        e.preventDefault();


        var category = $('#AssetCategory');
        var par = $('#particulartype');
        var dvcalt = $('#dvc_alloted');
        var main = $('#maintype');
        var hwdetails = $('#hw_model');
        var ip = $('#reg_ipaddress');
        var purpose =$('#purpose');
        var bkp = $('#backupstored');
        var dc = $('#changed_date');
        var lc = $('#location');
        var st = $('#status');

        


        if(category.val() == "" || category.val() == null){
            alert("Category must be selected");
            return false;
        }
        
       if(category.val() == 'Server'){
        if($('input[type=radio][name=Particular]:checked').length == 0){
            alert("Please Select Particular Server Type");
               return false;
           }
       }

       if(category.val() == 'Pendrive'){
            if(dvcalt.val() == ""){
                alert("Please Enter Name");
                return false;
            }
        }





        if(dvcalt.val() == ""){
            alert("PLease Specify Server or System Allocated Name");
            return false;
        }

        if(main.val() == ""){
            alert("PLease Select Maintainence Type");
            return false;
        }

        
        if(hwdetails.val() == ""){
            alert("Please Select Hardware Model");
            return false;
        }
        if(category.val() == 'Server' || category.val() == 'System'){
        if(ip.val() == ""){
            alert("IP Address Should be Entered");
            return false;
        }
    }

        if($('input[type=radio][name=hw_issue]:checked').length == 0){
            alert("Please Check Hardware Issue");
            return false;
        }

        if($('input[type=radio][name=sw_issue]:checked').length == 0){
            alert("Please Check Software Issue");
            return false;
        }

        if(purpose.val() == null || purpose.val() == ""){
            alert("Enter Purpose of changing system or server");
            return false;
        }

        if(category.val() == 'Server'){
            if(par.val() == 'liveserver'){
                if(bkp.val() == ""){
                    alert("Please Enter Backup Stored details for live server with IP Address");
                    return false;
                }
            }
        }

       
        if(dc.val() == ""){
            alert("Please Enter Date ");
            return false;
        }
        if(lc.val() == ""){
            alert("Enter Particular Location");
            return false;
        } if(st.val() == ""){
            alert("Please Select Particular Status");
            return false;
        }
    });
});