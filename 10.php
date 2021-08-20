<center>
    <h3>โปรแกรมวาดรูปสามเหลี่ยมโดยใช้ * ในการวาด โดยความสูงของสามเหลี่ยนมจะอิงจากค่า input ที่รับเข้าไป</h3>
    <form method="POST" action="">
            Input: <input name="input">
            <input type="submit" name="submit" value="ยืนยัน">
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $input = $_POST['input'];
            for($i=1; $i<=$input; $i++){
                for($x=1; $x<$i; $x++){
                    echo "*";
                }
                for($z=1; $z <= $i; $z++){
                    echo "*";
                }
                echo "<br>";
            }   
        }
    ?>
</center>