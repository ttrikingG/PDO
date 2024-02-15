<h1>Home</h1>

<table border="1" width="100%" >
  <thead>
    <th>id</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
  </thead>

  <tbody>
    <?php foreach($users as $user):?>
    <tr>
      <td><?=$user->id ?></td>
      <td><?=$user->name ?></td>
      <td><?=$user->email ?></td>
      <td><a href="/user_edit?id=<?=$user->id;?>">Editar</a></td>
      <td><a href="/user_destroy?id=<?=$user->id; ?>">Deletar</a></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>