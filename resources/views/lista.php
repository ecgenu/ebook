<html>
    <body
<head>
<link href="/css/app.css" rel="stylesheet">
    <title>Ebook</title>
</head>
<div class="container">        
<h1>Lista dos Contatos</h1>
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td>Nome</td>
                <td>Email</td>
                <td>Seção</td>
                <td>Telefone</td>
            
            </tr>
         <?php foreach ($funcionarios as $f): ?>
            <tr>
                <td><?= $f->nome ?></td>
                <td><?= $f->email ?></td>
                <td><?= $f->id_secao ?></td>
                <td><?= $f->fone ?></td>
            </tr>
          <?php endforeach  ?>
</div>  
        </table>


</body>

</html>