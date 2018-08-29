<div>
  <h1>Editar Usuário</h1>
</div>

<form action="http://localhost/CodeIgniter/usuario/atualizar" method="post">
  <input type="hidden" id="id" name="id" value="<?= $codeigniter[0]->id; ?>">
    <div>
        <label>Nome:</label><br>
        <input type="text" name="nome" value="<?= $codeigniter[0]->nome; ?>" placeholder="Digite seu nome" required>
    </div>

    <div>
        <label>Email:</label><br>
        <input type="text" name="email" value="<?= $codeigniter[0]->email; ?>" placeholder="Digite seu email" required>
    </div>

    <div>
        <label>Senha:</label><br>
        <input type="password" name="senha" value="<?= md5($codeigniter[0]->senha); ?>" placeholder="Digite sua senha" required>
    </div>
    <br>
    <div>
        <button type="submit" name="enviar">Enviar</button>
    </div>
</form>
