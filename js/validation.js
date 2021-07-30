function System(){

    $('#Applicable').hide();
        $('#AssetCategory').change(function(){
        if($('#AssetCategory').val() == 'System') {
          $('#Applicable').show();
             }   
           else{
          $('#Applicable').hide();
          $("input:radio").removeAttr("checked");
            }
        });
    });
}

function Monitors(){
    $('#Applicable').hide();
        $('#AssetCategory').change(function(){
        if($('#AssetCategory').val() == 'System') {
          $('#Applicable').show();
             }   
           else{
          $('#Applicable').hide();
          $("input:radio").removeAttr("checked");
            }
        });
    });
}