<?php
include('database_connection.php');
include('function.php');
$clientid = $_SESSION['clientid'];
$clientname = $_SESSION['clientname'];
$clientname1 = strtoupper($clientname);
$clientstatus = $_SESSION['clientstatus'];
$clientplan = $_SESSION['clientplan'];
$clienttype = $_SESSION['clienttype'];
$clientsize = $_SESSION['clientsize'];

if ( empty ( $_SESSION['clientid'])) {
echo "<script>
alert('Your session has expired, try to login again.');
window.location.href='../logout.php';
</script>";
}
else {

} 

?>
<link rel="icon" type="image/png" href="images/favicon.png">
<?php
//user.php


//if($_SESSION["type"] != 'master')
//{
//	header("location:index.php");
//}

include('iheader.php');


?>
	<style type="text/css">
<!--
.style1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style2 {
	font-family: "Courier New", Courier, monospace;
	font-size: 14px;
	font-weight: bold;
}
--> 
    </style>
	<br />
	<div class="row">
	<?php
	if($_SESSION['type'] == 'master')
	{
	?>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><strong>Total Staff</strong></div>
			<div class="panel-body" align="center">
				<h1><?php echo count_total_staff($connect); ?></h1>
			</div>
		</div>
	</div>
    <div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><strong>Total Active User</strong></div>
			<div class="panel-body" align="center">
				<h1><?php echo count_total_user($connect); ?></h1>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><strong>Total Category</strong></div>
			<div class="panel-body" align="center">
				<h1><?php echo count_total_category($connect); ?></h1>
			</div>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><strong>Total Item in Stock</strong></div>
			<div class="panel-body" align="center">
				<h1><?php echo count_total_product($connect); ?></h1>
			</div>
		</div>
	</div>
    <div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><strong>Item out of Stock</strong></div>
			<div class="panel-body" align="center">
				<h1><?php echo count_total_stockout($connect); ?> <span class="style2">--&gt; </span><a href="stockout.php" target="_blank" class="style1"> View Product</a></h1>
		  </div>
	  </div>
	</div>
    <div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><strong>Item low in Stock</strong></div>
			<div class="panel-body" align="center">
				<h1><?php echo count_total_stocklow($connect); ?> <span class="style2">--&gt;</span> <a href="stocklow.php" target="_blank" class="style1">View Product</a></h1>
		  </div>
		</div>
	</div>
     <div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><strong></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
			<div class="panel-body" align="center">
				<h1>0</h1>
			</div>
		</div>
	</div>
    <div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><strong></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
			<div class="panel-body" align="center">
				<h1>0</h1>
			</div>
		</div>
	</div>
	<?php
	}
	?>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Total Order Value</strong></div>
				<div class="panel-body" align="center">
					<h1>=N=<?php echo count_total_order_value($connect); ?></h1>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Total Cash Order Value</strong></div>
		  <div class="panel-body" align="center">
					<h1>=N=<?php echo count_total_cash_order_value($connect); ?></h1>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Total Credit Order Value</strong></div>
				<div class="panel-body" align="center">
					<h1>=N=<?php echo count_total_credit_order_value($connect); ?></h1>
				</div>
			</div>
		</div>
		<hr />
		<?php
		if($_SESSION['type'] == 'master')
		{
		?>
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Total Order Value User wise</strong></div>
				<div class="panel-body" align="center">
					<?php echo get_user_wise_total_order($connect); ?>
				</div>
			</div>
		</div>
		<?php
		}
		?>
	</div>

<?php
include("footer.php");
?>