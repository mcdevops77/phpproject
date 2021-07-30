function accvalidation() {
    var x = document.forms["accessiores"]["AssetCategory"].value;
    if(x == "" || x == null) {
        alert("category must be filled out");
        return false;
    }

    var mt = document.forms["accessiores"]["Make_type"].value;
    if(mt == "" || mt == null) {
        alert("Make Type must be filled out");
        return false;
    }

    var sn = document.forms["accessiores"]["serial_no"].value;
    if(sn == "" || sn == null) {
        alert("Serial number must be filled out");
        return false;
    }
}