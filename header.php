<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/wordpress/wp-content/themes/allinone/style.css">
    <title>Allinone</title>
</head>
<body>
    <div class="topo">
        <nav>
            <ul>
                <img id="menuicone" src="wp-content\themes\allinone\menuicon.png">
                
                <script> 
                document.getElementById("menuicone").addEventListener("click", function(){
                    <?php Exibir_categorias() ?>
                })
                </script>
                
            </ul>
        </nav>
    </div>
