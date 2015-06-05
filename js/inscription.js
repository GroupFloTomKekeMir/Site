
    $(document).ready(function () {
        $(".valider").click(function () {

            var login = $("#login").val();
            var password = $("#password").val();
            var password2 = $("#password2").val();
            var nom = $("#nom").val();
            var prenom = $("#prenom").val();
            var age = $("#age").val();
            var email = $("#email").val();
            var telephone = $("#telephone").val();
            var numero = $("#numero").val();
            var rue = $("#rue").val();
            var cp = $("#cp").val();
            var ville = $("#ville").val();
            var description = $("#description").val();
            var nom_artiste = $("#nom_artiste").val();
            jQuery.ajax({
                method: "GET",
                url: "../php/validerinscription.php",
                data: {login: login, password: password, password2: password2, nom: nom, prenom: prenom, age: age, email: email, telephone: telephone, numero: numero, rue: rue, cp: cp, ville: ville, description: description, nom_artiste: nom_artiste},
                dataType: 'html',
                success: function (data) {
                    $("#test").html(data);
                }
            })
        });
    });

