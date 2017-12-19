var $id = function(o){ 
    return document.getElementById( o ) || o;
};
function getXMLHttp(){
    var xmlhttp;
    try {
        xmlhttp = new XMLHttpRequest(); // Mozilla / Safari / IE7
    } catch ( e ) {
        // IE
        var XMLHTTP_IDS = new Array('MSXML2.XMLHTTP.5.0',
            'MSXML2.XMLHTTP.4.0',
            'MSXML2.XMLHTTP.3.0',
            'MSXML2.XMLHTTP',
            'Microsoft.XMLHTTP' );
        var success = false;
        for ( var i=0; i < XMLHTTP_IDS.length && !success; i++) {
            try {
                xmlhttp = new ActiveXObject(XMLHTTP_IDS[i]);
                success = true;
            } catch (e) {}
        }
        if (!success) {
            throw new Error('Unable to create XMLHttpRequest.');
        }
    }
    return xmlhttp;
}

if( self != top ){
    if( document.location.hash.length > 1 && isNaN(parseInt(document.location.hash.substr(1))) == false )        
        self.location = "http://item.taobao.com/item.htm?id=" + document.location.hash.substr(1) +"&from=tll";
	else
		top.location = self.location;
}