<center>
    <h3>โปรแกรมแสดงรูปสามเหลี่ยม โดยเรียงจากเลข 1 – 4</h3>
    <form method="POST" action="">
            Input: <input name="input">
            <input type="submit" name="submit" value="ยืนยัน">
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $input = $_POST['input'];
            $number = 1;    
                for ($i = 1; $i <= $input; $i++) {
                    for ($c = 1; $c <= $i; $c++)
                    {
                        $number = $number % 10;
                        echo " $number";
                        $number++;
                    }
                    echo "<br>";
            }
        }
    ?>
</center>