<div>
  <h1>Usuários</h1>
</div>

<div>
  <a href="http://localhost/CodeIgniter/usuario/cadastro/"><button type="button" name="cadastro">Novo Usuário</button></a>
</div>

<br><br>

<table border="3" style="background-color:black;width:800px;height:200px;">
  <tr>
    <th style="width:50px;text-align:center;background-color:white;">ID</th>
    <th style="width:100px;text-align:center;background-color:white;">Nome</th>
    <th style="width:100px;text-align:center;background-color:white;">Email</th>
    <th style="width:100px;text-align:center;background-color:white;">Editar</th>
    <th style="width:100px;text-align:center;background-color:white;">Excluir</th>
  </tr>
  <?php foreach ($codeigniter as $usu) { ?>
  <tr>
    <td style="width:50px;text-align:center;background-color:white;"><?= $usu->id; ?></td>
    <td style="width:100px;text-align:center;background-color:white;"><?= $usu->nome; ?></td>
    <td style="width:100px;text-align:center;background-color:white;"><?= $usu->email; ?></td>
    <td style="width:100px;text-align:center;background-color:white;"><a href="http://localhost/CodeIgniter/usuario/editar/<?= $usu->id; ?>"><button type="button" name="editar">Editar</button></a></td>
    <td style="width:100px;text-align:center;background-color:white;"><a href="http://localhost/CodeIgniter/usuario/excluir/<?= $usu->id; ?>" onclick=" return confirm('Você deseja realmento excluir essa pessoa?');"><button type="button" name="excluir">Excluir</button></a></td>
  </tr>
<?php }?>
</table>
