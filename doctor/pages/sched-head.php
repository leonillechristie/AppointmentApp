<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
<link rel="stylesheet" href="css/reset.css"> 
<link rel="stylesheet" href="css/style.css"> 
	
<title>Finding Doctors | Schedule</title>

<?php 
    if(isset($_SESSION['level']))
    {
        if($_SESSION['level'] == 0 || $_SESSION['level'] == 2)
        {
            header('Location:../../ver2/index.php');
        }
        
    }


?>