<center>
    <h3>โปรแกรมวาดรูปสามเหลี่ยมโดยใช้ * ในการวาด โดยความสูงของสามเหลี่ยนมแบบลูกข่างจะอิงจากค่า input ที่รับเข้าไป</h3>
    <form method="POST" action="">
            Input: <input name="input">
            <input type="submit" name="submit" value="ยืนยัน">
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $input = $_POST['input'];
            for($i=1; $i<=$input; $i++){  
                for($j=$input;$j>=$i; $j--){
                    echo "*";
                }
                for($j=$input;$j>$i; $j--){
                    echo "*";
                }
    
                echo "<br>";
            }    
        }
    ?>
</center>