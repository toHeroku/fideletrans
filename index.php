
<!DOCTYPE html>
<html>
<head>

	<title>Translation</title>
	<style >
		
		th{ background-color: grey;
			font-family:verdana;
			color:pink;
	
		}	

}
p{
	color: black;
	font-family: verdana;
	 font-size: 25px;
}
a{
    text-decoration: none;
    color: black;
    font-size: 25px;
     text-decoration: none;
    color: black;
    font-size: 20px;
    font-style:italic ;
    background: whitesmoke;
    border-radius: 15px;
    width:40px;
    padding: 10px;
    }

   
    button{
    	border-radius: 20px;
    	padding: 3px;
    	font-style: italic;
    }
    p{
    	font-size: 20px;
    	font-style: italic;
    	padding: 12px;
    	font-size: 35px;
    }
	</style>
	<link rel="shortcut icon"  href="icon.jfif">
</head>
<body bgcolor="blueviolet">
	<center>
<table width="20px" cellspacing="20" border="0" bgcolor="">
<tr>
    <td><a href="index.php">Home</a></td>
      <td><a href="new.php">Insert </a> </td>
  </tr>
  </table>
	<p ><u>Translation language</u></p>
	 
		<form method="post">
			
       
 
		<table bgcolor="gray" width=80px height=200px cellspacing="5" border="0" >
				
	<tr>			
	<td>hindura :</td>
	<td><!-- <select name="status" id="status" onchange="sayIt()">
				<option name="gura">V_Gura</option>
				<option name="tuma">V_Rangura</option>
				<option name="rangura">V_Gurisha</option>
				<option name="Gurisha">V_Tuma</option>
				
			</select> -->
			 <select name="word" id="val">
    <option value="0">select word</option>
    <?php
        require "conn.php";  // Using database connection file here
        $records = mysqli_query($db, "SELECT * From indimi");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['id'] ."'>" .$data['variable'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
			</td>  
			<td></td>
			<td>
				<select name="select">
			    <option value="0">Select language </option>
				<option value="1">Kinyarwanda</option>
				<option value="2">english</option>
				<option value="3">French</option>
				<option value="4">Swahili</option>
				
			</select></td>
			
                
     </tr>
     <tr  >
     	  <td><button name="translate" style="color: black;background-color: white; font-size:20px">trasnlation </button>
                   </td>
                   <center><td style="color:red; font-size: 30px;"bgcolor='white' width="60px">
		 <?php 
		 $result=[];
		 if(isset($_POST['translate']))
		 {	
			$result[0] = " ";
			 $language = $_POST['select'];
			 $word = $_POST['word'];
			 if(($language == 0) || ($word == 0))
			 {
				 $result[0] = "choose valid data";

			 }
			 else {
				 
				$query_select_indimi= mysqli_query($db, "SELECT * FROM indimi where id='$word'");
				if(mysqli_num_rows($query_select_indimi) > 0)
				{
					$result[0] = "one element found";

					$data_result = $query_select_indimi->fetch_array();

			if($language == 1)
			{
				$result[0] = $data_result['kinyarwanda'];
			}
			else if ($language == 2)
			{
				$result[0] = $data_result['english'];
			}	else if ($language == 3)
			{
				$result[0] = $data_result['french'];
			}	else if ($language == 4)
			{
				$result[0] = $data_result['swahili'];
			}
			else{
				$result[0]="couldn't find";
			}
				}
				else{
					$result[0] = "no element found";
				}

			 }

			
	
				
			

		
?> 
  <?php echo $result[0];?><?php
		 }

		 
		 ?></td></center>
   
    
     </tr>


                   
</table>

</center>
</body>
</html>			


