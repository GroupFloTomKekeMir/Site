  $(document).ready(function () {



        $(".ajouter").click(function () {
            
            var id = $(this).val();


            $.ajax({
                method: "GET",
                url: "../php/ajouterArticle.php",
                data: {id: id},
                dataType: 'html',
                success: function (data) {

                     setTimeout($("#test").html(data),20);
                   
                }

            });

        })
        
    });