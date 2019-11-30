<?php

function validadePassword($p1, $p2)
{
    if ($p1 === $p2) {
        return true;
    }
    return false;
}

function uniqueCPF($cpf, $conn)
{
    $sql = "SELECT count(*) as total from user where user_cpf = '$cpf'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row['total'] == 1) {
        return false;
    }
    return true;
}

function imageTypeValidate($type)
{
    foreach (['jpeg','png'] as $generic_type) {
        if ($type ==  "image/$generic_type") {
            return $generic_type;
        }
    }
    return false;
}
