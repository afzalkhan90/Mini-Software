<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <style>
        html {
  font-size: 62.5%;
  box-sizing: border-box;
}

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}
body{
    background: #242424;
}
.mn 
{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10%;
}
.calculator {
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 400px;
}

.calculator-screen {
  width: 100%;
  height: 80px;
  border: none;
  background-color: #999;
  color: #242424;
  text-align: right;
  padding-right: 20px;
  padding-left: 10px;
  font-size: 4rem;
}

input {
  height: 60px;
  font-size: 2rem!important;
}

.equal-sign {
  height: 98%;
  grid-area: 2 / 4 / 6 / 5;
}

.calculator-keys {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 20px;
  padding: 20px;
}
    </style>
</head>
<body>
<div class="container mn">
<div class="calculator card">
<form method="post">
<input type="text" class="calculator-screen z-depth-1 bordered" value="<?php @$num  ?>"  name="input" />
<div class="calculator-keys">

  <input type="submit" class="operator btn btn-info" value="+" name="opt">
  <input type="submit" class="operator btn btn-info" value="-" name="opt">
  <input type="submit" class="operator btn btn-info" value="*" name="opt">
  <input type="submit" class="operator btn btn-info" value="/" name="opt">

  <input type="submit" value="7" class="btn btn-light waves-effect" name="num">
  <input type="submit" value="8" class="btn btn-light waves-effect" name="num">
  <input type="submit" value="9" class="btn btn-light waves-effect" name="num">


  <input type="submit" value="4" class="btn btn-light waves-effect" name="num">
  <input type="submit" value="5" class="btn btn-light waves-effect" name="num">
  <input type="submit" value="6" class="btn btn-light waves-effect" name="num">


  <input type="submit" value="1" class="btn btn-light waves-effect" name="num">
  <input type="submit" value="2" class="btn btn-light waves-effect" name="num">
  <input type="submit" value="3" class="btn btn-light waves-effect" name="num">


  <input type="submit" value="0" class="btn btn-light waves-effect" name="num">
  <input type="submit" class="decimal function btn btn-secondary" value="." name="dot">
  <input type="submit" class="all-clear function btn btn-danger btn-sm" value="A/C" name="clear">

  <input type="submit" class="equal-sign operator btn  btn-light waves-effect" value="=" name="equals" />

</div>
</form>
</div>
</div>
</body>
</html>

<?php

$c_num1 = 'num';
$c_v1 = '';
$c_num2 = 'opt';
$c_v2 = '';

if(isset($_POST["num"]))
{
    
    $num = $_POST["input"].$_POST["num"];
}else
{
    $num='';
}
if(isset($_POST["opt"]))
{
    $c_v1=$_POST["input"];
    setcookie($c_num1, $c_v1, time()+(86400*30), "/");
    $c_v2=$_POST["opt"];
    setcookie($c_num2, $c_v2, time()+(86400*30), "/");
    $num='';
}
if(isset($_POST["equals"]))
{
    $num= $_POST["input"];

    switch($_COOKIE['opt'])
    {
        case'+' :
            $result=$_COOKIE['num'] + $num;
            break;
            case'-' :
                $result=$_COOKIE['num'] - $num;
                break;
                case'*' :
                    $result=$_COOKIE['num'] * $num;
                    break;
                    case'/' :
                        $result=$_COOKIE['num'] / $num;
                        break;
    }
    $num=$result;
}

?>