<h1>Editar Usuários</h1>

<form action="/user_update" method="POST">
<input type="hidden" name="id" value="<?=$userFound->id;?>">
  <input type="text" value="<?=$userFound->name;?>" name="name"><br><br>
  <input type="text" value="<?=$userFound->email;?>" name="email"><br><br>
  <input type="text" value="<?=$userFound->password;?>" name="password"><br><br>

  <button type="submit">Atualizar</button>
</form>