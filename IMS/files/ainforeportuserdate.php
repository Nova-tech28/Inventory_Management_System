<?php
session_start();
$clientid = $_SESSION['clientid'];
$user_name = $_SESSION['user_name'];



if ( empty ( $_SESSION['clientid'])) {
echo "<script>
alert('Your session has expired, try to login again.');
window.location.href='../logout.php';
</script>";
}
else {

} 


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IMS :: </title>
<script src="js/jquery-1.10.2.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
		<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/bootstrap.min.js"></script>
<link rel="icon" type="image/png" href="images/favicon.png">
<style type="text/css">
<!--
.style5 {font-size: 12px}
.style6 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
<script type="text/javascript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
<link rel="stylesheet" href="css/datepicker.css">
	<script src="js/bootstrap-datepicker1.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

	<script>
	$(document).ready(function(){
		$('#startdate').datepicker({
			format: "dd-mm-yyyy",
			autoclose: true
		});
	});
	</script>
    <script>
	$(document).ready(function(){
		$('#enddate').datepicker({
			format: "dd-mm-yyyy",
			autoclose: true
		});
	});
	</script>
</head>

<body>
<div class="panel-body">
<div class="row"></div>
<form method="post" id="product_form" action="ainforeportuserdate1.php">
  <table width="100%" border="0">
    <tr>
      <td width="322"><div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-plus"></i>Profit Analysis</h4>
        </div>
         <div class="modal-body"></div>
         <div class="modal-body">
          <div class="form-group">
            <label>Start Date</label><p>
              <input name="startdate" type="text" class="form-control" id="startdate" size="10" required="required" />
            </p>
            <p>&nbsp;</p>
          </div>
          <div class="form-group">
            <label>End Date</label>
            <p>
              <input name="enddate" type="text" class="form-control" id="enddate" size="10" required="required" />
            </p>
            <p>&nbsp;</p>
          </div>
          </div>
         <div class="modal-footer">
          <input type="submit" name="action" id="action" class="btn btn-info" value="Proceed" />
          
          <input name="button" type="submit" id="button"  class="btn btn-info" onclick="MM_goToURL('parent','tprofitaccount.php');return document.MM_returnValue" value="Close" />
        </div>
      </div></td>
      <td width="265">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>

