<?php

use app\classes\Validation;
use app\models\Transaction;
use app\models\User;
use app\models\Post;

  $validation = new Validation;
  $validate = $validation->validate($_POST);

  $transaction = new Transaction;
  $transaction->transactions(function() use($transaction, $validate){
    
    $transaction->model(User::class)->insert($validate );
    
    //$transaction->model(Post::class)->insert();

  });

// $user = new User;

// $logged = $user->insert($validate);

// if($logged){
//   header('Location:/');
//}