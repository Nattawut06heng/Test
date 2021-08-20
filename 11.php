<center>
        <h3>รับตัวเลขจำนวน 10 จำนวน แล้วเรียงลำดับจากน้อยไปมาก</h3>
        <?php
                print "<form method=post action=>";
                echo "input: ";
                for($i=0; $i<10; $i++){
                        print "<input type=text name=input$i size=5 />";
                        print "&nbsp";
                }
                        print "<input type=submit value=ยืนยัน />";
                print "</form>";

                $arr = array();
                rsort($arr);
                
                if(isset($_POST['input0'])){
                        echo "Input: ";

                        for($i=0; $i<10; $i++){
                                $arr[$i] = $_POST['input'.$i];
                        }

                        foreach ($arr as $value) {
                                $x=0;
                                $arrlength = count($arr);
                                echo "$value, ";  
                                
                              }
                              echo "<br>";
                        sort($arr);  
                        echo "Ascending order: ";  
                }
                
                foreach ($arr as $value) {
                        echo "$value, ";
                }                        
        ?>
</center>