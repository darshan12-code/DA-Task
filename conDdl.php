<?php
$conn=mysqli_connect("localhost","root","","task") or die("Connection Failed");

if($_POST['type']==""){

    $sql="SELECT * FROM state_tb";
    $query=mysqli_query($conn,$sql) or die("Query Successful.");
    
    $str="";
    while($row=mysqli_fetch_assoc($query)){
        $str .="<option value='{$row['sid']}'>{$row['sname']}</option>";
    }
    
 
}
else if($_POST['type']=="cityData"){

    $sql="SELECT * FROM city_tb WHERE states= {$_POST['id']}";
    $query=mysqli_query($conn,$sql) or die("Query Successful.");
    
    $str="";
    while($row=mysqli_fetch_assoc($query)){
        $str .="<option value='{$row['cid']}'>{$row['cname']}</option>";
    }
    
 
}

echo $str;

?>