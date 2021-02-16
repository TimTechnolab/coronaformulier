function yesNoCheck(that) {
    if (that.value == "leraar") {
        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
}

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }

