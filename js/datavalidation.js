$(document).ready(function(){
    $('#submitdata').click(function(){
        var server = $('#server');
        if(server.val() == "" || server.val() == null){
            alert("Please select server option");
            return false;
        } 
        if(server.val() == 'localserver'){
            if($('input[type=radio][name=Particular]:checked').length == 0)
        {
           alert("Please check Particular server ");
           return false;
        }  

        }

        var appli_servername = $('#appli_servername');
        if(appli_servername.val() == ""){
            alert("Please Enter Application Server Name");
            return false;
        } 

        var reg_ipaddress = $('#reg_ipaddress');
        if(reg_ipaddress.val() == ""){
            alert("Please Enter Allocated IPAddress");
            return false;
        }
        
        var application_DBname = $('#application_DBname');
        if(application_DBname.val() == ""){
            alert("Please Enter stored DataBase name");
            return false;
        }
        
        
        var sustain = $('#appli_sustainby');
        if(sustain.val() == ""){
            alert("Please Enter Application Developer Name");
            return false;
        }

        if($('#status').is(':checked') == false){
            alert("Please Select Server Status");
            return false;
        }


    });
});


































// $(document).ready(function(){
//     $('#servermain').validate({
//         focus: true,
//         rules: {
//             server:{
//                 required: function(element) {
//                     return $('#server option:selected')
//                 }
//             }

//         }
//     });
// });