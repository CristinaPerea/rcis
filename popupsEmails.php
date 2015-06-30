<?php 
            if(isset($_GET["error"])){


                if($_GET["error"] === "1")
                     echo '<script>
                     $.alert({
                         title: "Error",
                        content: "Su email no ha podido ser enviado. Inténtelo de nuevo",
                     });
                        </script>';
                else
                    echo '<script>
                $.alert({
                        title: "Enhorabuena",
                        content: "Su email ha sido enviado con éxito",
                    });
            </script>   ';
            }
        ?>