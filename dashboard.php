<?php include("header.php"); ?>
        <?php 
        
        if($_GET['page'] != ''){
          $page = $_GET['page'];
          $pageArray = array('Projects'=>'./projects.php','Team'=>'./defaultPage.php','Diary'=>'./defaultPage.php'
          ,'Timeline'=>'./defaultPage.php','Settings'=>'./defaultPage.php','Search'=>'./defaultPage.php');

          include($pageArray[$page]);
        }        
        
        
        ?>

        <script>
            $('document').ready(function(){
                $('.title').children('h2').html('<?php echo $page; ?>');
              }
            );
        </script>
<?php include("footer.php"); ?>
      
