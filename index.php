<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
        border-collapse: collapse;
        width: 50%;
        }
        td {
            border: 1px solid gray;
            padding: 10px 20px;
            height: 30px;
            text-align: center
        }
        th {
            border: 1px solid gray;
            padding: 10px 20px;
            background-color: lightgrey;
        }
        .col {
            font-weight: bold;
        }
    </style>
    <?php
        function a_not($A, $B)
        {
            if ($A==0) {
                echo 1;
            }
             else {
                echo 0;
            }
        }    
        ?>
        <?php
        function a_or($A, $B)
        {
            if ($A==1||$B==1) {
                echo "true";
            } else {
                echo "false";
            }
        }    
        ?>
        <?php
        function a_and($A, $B)
        {
            if ($A==1 && $B==1) {
                echo "true";
            } else {
                echo "false";
            }
        }    
        ?>
        <?php
        function a_xor($A, $B)
        {
            if (($A==1 && $B==1) || ($A==0 && $B==0)){
                echo "false";
            } else {
                echo "true";
            }
        }    
    ?>
</head>
<body>
    <table>
        <caption><h2>Таблица истинности PHP</h2></caption>
        <thead>
            <tr>
                <th>A</th>
                <th>B</th>
                <th>!A</th>
                <th>A || B</th>
                <th>A && B</th>
                <th>A xor B</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $A=0;?></td>
                <td><?php echo $B=0;?></td>
                <td><?php a_not($A, $B);?></td>
                <td><?php a_or($A, $B)?></td>
                <td><?php a_and($A, $B)?></td>
                <td><?php a_xor($A, $B)?></td>
            </tr>
            <tr>
                <td><?php echo $A=0;?></td>
                <td><?php echo $B=1;?></td>
                <td><?php a_not($A, $B);?></td>
                <td><?php a_or($A, $B)?></td>
                <td><?php a_and($A, $B)?></td>
                <td><?php a_xor($A, $B)?></td>
            </tr>
            <tr>
                <td><?php echo $A=1;?></td>
                <td><?php echo $B=0;?></td>
                <td><?php a_not($A, $B);?></td>
                <td><?php a_or($A, $B)?></td>
                <td><?php a_and($A, $B)?></td>
                <td><?php a_xor($A, $B)?></td>
            </tr>
            <tr>
                <td><?php echo $A=1;?></td>
                <td><?php echo $B=1;?></td>
                <td><?php a_not($A, $B);?></td>
                <td><?php a_or($A, $B)?></td>
                <td><?php a_and($A, $B)?></td>
                <td><?php a_xor($A, $B)?></td>
            </tr>
        </tbody>   
    </table>

    <?php 
    $true = true;
    $false = false;
    $one = 1;
    $noll = 0;
    $minus_one = -1;
    $one_str = "1";
    $null = null;
    $php = "php";
    function check($x,$y){
        if ($x == $y){
            echo "true";
        }
        else{
            echo "false";
        }
     }
    ?>
    <table>
        <caption><h2>Гибкое сравнение в PHP</h2></caption>
        <thead>
            <tr>
                <th></th>
                <th><?php echo "true"?></th>
                <th><?php echo "false"?></th>
                <th><?php echo "1"?></th>
                <th><?php echo "0"?></th>
                <th><?php echo "-1"?></th>
                <th><?php echo '"1"'?></th>
                <th><?php echo "null"?></th>
                <th><?php echo '"php"'?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="col"><?php echo "true"?></td>
                <td><?php check($true, $true)?></td>
                <td><?php check($true, $false)?></td>
                <td><?php check($true, $one)?></td>
                <td><?php check($true, $noll)?></td>
                <td><?php check($true, $minus_one)?></td>
                <td><?php check($true, $one_str)?></td>
                <td><?php check($true, $null);?></td>  
                <td><?php check($true, $php)?></td>        
            </tr>
            <tr>
                <td class="col"><?php echo "false"?></td>
                <td><?php check($false, $true)?></td>
                <td><?php check($false, $false)?></td>
                <td><?php check($false, $one)?></td>
                <td><?php check($false, $noll)?></td>
                <td><?php check($false, $minus_one)?></td>
                <td><?php check($false, $one_str)?></td>
                <td><?php check($false, $null);?></td>  
                <td><?php check($false, $php)?></td> 
            </tr>
            <tr>
                <td class="col"><?php echo "1"?></td>
                <td><?php check($one, $true)?></td>
                <td><?php check($one, $false)?></td>
                <td><?php check($one, $one)?></td>
                <td><?php check($one, $noll)?></td>
                <td><?php check($one, $minus_one)?></td>
                <td><?php check($one, $one_str)?></td>
                <td><?php check($one, $null);?></td>  
                <td><?php check($one, $php)?></td> 
            </tr>
            <tr>
                <td class="col"><?php echo "0"?></td>
                <td><?php check($noll, $true)?></td>
                <td><?php check($noll, $false)?></td>
                <td><?php check($noll, $one)?></td>
                <td><?php check($noll, $noll)?></td>
                <td><?php check($noll, $minus_one)?></td>
                <td><?php check($noll, $one_str)?></td>
                <td><?php check($noll, $null);?></td>  
                <td><?php check($noll, $php)?></td> 
            </tr>
            <tr>
                <td class="col"><?php echo "-1"?></td>
                <td><?php check($minus_one, $true)?></td>
                <td><?php check($minus_one, $false)?></td>
                <td><?php check($minus_one, $one)?></td>
                <td><?php check($minus_one, $noll)?></td>
                <td><?php check($minus_one, $minus_one)?></td>
                <td><?php check($minus_one, $one_str)?></td>
                <td><?php check($minus_one, $null);?></td>  
                <td><?php check($minus_one, $php)?></td> 
            </tr>
            <tr>
                <td class="col"><?php echo '"1"'?></td>
                <td><?php check($one_str, $true)?></td>
                <td><?php check($one_str, $false)?></td>
                <td><?php check($one_str, $one)?></td>
                <td><?php check($one_str, $noll)?></td>
                <td><?php check($one_str, $minus_one)?></td>
                <td><?php check($one_str, $one_str)?></td>
                <td><?php check($one_str, $null);?></td>  
                <td><?php check($one_str, $php)?></td> 
            </tr>
            <tr>
                <td class="col"><?php echo "null"?></td>
                <td><?php check($null, $true)?></td>
                <td><?php check($null, $false)?></td>
                <td><?php check($null, $one)?></td>
                <td><?php check($null, $noll)?></td>
                <td><?php check($null, $minus_one)?></td>
                <td><?php check($null, $one_str)?></td>
                <td><?php check($null, $null);?></td>  
                <td><?php check($null, $php)?></td>
            </tr>
            <tr>
                <td class="col"><?php echo '"php"'?></td>
                <td><?php check($php, $true)?></td>
                <td><?php check($php, $false)?></td>
                <td><?php check($php, $one)?></td>
                <td><?php check($php, $noll)?></td>
                <td><?php check($php, $minus_one)?></td>
                <td><?php check($php, $one_str)?></td>
                <td><?php check($php, $null);?></td>  
                <td><?php check($php, $php)?></td>
            </tr>
        </tbody>   
    </table>
    <?php 
    function check_type($x,$y){
        if ($x === $y){
            echo "true";
        }
        else{
            echo "false";
        }
     }
    ?>
    <table>
        <caption><h2>Жёсткое сравнение в PHP</h2></caption>
        <thead>
            <tr>
                <th></th>
                <th><?php echo "true"?></th>
                <th><?php echo "false"?></th>
                <th><?php echo "1"?></th>
                <th><?php echo "0"?></th>
                <th><?php echo "-1"?></th>
                <th><?php echo '"1"'?></th>
                <th><?php echo "null"?></th>
                <th><?php echo '"php"'?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="col"><?php echo "true"?></td>
                <td><?php check_type($true, $true)?></td>
                <td><?php check_type($true, $false)?></td>
                <td><?php check_type($true, $one)?></td>
                <td><?php check_type($true, $noll)?></td>
                <td><?php check_type($true, $minus_one)?></td>
                <td><?php check_type($true, $one_str)?></td>
                <td><?php check_type($true, $null);?></td>  
                <td><?php check_type($true, $php)?></td>        
            </tr>
            <tr>
                <td class="col"><?php echo "false"?></td>
                <td><?php check_type($false, $true)?></td>
                <td><?php check_type($false, $false)?></td>
                <td><?php check_type($false, $one)?></td>
                <td><?php check_type($false, $noll)?></td>
                <td><?php check_type($false, $minus_one)?></td>
                <td><?php check_type($false, $one_str)?></td>
                <td><?php check_type($false, $null);?></td>  
                <td><?php check_type($false, $php)?></td> 
            </tr>
            <tr>
                <td class="col"><?php echo "1"?></td>
                <td><?php check_type($one, $true)?></td>
                <td><?php check_type($one, $false)?></td>
                <td><?php check_type($one, $one)?></td>
                <td><?php check_type($one, $noll)?></td>
                <td><?php check_type($one, $minus_one)?></td>
                <td><?php check_type($one, $one_str)?></td>
                <td><?php check_type($one, $null);?></td>  
                <td><?php check_type($one, $php)?></td> 
            </tr>
            <tr>
                <td class="col"><?php echo "0"?></td>
                <td><?php check_type($noll, $true)?></td>
                <td><?php check_type($noll, $false)?></td>
                <td><?php check_type($noll, $one)?></td>
                <td><?php check_type($noll, $noll)?></td>
                <td><?php check_type($noll, $minus_one)?></td>
                <td><?php check_type($noll, $one_str)?></td>
                <td><?php check_type($noll, $null);?></td>  
                <td><?php check_type($noll, $php)?></td> 
            </tr>
            <tr>
                <td class="col"><?php echo "-1"?></td>
                <td><?php check_type($minus_one, $true)?></td>
                <td><?php check_type($minus_one, $false)?></td>
                <td><?php check_type($minus_one, $one)?></td>
                <td><?php check_type($minus_one, $noll)?></td>
                <td><?php check_type($minus_one, $minus_one)?></td>
                <td><?php check_type($minus_one, $one_str)?></td>
                <td><?php check_type($minus_one, $null);?></td>  
                <td><?php check_type($minus_one, $php)?></td> 
            </tr>
            <tr>
                <td class="col"><?php echo '"1"'?></td>
                <td><?php check_type($one_str, $true)?></td>
                <td><?php check_type($one_str, $false)?></td>
                <td><?php check_type($one_str, $one)?></td>
                <td><?php check_type($one_str, $noll)?></td>
                <td><?php check_type($one_str, $minus_one)?></td>
                <td><?php check_type($one_str, $one_str)?></td>
                <td><?php check_type($one_str, $null);?></td>  
                <td><?php check_type($one_str, $php)?></td> 
            </tr>
            <tr>
                <td class="col"><?php echo "null"?></td>
                <td><?php check_type($null, $true)?></td>
                <td><?php check_type($null, $false)?></td>
                <td><?php check_type($null, $one)?></td>
                <td><?php check_type($null, $noll)?></td>
                <td><?php check_type($null, $minus_one)?></td>
                <td><?php check_type($null, $one_str)?></td>
                <td><?php check_type($null, $null);?></td>  
                <td><?php check_type($null, $php)?></td>
            </tr>
            <tr>
                <td class="col"><?php echo '"php"'?></td>
                <td><?php check_type($php, $true)?></td>
                <td><?php check_type($php, $false)?></td>
                <td><?php check_type($php, $one)?></td>
                <td><?php check_type($php, $noll)?></td>
                <td><?php check_type($php, $minus_one)?></td>
                <td><?php check_type($php, $one_str)?></td>
                <td><?php check_type($php, $null);?></td>  
                <td><?php check_type($php, $php)?></td>
            </tr>
        </tbody>   
    </table>
</body>
</html>