<?php

use app\classes\Validation;
use app\models\User;

$validatation = new Validation;
$validate = $validatation->validate($_POST);

$user = new User;

$updated = $user->update($validate, ['id' => $validate->id]);

if($updated){
  header('Location:/');
}