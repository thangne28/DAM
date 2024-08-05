<?php
function loadone_taikhoan($id){
    $sql="select*from taikhoan where id=".$id;
    $tk=pdo_query_one($sql);   
    return $tk;
}

function loadall_taikhoan(){
    $sql="select*from taikhoan order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}

function insert_taikhoan($email,$user,$pass){
    $sql="insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}

function checkuser($user,$pass) {
    $sql="SELECT * FROM taikhoan WHERE user='".$user."' and pass='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email) {
    $sql="SELECT * FROM taikhoan WHERE email='".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id,$user,$pass,$email,$address,$tel){

        $sql=  "UPDATE taikhoan SET user = '".$user."', pass = '".$pass."', email = '".$email."',address = '".$address."', tel = '".$tel."' WHERE id =" .$id;
   
    pdo_execute($sql);
}

function delete_taikhoan($id){
    $sql="delete from taikhoan where id=".$id;
    pdo_execute($sql);
}

?>