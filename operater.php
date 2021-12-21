<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operater</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
<style> 
    body{
        font-family: 'Prompt', sans-serif;
    }
</style>
</head>
<body>
    <h3>1. ตัวดำเนินการ</h3>
    <?php
        $x = 20;
        $y = 3; 
        echo "ผลลัพธ์ของ $x + $y เท่ากับ".($x + $y)."<br>";
        echo "ผลลัพธ์ของ $x - $y เท่ากับ".($x - $y)."<br>";
        echo "ผลลัพธ์ของ $x * $y เท่ากับ".($x * $y)."<br>";
        echo "ผลลัพธ์ของ $x / $y เท่ากับ".($x / $y)."<br>";
        echo "ผลลัพธ์ของ $x % $y เท่ากับ".($x % $y)."<br>";
    ?>

    <h3>2. ตัวดำเนินการเพิ่มค่า ลดค่า </h3>
    <?php
       $x = 10; $a = 10;
       $b =++$a;
       $z=$x++;
       echo "ค่าของ x และ a (ก่อนการประมวลผล) x=10 , a=10 <br>";
       echo "ค่าของ z (จากสูตร z=x++ นำค่า x ไปเก็บใน z จะได้ค่าเดิมของ x) = $z , <br>";
       echo "ค่าของ b(จากสูตรb=++aเพิ่มค่าให้ a ก่อนแล้วนำไปเก็บใน b) = $b, <br>";
       echo "ค่าของ x และ a (หลังการประมวลผล) x= $x , a=$a <br>";
    ?>

    <h1>หาค่าเงินเดือน</h1>
    <?php 
    $salary = 25000;
    echo "เงินเดือน = $salary<br>";
    if($salary < 10000){
        $bonus = ($salary*80)/100;
    }
    else if($salary <= 50000){
        $bonus = ($salary*50)/100;
    }
    else{
        $bonus = ($salary*30)/100;
    }
    echo "--------------------<br>";
    echo "ได้รับโบนัส = $bonus<br>";
    $sum = $bonus + $salary;
    echo "รายรับสุทธิ = $sum<br>"; 
    $tax = ($sum * 7 )/100;
    echo "คิดภาษี 7% จากรายรับสิทธิ = $tax<br>";
    $sum2 = $sum - $tax;
    echo  "รายรับหลังหักภาษี = $sum2<br>";


    ?>
</body>
</html>