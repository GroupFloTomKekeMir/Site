            $(document).ready(function () {
               
                $("#recherche_offre").click(function () {
                    $(".dropdown-menu").show();
                    alert("test2");
                    var offre = document.getElementById("offre_recherche").value;
                    alert(offre);


                });

            });