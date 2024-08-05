<?php 
    function loadall_binhluan($idpro){
        $sql = "select * from binhluan where 1";
        if($idpro>0)
        $sql.=" AND idpro='".$idpro."'";
        $sql.=" order by id desc";
        $listbl =  pdo_query($sql);
        return $listbl;
    }
    function insert_binhluan($idpro, $noidung){
        $date = date('Y-m-d');
        $sql = "
            INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) 
            VALUES ('$noidung','2','$idpro','$date');
        ";
        //echo $sql;
        //die;
        pdo_execute($sql);
    }
    function delete_binhluan($id){
        $sql="delete from binhluan where id=".$id;
        pdo_execute($sql);
    }

    ?>
