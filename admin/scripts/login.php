<?php

//check username and password against database, check existence and make sure it matches
function login($username, $password){
    require_once('connect.php');
    //check if user exists

    //TODO: fill out the following variable SQL query
    // so that it can COUNT how many users
    // in the tbl_users that with the user_name = $username
    $check_exist_query = 'SELECT COUNT(*) FROM tbl_user WHERE user_name=:user_name';
    $user_set = $pdo->prepare($check_exist_query);

    $user_set->execute(
        array(
            ':user_name'=>$username
        )
    );

    if($user_set->fetchColumn()>0){
        //echo 'User Exists';
        //when user exists, check if user info is validated
        $_get_user_query = 'SELECT * FROM tbl_user WHERE user_name = :username AND user_pass = :password';
        $get_user_set = $pdo->prepare($get_user_query);

        $get_user_set->execute(
            array(
                ':username'=>$username,
                ':password'=>$password
            )
        );

    while($found_user = $get_user_set->fetch(PDO::FETCH_ASSOC)){
        echo 'Login Successful!';
    }

    }else{
        echo 'User does not exists'
    }



?>