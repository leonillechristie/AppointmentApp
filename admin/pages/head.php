<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Finding Doctors - Admin Dashboard</title>

<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
<link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
<link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<?php 

    if(isset($_SESSION['level']))
	{
        if($_SESSION['level'] == 1)
        {
            header('Location:../../doctor/pages/index.php');
        } else if($_SESSION['level'] == 0){
            header('Location:../../ver2/index.php');
        }
		
	}

?>