$(document).ready(function(){
    $('#Submit').click(function (e) { 
        e.preventDefault();

        var category = $('#AssetCategory');
        var dvcalt = $('#dvc_alloted');
        var main = $('#maintype');
        var hwdetails = $('#hw_model');

        if(category.val() == 'Pendrive'){
            if(dvcalt.val() == ""){
                alert("Please Enter Name");
                return false;
            }
        }

        if(main.val() == ""){
            alert("PLease Select Maintainence Type");
            return false;
        }

        if(hwdetails.val() == ""){
            alert("Please Select Hardware Model");
            return false;
        }




















    });
});


$(document).ready(function(){
    $('#AssetCategory').change(function(){
        var category = $('#AssetCategory');
        if(category.val() == 'Pendrive'){
            $('#regip').hide();
        }
        else{
            $('#regip').show();

        }
    });
});