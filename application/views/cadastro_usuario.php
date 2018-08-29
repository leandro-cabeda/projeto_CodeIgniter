<div>
  <h1>Novo Usuário</h1>
</div>

<form action="http://localhost/CodeIgniter/usuario/cadastrar" method="post">
    <div>
        <label>Nome:</label><br>
        <input type="text" name="nome" placeholder="Digite seu nome" required>
    </div>

    <div>
        <label>Email:</label><br>
        <input type="text" name="email" placeholder="Digite seu email" required>
    </div>

    <div>
        <label>Senha:</label><br>
        <input type="password" name="senha" placeholder="Digite sua senha" required>
    </div>
    <br>
    <div>
        <button type="submit" name="enviar">Enviar</button>
    </div>
</form>
