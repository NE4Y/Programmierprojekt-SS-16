<section id="registry" class="content">
    <form method="post" action=""  id ="registerform" name="registerform">

        <div class="input-group">
            <span class="input-group-addon" ><i class="fa fa-user"></i></span>
            <input required type="text" class="form-control" name="username" id="username" placeholder="Benutzername" aria-describedby="sizing-addon2">
        </div>

        <div class="input-group">
            <span class="input-group-addon" ><i class="fa fa-user"></i></span>
            <input required type="text" class="form-control" name="realname" id="realname" placeholder="Richtiger Name" aria-describedby="sizing-addon2">
        </div>

        <div class="input-group">
            <span class="input-group-addon" ><i class="fa fa-envelope-o"></i></span>
            <input required type="text" class="form-control" name="mail" id="mail"  placeholder="Email" aria-describedby="sizing-addon2">
        </div>

        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
            <input required type="password" class="form-control" name="userpass" id="userpass" placeholder="Passwort" aria-describedby="sizing-addon2">
        </div>

        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
            <input required type="password" class="form-control" id="userpass2" placeholder="Passwort wiederholen" aria-describedby="sizing-addon2">
        </div>

        <button type="button"  id="callFunction"  class="btn btn-info">
            <i class="fa fa-user-plus white" aria-hidden="true"></i> Registrieren
        </button>


        <input hidden="true" name="register" >

        <p id="textfeld"></p>

        <script>
            function checkValues() {
                var username = document.getElementById("username").value;
                var realname = document.getElementById("realname").value;
                var mail = document.getElementById("mail").value;
                var userpass = document.getElementById("userpass").value;
                var userpass2 = document.getElementById("userpass2").value;

                //Check if all variables are set
                if (username == '' || realname == '' || mail == '' || userpass == '' || userpass2 == '') {
                    document.getElementById("textfeld").innerHTML = 'Bitte alle Felder ausfüllen';
                }

                else if (userpass !== userpass2) {
                    document.getElementById("textfeld").innerHTML = "Passwörter stimmen nicht überein";
                }
                else {
                    document.registerform.submit();

                }
            }

                document.getElementById("callFunction").onclick = checkValues;

        </script>
        <br> <span id="back_to_login">zurück zum Login</span>
    </form>
</section>


