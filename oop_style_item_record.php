<?php
 include('oopdb.php');
 date_default_timezone_set('Asia/Yangon');
class DataCRUD extends Database{
    public function insertData($table,$data)
    {
        //INSERT INTO user (name,email) VALUES  ('$name','$email');
        $sql="INSERT INTO ".$table." (".implode(',',array_keys($data)).") VALUES ('".implode("','",array_values($data))."')";
        // echo $sql;
        mysqli_query($this->conn,$sql);
        header("location:itemquery.php");
    }
    public function selectData($table)
    {
        $sql="SELECT * FROM ".$table;
        return mysqli_query($this->conn,$sql);
    }
}

$obj= new DataCRUD;



if(isset($_POST['hideitemname']))
{
    $myarray=array("itemName"=>$_POST['itemname'],"price"=>$_POST['price'],"discountPrice"=>$_POST['discountPrice'],"created_date"=>date('Y-m-d'),"modified_date"=>date('Y-m-d'));
    
    $obj->insertData($_POST['hideitemname'],$myarray);
}
?>