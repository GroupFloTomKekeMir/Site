  $(document).ready(function () {



        $(".valider").click(function () {

            var nom = $("#nom").val();
            var prenom = $("#prenom").val();
            var nom_artiste = $("#nom_artiste").val();
            var age = $("#age").val();
            var telephone = $("#telephone").val();
            var mail = $("#mail").val();
            var password = $("#password").val();
            var password2 = $("#password2").val();
            var description = $("#description").val();
            var id_util = $("#id_util").val();
            var id_adr = $("#id_adr").val();
            var numero = $("#numero").val();
            var adresse = $("#adresse").val();
            var CP = $("#CP").val();
            var ville = $("#ville").val();



            $.ajax({
                method: "GET",
                url: "../php/validerprofil.php",
                data: {id_util: id_util, nom: nom, prenom: prenom, nom_artiste: nom_artiste, age: age, telephone: telephone, mail: mail, password: password, password2: password2, description: description, numero: numero, adresse: adresse, CP: CP, ville: ville, id_adr: id_adr},
                dataType: 'html',
                success: function (data) {

                    $("#test").html(data);
                }

            });

        })


        $(".voir").click(function () {

            var id_offre = $(this).val();
            // alert(id_offre);

            $.ajax({
                method: "GET",
                url: "../php/voirOffre.php",
                data: {id_offre: id_offre},
                dataType: 'html',
                success: function (data) {

                    $("#" + id_offre + ".voirOffre").html(data);
                    $("#" + id_offre + ".voir").hide();
                    $("#" + id_offre + ".masquer").show();
                }

            });

        })


        $(".masquer").click(function () {

            var id_offre = $(this).val();
            $("#" + id_offre + ".voirOffre").html("");
            $("#" + id_offre + ".voir").show();
            $("#" + id_offre + ".masquer").hide();

        })


        $(".retracter").click(function () {

            var id_offre = $(this).val();


            $.ajax({
                method: "GET",
                url: "../php/refracterOffre.php",
                data: {id_offre: id_offre},
                dataType: 'html',
                success: function (data) {

                    $("#" + id_offre + ".titre").html("");
                    $("#" + id_offre + ".voir").hide();
                    $("#" + id_offre + ".masquer").hide();
                    $("#" + id_offre + ".voirOffre").html("");

                }

            });

        })





    });

