<?php  
 //index.php  
 include 'action.php';  
 ?>  
 <html>  
      <head>  
           <title>PHP Mysql listagem </title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <style>  
                body  
                {  
                     margin:0;  
                     padding:0;  
                     background-color:#f1f1f1;  
                }  
                .box  
                {  
                     width:900px;  
                     padding:20px;  
                     background-color:#fff;  
                     border:1px solid #ccc;  
                     border-radius:5px;  
                     margin-top:100px;  
                }  
           </style>  
      </head>  
      <body>  
           <div class="container box">  
                <h3 align="center">PHP Mysql listagem</h3><br />  
                <br />  
               <form action="index.php" method="post"> 
                   <input type="submit" name="action" value="Load"/>
               </form>
               
                <div id="user_table" class="table-responsive">  
                    <?php echo $resultado;?>    
                </div>  
           </div>  
      </body>  
 </html>  