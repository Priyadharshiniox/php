<?php
if(isset($_POST['submit'])){
    $target="image/";
    $pic=$target.$_FILES['pic']['name'];
    echo $pic;
    var_dump(move_uploaded_file($_FILES['pic']['tmp_name'], $target.$_FILES['pic']['name']));
}
    ?>
<html>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name='pic'><br>
            <input type='submit' name="submit">
        </form>
    </body>
</html>