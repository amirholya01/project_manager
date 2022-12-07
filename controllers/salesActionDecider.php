<?php

    //This is pretty hacky but it works!

    /* 
        This deciphers our double submit button form
        and passes you on depending on what submit button
        you pressed. It is pretty important that you
        keep your $_POST data after we redirect, and
        the only way to do that is to submit a new form...

        SOOO we made the system do it automatically for you!
    */

    /* redirect to edit */
    if ($_POST['action'] == 'edit') {
?>
        <form id="submit" action="adminEditSale" method="POST">
            <input type="hidden" name="sale" value="<?php echo $_POST['sale'] ?>">
        </form>
        <script type="text/javascript">
            //Auto submits the form
            document.querySelector('#submit').submit();
        </script>
<?php
    /* redirect to delete */
    } elseif ($_POST['action'] == 'delete') {
?>
        <form id="submit" action="adminSale" method="POST">
            <input type="hidden" name="deleteSale" value="true">
            <input type="hidden" name="sale_id" value="<?php echo $_POST['sale'] ?>">
        </form>
        <script type="text/javascript">
            //Auto submits the form
            document.querySelector('#submit').submit();
        </script>
<?php 
    }
?>

