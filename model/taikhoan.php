<?php
function loadall_taikhoan($key="",$idtk=0){
       $sql = "SELECT * FROM taikhoan";
       if($key != ""){
           $sql .= " WHERE user = '$key'";
       }
       if($idtk > 0){
           $sql .= " WHERE id = $idtk";
       }
       $sql .= " ORDER BY id desc";
       return pdo_query($sql);
}
    function insert_taikhoan($user,$email,$pass){
        $sql="INSERT INTO taikhoan(user,email,pass) values('$user','$email','$pass')";
        pdo_execute($sql); 
    }

    function delete_taikhoan($id){
        $sql="delete FROM taikhoan WHERE id=".$id;
        pdo_execute($sql);
    }

    function checkuser($user,$pass){
        $sql="SELECT * FROM taikhoan WHERE  user='".$user."' AND  pass='".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    
    function checkemail($email){
        $sql="SELECT * FROM taikhoan WHERE  email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function  update_taikhoan($id,$user,$pass,$email){
            $sql="UPDATE taikhoan SET user='".$user."', pass='".$pass."', email='".$email."' WHERE id=".$id;
            pdo_execute($sql);
    }
        
    function update_role($id,$role){
            $sql="UPDATE taikhoan SET role='".$role."' WHERE id=".$id;
            pdo_execute($sql);
        }
    function checkuserlogin($user){
        $sql="SELECT * FROM taikhoan WHERE  user='".$user."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function selectone_tk($id){
        $sql = "SELECT * FROM taikhoan WHERE id=".$id;
        return pdo_query_one($sql);
    }
?>