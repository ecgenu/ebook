<html>
    <body

        <h1>Lista do Ebook</h1>
        <table>
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
        </table>


</body>

</html>