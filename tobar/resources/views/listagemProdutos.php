<DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <title>Controle de estoque</title>
    </head>
<body>
    <h1>Listagem de Produtos</h1>
<table class="table">
    <?php foreach ($produtos as $p): ?>
    <tr>
        <td><?=$p->id?></td>
        <td><?=$p->nome?></td>
        <td><?=$p->precoVenda?></td>
        <td><?=$p->descricao?></td>
        <td><?=$p->quantidade?></td>
        <td >
            <a href="/produtos/detalhe/<?= $p->id ?>"> detalhe </a>
           </td>
    </tr>
    <?php endforeach?>
</table>

</body>
</html>
