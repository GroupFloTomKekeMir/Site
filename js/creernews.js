$(document).ready(function () {
      
        $(".creernews").click(function () {

            var titre = $("#titre").val();
            var contenu = $("#contenu").val();

            jQuery.ajax({
                method: "GET",
                url: "../php/posteNews.php",
                data: {titre:titre,contenu:contenu},
                dataType: 'html',
                success: function (data) {
                    $("#reponse").html(data);
                }
            })
        });
    });