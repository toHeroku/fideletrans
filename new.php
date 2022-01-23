<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Storing words</title>
</head>
<style>
a{
    text-decoration: none;
    color: black;
    font-size: 20px;
    font-style:italic ;
    background: whitesmoke;
    border-radius: 15px;
    width:40px;
    padding: 10px;
    }
    input{
        border-radius: 10px;
        font-size: 20px;
    }
    button{
        border-radius: 20px;
        
        font-style: italic;
    }
    

</style>

<body bgcolor="whitesmoking">
    <center>
    <table width="10%" cellspacing="20" border="0">
<tr>
    <td><a href="index.php">Home</a></td>
      
  </tr>
  </table>
        <u><i><h1 style="color:blue">inter the new words </h1></i></u>
       
        <form  method="post">
              
              
  <big>  <table bgcolor="grayblue" width="60" cellspacing="15" border="0">
               <tr> <td><label for="variable" style="font-style: 20px;">word</label></td>
                <td><input type="text" name="variable" id="var" required="insert the word"></td></tr>
           
  
             <tr>
               <td> <label for="kinyarwanda">Kinyarwanda</label></td>
                <td><input type="text" name="kinyarwanda" id="kinya" required="insert the word"></td>
            </tr>
  
  <tr>
               <td> <label for="french">French</label></td>
               <td> <input type="text" name="french" id="fre" required="insert the word"></td>
            </tr>
  
  <tr>              
                 <td><label for="english">English</label></td>
               <td> <input type="text" name="english" id="eng" required="insert the word"></td>
                  </tr>
               <tr>
                 <td><label for="swahili">Swahili</label></td>
             <td>   <input type="text" name="swahili" id="swah" required="insert the word"></td>
            </tr>
   
           <tr>              
        <td></td><td><input type="submit" name="submit" value="save"  width=100px height=40px style="background: light;"> </td>
        <td>       <?php
require "conn.php"; // Using database connection file here

if(isset($_POST['submit']))
{       
    $word = $_POST['variable'];
    $kinyarwanda= $_POST['kinyarwanda'];
        $french = $_POST['french'];
        $english= $_POST['english'];
        $swahili = $_POST['swahili'];
        

    $insert = mysqli_query($db,"INSERT INTO `indimi`(`variable`, `kinyarwanda`, `english`, `french`,`swahili`) 
    VALUES ('$word','$kinyarwanda','$english','$french','$swahili')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "byemejwe.";
    }
}

mysqli_close($db); // Close connection
?>
  </td></tr>
            </table></big>
        </form>
    </center>
</body>
  
</html>