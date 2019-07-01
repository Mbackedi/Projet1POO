
            $(function() {
                $("#non").click(function() {

                    $("#addre").show();
                    $("#type1").hide();
                    $("#type2").hide();
                });

                $("#bourse").click(function() {
                    $("#type1").show();
                    $("#addre").hide();
                    $("#type2").hide();
                });

                $("#loge").click(function() {
                    $("#type1").show();
                    $("#type2").show();
                    $("#addre").hide();
                });

            });
        