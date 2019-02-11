<?php

        $conn = mysqli_connect("127.0.0.1:9306", "", "", "");
        if (mysqli_connect_errno())
                die("failed to connect to Sphinx: " . mysqli_connect_error());

        $a = $_POST['test_1'];
        echo "search result  :  ";
        echo  $a;
        echo "</br>";
        echo "</br>";

        $sql = "select * from test1 where match('$a')";
        $result = mysqli_query($conn, $sql);




 if($result){
         while($row = mysqli_fetch_array($result)) {
                        echo $row['id']. "  ";
                        echo $row['error_enum']. "  ";
                        echo $row['code']. "   " ;
                        echo $row['information']."<br>";

                }
       }
        else {
                echo "fail....";
        }

?>
                            