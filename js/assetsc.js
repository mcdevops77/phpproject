function assetsvalidation() {
    var x = document.forms["assets"]["AssetCategory"].value;
    if(x == "" || x == null) {
        alert("category must be filled out");
        return false;
    }
    var b = document.forms["assets"]["Assetbelongs"].value;
    if(b == "" || b == null) {
        alert("Assetbelongs must be selected");
        return false;
    }

    var d = document.forms["assets"]["Assetdevicecode"].value;
    if(d == "" || d == null) {
        alert("Device code must be entered");
        return false;
    }

    var m = document.forms["assets"]["Make_type"].value;
    if(m == "" || m == null) {
        alert("Make type must be selected");
        return false;
    }

    var c = document.forms["assets"]["model"].value;
    if(c == "" || c == null) {
        alert("Model must be selected below");
        return false;
    }

    var hd = document.forms["assets"]["hw_details"].value;
    if(hd == "" || hd == null) {
        alert("Hardware Details must be Entered");
        return false;
    }

    var ds = document.forms["assets"]["deviceserialno"].value;
    if(ds == "" || ds == null) {
        alert("Device Serial Number must be entered");
        return false;
    }

    var os = document.forms["assets"]["OS"].value;
    if(os == "" || os == null) {
        alert("Please Select Operating System");
        return false;
    }

    var da = document.forms["assets"]["dvc_alloted"].value;
    if(da == "" || da == null) {
        alert("please Enter device allocated for");
        return false;
    }

    var item = document.forms["assets"]["optradio"].value;
    if(item == "" || item == null) {
        alert("Must be selected item Refundable");
        return false;
    }

    var reg = document.forms["assets"]["reg_user"].value;
    if(reg == "" || reg == null) {
        alert("please Enter Registered Name");
        return false;
    }

    var ip = document.forms["assets"]["reg_ipaddress"].value;
    if(ip == "" || ip == null){
        alert("Please Entered Allocated IP Address");
        return false;
    }

    // var recv = document.forms["assets"]["dvc_recv"].value;
    // if(recv == "" || recv == null){
    //     alert("Please Enter Received Date");
    //     return false;
    // }

    // var usr = document.forms["assets"]["put_to_user"].value;
    // if(usr == "" || usr == null){
    //     alert("Please Enter User given Date");
    //     return false;
    // }

    var loc = document.forms["assets"]["Ast_location"].value;
    if(loc == "" || loc == null) {
        alert("Please Enter Location");
        return false;
    }
}