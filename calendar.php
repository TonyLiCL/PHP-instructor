<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            border:3px double blue;
        }
        td{
            padding:5px 10px;
            border:1px solid lightgreen;

        }

.block-table{
    width:380px;
    display:flex;
    flex-wrap:wrap;
}
.item{
    margin-left:-1px;
    margin-top:-1px;
    display:inline-block;
    width:50px;
    height:50px;
    border:1px solid lightgreen;
    position:relative;
    transition: all 0.3s;
    background:white;
}
.item-header{
    margin-left:-1px;
    margin-top:-1px;
    display:inline-block;
    width:50px;
    height:25px;
    border:1px solid lightgreen;
    text-align: center;
    background-color: darkgreen; 
    color:lightgreen
}
.item:hover{
    background:yellow;
    transform: scale(1.3);
    font-weight:bold;
    color:blue;
    transition: all 0.3s;
    z-index:10;

}

.holiday{
    background:pink;
}
     
    </style>
</head>
<body>
 <h2>萬年曆</h2>
<form action="?" method="get">
    <label for="month"></label>
    <input type="number" name='month' value="<?=date("m");?>">
    <input type="submit" value="送出">
</form>
<?php 
if(isset($_GET['month'])){

    $month=$_GET['month'];
}else{
    $month=date('m');
}
$year=date("Y");
echo "年".$year;
echo "<BR>";
echo "月份:".$month;
echo "<br>";
$firstDay=strtotime(date("Y-$month-1"));
$firstWeekStartDay=date("w",$firstDay);
echo "第一周的開始是第".$firstWeekStartDay."日";
$days=date("t",$firstDay);
$lastDay=strtotime(date("Y-$month-$days"));
echo "<br>";
echo "最後一天是".date("Y-m-d",$lastDay);

$birthday='1974-4-1';
?>

<?php 

$days=[];
for($i=0;$i<42;$i++){
    $diff=$i-$firstWeekStartDay;
    $days[]=date("Y-m-d",strtotime("$diff days",$firstDay));
}
?>
<div style="width:384px;">
    <a href="calendar.php?month=<?=($month-1);?>" style="float:left">上一個月</a>
    <a href="calendar.php?month=<?=($month+1);?>" style="float:right">下一個月</a>
</div>

<div style='clear:both'></div>

<?php

echo "<div class='block-table'>";
echo "<div class='item-header'>日</div>";
echo "<div class='item-header'>一</div>";
echo "<div class='item-header'>二</div>";
echo "<div class='item-header'>三</div>";
echo "<div class='item-header'>四</div>";
echo "<div class='item-header'>五</div>";
echo "<div class='item-header'>六</div>";
foreach($days as $day){
    $format=explode("-",$day)[2];
    $w=date("w",strtotime($day));
    if($w==0 || $w==6){

        echo "<div class='item holiday'>$format</div>";
    }else{

        echo "<div class='item'>";
        echo "<div class='date'>$format</div>";
        echo "</div>";
    }
}
echo "</div>";

?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
