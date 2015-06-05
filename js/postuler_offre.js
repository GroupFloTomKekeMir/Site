
    $(document).ready(function () {

        $(".postuler").click(function () {
            
            var id_offre = $(this).val();
            
            $.ajax({
                method: "GET",
                url: "../php/postuler.php",
                data: {id_offre: id_offre},
                dataType: 'html',
                success: function (data) {
                    alert(data);
                }

            });

        })
    });

