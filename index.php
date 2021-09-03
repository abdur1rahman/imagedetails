<html>
    <head>
        <title> Image History </title>
        <style>
            body{
                background-color:#a6a6a6;
            }
            form{
                width:500px;
                height:auto;
                background:#f1f1f1;
                border-radius:5px;
                margin:auto;
                margin-top:100px;
                padding:10px;
                box-shadow: 2px 2px 2px #000;
            }
            input[name='upload']{
                width:100px;
                height:30px;
                background-color:lightyellow;
                margin-top:10px;
                border-radius:5px;
                            
            }
            fieldset{
                margin:50px;
            }
            #Detailsimg{
                margin-top:10px;    
                font-family:arial;
                line-height:25px;               
                }
            }
            </style>
</head>
 <body >
     <form action='#' enctype='multipart/form-data' method='POST'>
     <fieldset>
         <legend>Form Control</legend>
         <input  type="file" name='filename'/>
        <input  type='submit'value='Checking' name='upload'/>
        </fieldset>
    </form>
</body>

</html>
<?php    
 

    if(isset($_POST['upload'])){
        $filname= $_FILES['filename'] ['name'];
        $filetmp= $_FILES['filename'] ['tmp_name'];
        $filesize= getimagesize($filetmp);
        $w= $filesize[0];
        $h= $filesize[1];
        $filebitsize=$_FILES['filename'] ['size'];
        $sizeconvertkb=$filebitsize/1024;
    
        echo  " <center id='Detailsimg'> Width= ".$w. "<br> Height= ". $h."<br> Size= ".$sizeconvertkb. " <br> ImageName ". $filname. " <br> ImaeLocation".$filetmp."</center>";
    


    }else{
        print "<center id='Detailsimg'>Please Select image </center>";
    }
 
?>