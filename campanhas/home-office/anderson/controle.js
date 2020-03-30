$("#contador").find("textarea").JQTArea({
    setLimit:500
});
function countChar(val){
    var len = val.value.length;
    if (len >= 500) {
             val.value = val.value.substring(0, 500);
    } else {
             $('#contador').text(500 - len);
    }
};