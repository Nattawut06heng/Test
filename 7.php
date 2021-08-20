<center>
    <h3>แสดงผลเป็นเวลา hh:mm:ss โดยรับค่าจำนวนเต็มที่เป็นวินาที(second) โดยไม่ใช้ function สำเร็จที่มีในภาษาโปรแกรมช่วย</h3>
    <form method="POST" action="">
            Input: <input name="inputseconds">
            <input type="submit" name="submit" value="ยืนยัน">
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $inputseconds = $_POST['inputseconds'];
            $hours = floor($inputseconds / 3600);
            $minutes = floor(($inputseconds / 60) % 60);
            $seconds = $inputseconds % 60;

            echo "ผลลัพธ์: ";
            echo sprintf("%02d:%02d:%02d",$hours, $minutes, $seconds);
        }
    ?>
</center>