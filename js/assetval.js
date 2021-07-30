$(document).ready(function(){
    $('#astsubmit').click(function (e) { 
        e.preventDefault();


        var category = $('#AssetCategory');

        var apt = $('#apt').is(':checked');

        var empdvc = $('#emp_code');

        var dvcalt = $('#devicealtd');

        var belongs = $('#Assetbelongs');

        var code = $('#Assetdevicecode');
        var hwdetails = $('#hw_processor');
        var sno= $('#deviceserialno');
        var os = $('#OS');
        var refun = $('#ref');
        var ip = $('#reg_ipaddress');
        var dtrcv = $('#DeviceReciviedOn');
        var dtison = $('#puttoUser');
        var lc = $('#Ast_location');
        var st = $('#status');

        


        if(category.val() == "" || category.val() == null){
            alert("Category must be selected");
            return false;
        }
        
        if(category.val() == 'System'){
            if($('input[type=radio][name=Applicable]:checked').length == 0){
                alert("Please Select Applicable Type");
                return false;
            }
        }

       if(category.val() == 'Servers'){
           if(dvcalt.val() == ""){
            alert("Please Specify Assigned Name");
            return false;
           }
       }

       if(category.val() == 'laptop'){
            if(dvcalt.val() == ""){
                alert("Please Specify laptop Assigned Name");
                return false;
            }
       }


           if(apt == 'Userpc' || apt == 'Server'){
            //    alert("1");
               if(empdvc.val() == ""){
                   alert("Please Select Allocated User Name");
                   return false;
               }
               else if(apt == 'Server'){
                    if(dvcalt.val() == ""){
                        alert("Please Enter System applicable as server Name");
                        return false;
                    }
               }   
           }


        if(belongs.val() == ""){
            alert("PLease Select Asset Belongs To");
            return false;
        }

        if(belongs.val() == 'Eenadu'){
            if(code.val() == ""){
                alert("Please Specify Asset Device Code for Eenadu");
                return false;
            }
        }
        
        if(hwdetails.val() == ""){
            alert("Please Select Hardware Model");
            return false;
        }

        if(sno.val() == ""){
            alert("Please Enter Serial Number");
            return false;
        }
        
        if(os.val() == ""){
            alert("Please Select Operating System");
            return false;
        }

        if($('input[type=radio][name=item]:checked').length == 0)
        {
           alert("Please check out Refundable");
           return false;
        }

        if(ip.val() == ""){
            alert("IP Address Should be Entered");
            return false;
        }

        if(category.val() == 'laptop'){
        if($('input[type=checkbox][name=laptopaccessories]:checked').length == 0){
            alert("Please Check Laptop Accessiories");
            return false;
        }
    }
        if(category.val() == 'laptop'){
        if($('input[type=checkbox][name=laptopoptions]:checked').length == 0){
            alert("Please Check Laptop Options");
            return false;
        }
    }

        if(dtrcv.val == null || dtrcv.val() == ""){
            alert("Please Specify Recived Date");
            return false;
        }

        if(dtison.val() == null || dtison.val() == ""){
            alert("Please Specify Date of Issued on");
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