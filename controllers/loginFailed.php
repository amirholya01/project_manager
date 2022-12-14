<?php   
    if(count($_SESSION['breadcrumbsLinks']) > 0){
        $linkToPrevPage = end($_SESSION['breadcrumbsLinks']);
    }else{
        $linkToPrevPage = '/';
    }
?>
    <form id="submit" action="<?php echo $linkToPrevPage ?>" method="POST">
        <input type="hidden" name="loginFailed" value="true">
    </form>
    <script type="text/javascript">
        //Auto submits the form
        document.querySelector('#submit').submit();
    </script>
<?php

?>