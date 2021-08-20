<center>  
    <h3>คำนวณเพื่อหาจำนวนธนบัตร และจำนวนเหรียญที่ใช้ในการทอนเงินให้ลูกค้า</h3>
   <form method="POST" action="">
            Input: <input name="productprice">
            <input type="submit" name="submit" value="ยืนยัน">
    </form>

<?php 
    if(isset($_POST['submit']))
    {
        $productprice = $_POST['productprice'];
        $money = 1000;
        $change = $money - $productprice;

        echo "ผลลัพธ์ <br>";
        echo "จำนวนเงินทอน: $change บาท";
        echo "<br>";
        if($change >= 1000){
            echo "แบงค์ 1000";
            echo "<br>";
        }
        if($change >= 500){
            $x = floor($change / 500);
            echo "แบงค์ 500: จำนวน $x ใบ";
            $change = $change % 500;
            echo "<br>";
        }
        if($change >= 100){
            $x = floor($change / 100);
            echo "แบงค์ 100: จำนวน $x ใบ";
            $change = $change % 100;
            echo "<br>";
        }
        if($change >= 50){
            $x = floor($change / 50);
            echo "แบงค์ 50: จำนวน $x ใบ";
            $change = $change % 50;
            echo "<br>";
        }
        if($change >= 10){
            $x = floor($change / 10);
            echo "เหรียญ 10: จำนวน $x เหรียญ";
            $change = $change % 10;
            echo "<br>";
        }
        if($change >= 5){
            $x = floor($change / 5);
            echo "เหรียญ 5: จำนวน $x เหรียญ";
            $change = $change % 5;
            echo "<br>";
        }
        if($change >= 1){
            $x = floor($change / 1);
            echo "เหรียญ 1: จำนวน $x เหรียญ";
            $change = $change % 1;
            echo "<br>";
        }       
    }
?>
</center> 