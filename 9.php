<center>
    <h3>โปรแกรมสำหรับการ revert คำในประโยค โดย revert แยกกันของแต่ละคำ </h3>
    <form method="POST" action=>
            Inpur: <input type=text name="input">
            <input type="submit" name="submit" value="ยืนยัน">
    </form>
<?php 
        if(isset($_POST['submit'])){
            $input = $_POST["input"];
            $revert = "";
            $txt = "";
            $length = strlen($input);
            for($i=0;$i< $length; $i++){
                if($input[$i] == " " ){
                    $revert .= $txt . " ";
                    $txt = ""; 
                }
                $txt = $input[$i] . $txt; 
            }
                $revert .= $txt;
                echo "Input: ". $input. "<br>";
                echo "Output: ". $revert;
    }
    
?>
</center>