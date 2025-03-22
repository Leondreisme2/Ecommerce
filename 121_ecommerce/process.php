<?php
    include "conn.php";

    //This code is to upload picture
    if(isset($_POST['add_item'])){
        $fileName = $_FILES['pic']['name'];
        $fileTmpName = $_FILES['pic']['tmp_name'];

        $itemName = $_POST['in'];
        $insert = mysqli_query($conn, "INSERT INTO items VAlUES('0','$fileName','$itemName')");

        if($insert == true){
            $fileDestination = 'items_pic/'.$fileName;
            move_uploaded_file($fileTmpName,$fileDestination);

            ?>
            <script>
                alert ("item added Successfully!");
                window.location.href="view_item.php";
            </script>
            <?php


        }else{
            ?>
            <script>
                alert ("Error in Adding!");
                window.location.href="view_item.php";
            </script>
            <?php
            
    }
}

?>