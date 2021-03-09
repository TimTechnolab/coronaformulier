
// hier schrijf je een cookie

function WriteCookie() {
    var now = new Date();
    now.setMonth( now.getMonth() + 1 );
    cookievalue = escape(document.Mainform.email.value) + ";"

    document.cookie = "email=" + cookievalue;
    document.cookie = "expires=" + now.toUTCString() + ";"
    document.write ("je bent ingelogt : "  + cookievalue );
}


