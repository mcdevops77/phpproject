$(document).ready(function () {
    $('#btnsubmit').click(function(){

        var cat = $('#hw_type');   
     

        var servtype = $('#servertype');

        var manuf = $('#hw_make');

        var mdl = $('#hw_model');

        var processor = $('#hw_processor');

        var ram = $('#hw_ram');

        var hdisk = $('#hw_Hdd');

        var sno = $('#serialno');

        var st = $('#status');

        var drcv = $('#receiveddate');

        if(cat.val() == "" || cat.val() == null){
            alert('Please Select Hardware Category');
            return false;
        }


        if(cat.val() == 'Server'){
            if(servtype.val() == ""){
                alert("Please Select server type");
                return false;
            }
        }

        if(manuf.val() == ""){
            alert("Please select Manufacture");
            return false;
        
        }

        if(mdl.val() == ""){
            alert("Please Select Model");
            return false;
        }

        
        if(cat.val() == 'System'){
            if(processor.val() == ""){
                alert("Please Select Hardware Proceessor Type");
                return false;
            }
            else if(ram.val() == ""){
                alert("Select RAM Model");
                return false;
            }
            else if(hdisk.val() == ""){
                alert("Please Select Disk Storage");
                return false;
            }
        }

        if(cat.val() == 'Server'){
            if(processor.val() == ""){
                alert("Please Select Hardware Proceessor Type");
                return false;
            }
            else if(ram.val() == ""){
                alert("Select RAM Model");
                return false;
            }
            else if(hdisk.val() == ""){
                alert("Please Select Disk Storage");
                return false;
            }
        }

        if(cat.val() == 'Laptop'){
            if(processor.val() == ""){
                alert("Please Select Hardware Proceessor Type");
                return false;
            }
            else if(ram.val() == ""){
                alert("Select RAM Model");
                return false;
            }
            else if(hdisk.val() == ""){
                alert("Please Select Disk Storage");
                return false;
            }

        }

        if(cat.val() == 'Mouse'){
            if(sno.val() == ""){
                alert("Please input Serial Number");
                return false;
            }
        }

        if(cat.val() == 'Pendrive'){
            if(hdisk.val() == ""){
                alert("Please Select Storage");
                return false;
            }
            if(sno.val() == ""){
                alert("please input serial number");
                return false;
            }
        }

        if(cat.val() == 'Mobiles'){
            if(ram.val() == ""){
                alert("Select RAM Model");
                return false;
            }
            else if(hdisk.val() == ""){
                alert("Please Select Disk Storage");
                return false;
            }
           else if(sno.val() == ""){
                alert("please input serial number");
                return false;
            }
        }
        
        if(cat.val() == 'Mobile Tab'){
            if(ram.val() == ""){
                alert("Select RAM Model");
                return false;
            }
            else if(hdisk.val() == ""){
                alert("Please Select Disk Storage");
                return false;
            }
           else if(sno.val() == ""){
                alert("please input serial number");
                return false;
            }
        }

        if(cat.val() == 'External HDD'){
             if(hdisk.val() == ""){
                alert("Please Select Disk Storage");
                return false;
            }
           else if(sno.val() == ""){
                alert("please input serial number");
                return false;
            }
        }

        if(cat.val() == 'Internal HDD'){
            if(hdisk.val() == ""){
               alert("Please Select Disk Storage");
               return false;
           }
          else if(sno.val() == ""){
               alert("please input serial number");
               return false;
           }
       }

       if(cat.val() == 'Keyboard'){
            if(sno.val() == ""){
                alert("please input serial number");
                return false;
            }
       }
       if(cat.val() == 'Monitor'){
            if(sno.val() == ""){
            alert("please input serial number");
            return false;
            }
        }
        if(cat.val() == 'NIC'){
            if(sno.val() == ""){
                alert("please input serial number");
                return false;
            }
       }

        if(st.val() == ""){
            alert("Please Select Current Status");
            return false;
        }

        if(st.val() == 'newstock'){
            if(drcv.val() == ""){
                alert("Please select Received Date for Newstock ");
                return false;
            }

        }
    });
    
});