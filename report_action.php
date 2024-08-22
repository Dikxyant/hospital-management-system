<?php
include('config.php');

$action = $_POST["action"];

if($action == 'show'){  
    $search = $_POST['search'];
    $ward = $_POST['ward'];
    $a = "";
    if($search != ''){  
        $a = " and p.Name like '%$search%'";
    } 
    $b = "";
    if($ward >0){  
        $b = " and w.AID=$ward";
    }    
    
    $sql = "select p.*, b.Number as bname, w.Name as wname from tblpatient p, tblward w, tblbed b where p.WardID=w.AID and p.BedID=b.AID".$a.$b;
    $result=mysqli_query($connect,$sql) or die("SQL a Query");
    $out="";

    if(mysqli_num_rows($result) > 0){
        $out.='
        <table class="table table-hover table-bordered mb-0">
        <thead>
        <tr> 
            <th width="7%;">No</th> 
            <th>Patient Name</th> 
            <th>Age</th>
            <th>Ward Name</th>
            <th>Bed Number</th>     
        </tr>
        </thead>
        <tbody>
        ';
        $no = 0;
        while($row = mysqli_fetch_array($result)){
            $no=$no+1;
            $out.="<tr>
                <td>{$no}</td>
                <td>{$row["Name"]}</td>
                <td>{$row["Age"]}</td>
                <td>{$row["wname"]}</td>
                <td>{$row["bname"]}</td>
            </tr>";
        }
        $out.="</tbody>";
        $out.="</table>";

        echo $out; 
        
    }else{
    
    $out.='
        <table class="table table-hover table-bordered mb-0">
        <thead>
        <tr>
            <th width="7%;">No</th> 
            <th>Patient Name</th> 
            <th>Age</th>
            <th>Ward Name</th>
            <th>Bed Number</th>           
        </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="5" class="text-center">No data</td>
            </tr>
        </tbody>
        </table>
        ';
        echo $out;
    }
}

if($action == 'showbyteam'){  
    $search = $_POST['search'];
    $team = $_POST['team'];
    $a = "";
    if($search != ''){  
        $a = " and p.Name like '%$search%'";
    } 
    $b = "";
    if($team >0){  
        $b = " and t.AID=$team";
    }    
    
    $sql = "select p.*, b.Number as bname, t.Name as tname, w.Name as wname from tblpatient p, tblward w, tblteam t, tblbed b where p.WardID=w.AID and p.BedID=b.AID and p.TeamID=t.AID".$a.$b;
    $result=mysqli_query($connect,$sql) or die("SQL a Query");
    $out="";

    if(mysqli_num_rows($result) > 0){
        $out.='
        <table class="table table-hover table-bordered mb-0">
        <thead>
        <tr> 
            <th width="7%;">No</th> 
            <th>Patient Name</th> 
            <th>Age</th>
            <th>Ward Name</th>
            <th>Bed Number</th> 
            <th>Team Name</th>     
        </tr>
        </thead>
        <tbody>
        ';
        $no = 0;
        while($row = mysqli_fetch_array($result)){
            $no=$no+1;
            $out.="<tr>
                <td>{$no}</td>
                <td>{$row["Name"]}</td>
                <td>{$row["Age"]}</td>
                <td>{$row["wname"]}</td>
                <td>{$row["bname"]}</td>
                <td>{$row["tname"]}</td>
            </tr>";
        }
        $out.="</tbody>";
        $out.="</table>";

        echo $out; 
        
    }else{
    
    $out.='
        <table class="table table-hover table-bordered mb-0">
        <thead>
        <tr>
            <th width="7%;">No</th> 
            <th>Patient Name</th> 
            <th>Age</th>
            <th>Ward Name</th>
            <th>Bed Number</th> 
            <th>Team Name</th>           
        </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="6" class="text-center">No data</td>
            </tr>
        </tbody>
        </table>
        ';
        echo $out;
    }
}

?>