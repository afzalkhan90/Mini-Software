<!DOCTYPE html>
<html lang="en">
<head>
    <title>Choose Table</title>
    <link rel="stylesheet" href="css/bootstrap.css" type='text/css'>
    <style>
    .mn 
    {
        width: 400px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 5%;
    }
    /* center h2 
    {
        letter-spacing: 7px;
    } */
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
        <div class="mn">
            <form method="post">
        <div class="input-group mb-3">
        <span class="input-group-text bg-primary text-light" id="basic-addon1">Enter Your Table Number</span>
        <input type="number" class="form-control" name="tableno" >
        <input type="submit" class="btn btn-outline-primary" value="RUN" name="btn" >
</div>
            </form>
<?php

if(isset($_POST["btn"]))
{
    $t_no = $_POST["tableno"];
    
    for($i = 1; $i <=10; $i++ )
    {   
        echo '<table class="table table-hover table-bordered rounded ">';
        echo '<tr scope="col" >';
        echo  '<td>'.$t_no.'</td><td> x </td><td>'.$i.'</td><td> = </td><td>'.$t_no*$i.'</td>';
        echo '</tr>';
        echo '</table>';
       ;
    }
}


?>
        </div>
            </div>
            <div class="col-lg-6">
            <div class="mn">
            <form method="post">
        <div class="input-group mb-3">
        <span class="input-group-text bg-primary text-light" id="basic-addon1">Enter Table Number</span>
        <input type="number" class="form-control" name="tableno" >
        <input type="number" class="form-control" name="why" >
        <input type="submit" class="btn btn-outline-primary" value="RUN" name="abtn" >
</div>
            </form>
<?php

if(isset($_POST["abtn"]))
{
    $t_no = $_POST["tableno"];
    $why = $_POST["why"];
    
    for($i = 1; $i <= $why; $i++ )
    {   
        echo '<table class="table table-hover table-bordered rounded ">';
        echo '<tr scope="col" >';
        echo  '<td>'.$t_no.'</td><td> x </td><td>'.$i.'</td><td> = </td><td>'.$t_no*$i.'</td>';
        echo '</tr>';
        echo '</table>';
       ;
    }
}


?>
        </div>
            </div>
        </div>
    </div>
</body>
</html>

