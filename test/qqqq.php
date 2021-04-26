<script>

        var today = new Date();
        var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 30 days

        function setCookie(name, id) {
            var element = document.getElementById(id);
            var elementValue = escape(element.value);

            document.cookie = name + "=" + elementValue + "; path=/; expires=" + expiry.toGMTString();
            console.log(document.cookie);
        }

        function displayCookieValue(name) {
            var value = getCookie(name);
            var element = document.getElementById("value");
            element.innerHTML = "Cookie name: "+ name + ", value " + value;

        }

        function getCookie(name) {
            var re = new RegExp(name + "=([^;]+)");
            var value = re.exec(document.cookie);
            return (value != null) ? unescape(value[1]) : null;
        }
        function fillIn(){
          if (document.cookie != ""){
            cookies = document.cookie.split(";");
            for (var i = 0; i < cookies.length; i++) {
              cookie = cookies[i].trim().split("=");
              if (cookie[0] == 'fname') {
                document.lmao.fname.value = cookie[1];
              }
              if (cookie[0] == 'lname'){
                document.lmao.lname.value = cookie[1].replace(/%20/g, " ");
              }
              if (cookie[0] == 'tel'){
                document.lmao.tel.value = cookie[1];
              }
              if (cookie[0] == 'email'){
                document.lmao.email.value = cookie[1];
              }
              if (cookie[0] == 'functie'){
                document.lmao.functie.value = cookie[1];
              }
              if (cookie[0] == 'true'){
                document.lmao.true.value = cookie[1].checked = true;
              }
            }
        }
      }
</script>
<html>
<body onload="fillIn()">
<form method="post" name="lmao" id="login-form">

    <label class="p-1" for="fname">Voornaam:</label>
    <input class="p-1 " type="text" id="fname" name="fname" onkeydown="if (event.keyCode == 13) document.getElementById('submitButton').click()"required>


    <label class="p-1 " for="lname">Achternaam:</label>
    <input class="p-1 " type="text" id="lname" name="lname" required>

    <label class="p-1" for="tel">Telefoonnummer:</label>
    <input class="p-1" type="number" id="tel" name="tel" required>

    <label class="p-1" for="email">E-mail:</label>
    <input class="p-1" type="email" id="email" name="email" required>

    <label class="p-1" for="functie">Functie:</label>
    <div class="d-flex flex-column">
    <select class="p-1" name="functie" id="functie" onchange="yesNoCheck(this);" required>
        <option value="werknemer">Werknemer</option>
        <option value="gast">Gast</option>
        <option value="leraar">Leraar</option>
    </select>

    <div>
        <label><a href="" style="color:black;">Terms of policy</a></label>
        <input type="checkbox" name="true" id="true" required>
    </div>

    <br>
    <button id="submitButton" onclick="setCookie('fname', 'fname'), setCookie('lname', 'lname'), setCookie('tel', 'tel'),
     setCookie('email', 'email'), setCookie('functie', 'functie'), setCookie('true', 'true')" type="submit">set Cookie email</button>
    <br>
    <button onclick="displayCookieValue('fname')" type="button">display Cookie voornaam</button>
    <br>
    <button onclick="displayCookieValue('lname')" type="button">display Cookie achternaam</button>
    <br>
    <button onclick="displayCookieValue('tel')" type="button">display Cookie telefoon</button>
    <br>
    <button onclick="displayCookieValue('email')" type="button">display Cookie email</button>
    <br>
    <button onclick="displayCookieValue('functie')" type="button">display Cookie functie</button>
    <br>
    <button onclick="displayCookieValue('true')" type="checkbox">display Cookie checkbox</button>
    <br>

   </form>

<div id="value"></div>
</body>
</html>
