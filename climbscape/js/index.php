<?php
//$host = "urbazaarinmumbaicom.ipagemysql.com";
/*** mysql hostname ***/
$hostname = "climbscapein.ipagemysql.com";

/*** mysql username ***/
$username = "anil";

/*** mysql password ***/
$password = "eknokajhuta";

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=climbscape", $username, $password);
    /*** echo a message saying we have connected ***/
    $msg = 'Connected to database successfully';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
	
	$sql = 'SELECT * FROM webpage_setting';
 
    $stmt = $pdo->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
	
?>
<!DOCTYPE html>
<html>
    <head>
        <title> :: climbscape :: </title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
		
		
	<style>
body{color:black;}
table{width:50% !important;}
td{padding:30px !important;}
</style>	
    </head>
    <body>
        <div id="container">
		<center>
            <h1>Setup file from iPage.com</h1>
			<br><br>
			<?php
				if(isset($msg))
				{
					echo $msg;
				}
				?>
				<br><br>
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>status</th>
						<th>comment</th>
						<th>Developed by</th>
						<th>IP Address</th>
						<th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $stmt->fetch()): ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['status'] ?></td>
							<td><?php echo $row['comment'] ?></td>
							<td><?php echo $row['developed_by'] ?></td>
							<td><?php echo $row['ip_address'] ?></td>
							<td><?php echo $row['date'] ?></td>
                            
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
			</center>
    </body>
</div>
</html>