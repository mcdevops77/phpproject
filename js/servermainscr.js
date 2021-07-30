// $(document).ready(function(){
//     $('#Assetbelongs').change(function(){
//         if($(this).val() == "Eenadu") {
//             $('#Assetdevicecode').show();
//         } else{
//             $('#Assetdevicecode').hide();
//         }
//     });
// });



$(function(){
    $("#Assetbelongs").change(function(){
        if($(this).val() == "Eenadu") {
            $("#Assetdevicecode").show();
        } else {
            $("#Assetdevicecode").hide();
        }
    });
});


// $('#Assetbelongs').change(function(){
//     if($('#Assetbelongs').val() == 'EENADU'){
//         $('#Assetdevicecode').show();
//     } else{
//         $('#Assetdevicecode').hide();
//     }
// });