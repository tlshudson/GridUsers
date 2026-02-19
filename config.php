<?php
    $host = 'localhost';
    $port = '5432';
    $dbname = 'grid_users';
    $user = 'postgres';
    $password = 'P@g$1289#hg';

    $conStr = "host=$host port=$port dbname=$dbname user=$user password=$password";
    $dbconn = @pg_connect($conStr);

    if (!$dbconn) {
        die("Erro crítico na conexão: " . pg_last_error());
    }
    
    ?>