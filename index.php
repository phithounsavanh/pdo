<?php
  //hostname
  $host = "localhost";
  //username used to access to the database
  $user = 'root';
  //password used to access to the database
  $password = '123456';
  //the database you want to access
  $dbname = 'podtest';

  //Set DSN
  $dsn = 'mysql:host='. $host .';dbname='.$dbname;
  //Create a PDO instance for establishing a database's connection
  $pdo = new PDO($dsn, $user, $password);

  // $status = 'admin';
  // //Create a SQL command (:status is a name paramater)
  // $sql = 'SELECT * FROM users WHERE status = :status';
  // $statement = $pdo->prepare($sql);
  // $statement->execute(['status'=>$status]);
  // //get all data from the return
  // $users = $statement->fetchAll(PDO::FETCH_OBJ);
  // //show data by loop
  // foreach($users as $user){
  //   echo $user->name.'<br>';
  // }

  $name = 'Aling ling';
  $email = 'kwills@gmail.com';
  $status = 'guest';

  $sql = 'INSERT INTO users(name, email, status) VALUES (:name, :email, :status)';
  $statement = $pdo->prepare($sql);
  $statement->execute(['name'=>$name,'email'=>$email,'status'=>$status]);
  echo 'Added user';
  