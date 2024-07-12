   <?php
    // include("config.php")
    ?>


   <!doctype html>
   <html lang="pt-br">

   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Listar Usuarios</title>
       <script src="https://kit.fontawesome.com/7ffdafc7d7.js" crossorigin="anonymous"></script>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   </head>

   <body>
       <table class="table">
           <thead>
               <tr>
                   <th scope="col">id</th>
                   <th scope="col">Nome</th>
                   <th scope="col">Email</th>
               </tr>
           </thead>
           <tbody class="table-group-divider">
               <?php
                $sql = $conn->query("SELECT * FROM tabela_usuarios");
                while ($dados = $sql->fetch_object()) { ?>
                   <tr>
                       <td><?= $dados->id?></td>
                       <td><?= $dados->nome?></td>
                       <td><?= $dados->email?></td>
                   </tr>
               <?php }
                ?>



           </tbody>
       </table>


       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   </body>

   </html>