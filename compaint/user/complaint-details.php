<?php session_start();
error_reporting(0);
include('includes/config2.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{ ?>

<!DOCTYPE html>
<html lang="en">

 <?php require_once("includes/csslinks.php")?>
	<style>
	.track_tbl td.track_dot {
    width: 50px;
    position: relative;
    padding: 0;
    text-align: center;
}
.track_tbl td.track_dot:after {
    content: "\f111";
    font-family: FontAwesome;
    position: absolute;
    margin-left: -5px;
    top: 11px;
}
.track_tbl td.track_dot span.track_line {
    background: #000;
    width: 3px;
    min-height: 50px;
    position: absolute;
    height: 101%;
}
.track_tbl tbody tr:first-child td.track_dot span.track_line {
    top: 30px;
    min-height: 25px;
}
.track_tbl tbody tr:last-child td.track_dot span.track_line {
    top: 0;
    min-height: 25px;
    height: 10%;
}

</style>
<script>var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+800+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}</script>
  <body>

  <section id="container" >
<?php include('includes/header.php');?>
<?php include('includes/sidebar.php');?>
      <section id="main-content">
          <section class="wrapper site-min-height">
		   <section class="content-header">
      <h1>
      Complaint Details
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Complaint Details</li>
      </ol>
    </section>
          	<div class="showback">
		<a href='register-complaint.php' type="button" class="btn btn-theme04"><i class="fa fa-plus"></i> Add New</a>
						<a href='register-complaint.php' style='float:right' type="button" class="btn btn-theme04"><i class="fa fa-arrow-left"> </i></a>
						<button type="button" class="btn btn-theme02"><i class="fa fa-download"></i> Save CSV</button>
						<button type="button"  onclick="printpage('main-content')" class="btn btn-theme04"><i class="fa fa-print"></i> Print Preview</button>
      				</div>
          	            <hr />

 <?php $query=mysqli_query($con,"select tblcomplaints.*,category.categoryName as catname from tblcomplaints join category on category.id=tblcomplaints.category where userId='".$_SESSION['id']."' and complaintNumber='".$_REQUEST['cid']."'");
while($row=mysqli_fetch_array($query))
{?>
          	<div class="row mt">
            <label class="col-sm-2 col-sm-2 control-label"><b>Complaint Number : </b></label>
          		<div class="col-sm-4">
          		<p><?php echo htmlentities($row['complaintNumber']);?></p>
          		</div>
<label class="col-sm-2 col-sm-2 control-label"><b>Reg. Date :</b></label>
              <div class="col-sm-4">
              <p><?php echo htmlentities($row['regDate']);?></p>
              </div>
          	</div>


<div class="row mt">
            <label class="col-sm-2 col-sm-2 control-label"><b>Category :</b></label>
              <div class="col-sm-4">
              <p><?php echo htmlentities($row['catname']);?></p>
              </div>
<label class="col-sm-2 col-sm-2 control-label"><b>Sub Category :</b> </label>
              <div class="col-sm-4">
              <p><?php echo htmlentities($row['subcategory']);?></p>
              </div>
            </div>



  <div class="row mt">
            <label class="col-sm-2 col-sm-2 control-label"><b>Complaint Type :</b></label>
              <div class="col-sm-4">
              <p><?php echo htmlentities($row['complaintType']);?></p>
              </div>
<label class="col-sm-2 col-sm-2 control-label"><b>State :</b></label>
              <div class="col-sm-4">
              <p><?php echo htmlentities($row['state']);?></p>
              </div>
            </div>  



  <div class="row mt">
            <label class="col-sm-2 col-sm-2 control-label"><b>Nature of Complaint :</b></label>
              <div class="col-sm-4">
              <p><?php echo htmlentities($row['noc']);?></p>
              </div>
<label class="col-sm-2 col-sm-2 control-label"><b>File :</b></label>
              <div class="col-sm-4">
              <p><?php $cfile=$row['complaintFile'];
if($cfile=="" || $cfile=="NULL")
{
  echo htmlentities("File NA");
}
else{ ?>
<a href="complaintdocs/<?php echo htmlentities($row['complaintFile']);?>"> View File</a>
<?php } ?>

              </p>
              </div>
            </div> 
 <div class="row mt">
            <label class="col-sm-2 col-sm-2 control-label"><b>Complaint Details </label>
              <div class="col-sm-10">
              <p><?php echo htmlentities($row['complaintDetails']);?></p>
              </div>

            </div> 





 <div class="row mt">
            
<label class="col-sm-2 col-sm-2 control-label"><b>Final Status :</b></label>
              <div class="col-sm-4">
              <p style="color:red"><?php 

if($row['status']=="NULL" || $row['status']=="" )
{
echo "Not Process yet";
} else{
              echo htmlentities($row['status']);
}
              ?></p>
              </div>
            </div> 
			 <div class="row mt">
            
<label class="col-sm-2 col-sm-2 control-label"><b>Final Status :</b></label>
            
			  <div class="col-sm-3">
             <a href="javascript:void(0);" onClick="popUpWindow('letter.php?uid=<?php echo htmlentities($row['userId']);?>');" title="Update order">
											 <button type="button" class="btn btn-primary">Complaint Letter Preview</button></a>
              </div>
            </div>
			<hr>
			<div class="row mtbox" style='margin:20px;'>
			
    <div class="p-4">
    <h3>Complaint Tracking</h3>
    <table class="table table-bordered track_tbl">
        <thead>
            <tr>
                <th></th>
                <th>Complaint No</th>
                <th>Status</th>
              
                <th>Date/Time</th>
				<th>Remark</th>
            </tr>
        </thead>
        <tbody>
		
		
		<?php $ret=mysqli_query($con,"select complaintremark.complaintNumber as cid,complaintremark.remark as remark,complaintremark.status as sstatus,complaintremark.remarkDate as rdate from complaintremark join tblcomplaints on tblcomplaints.complaintNumber=complaintremark.complaintNumber where complaintremark.complaintNumber='".$_GET['cid']."'");
while($rw=mysqli_fetch_array($ret))
{
?>
            <tr class="active">
                <td class="track_dot">
                    <span class="track_line"></span>
                </td>
                <td><?php echo  htmlentities($rw['cid']); ?></td>
                <td><?php echo  htmlentities($rw['sstatus']); ?></td>
             
                <td><?php echo  htmlentities($rw['rdate']); ?></td>
				<td><?php echo  htmlentities($rw['remark']); ?></td>
            </tr>
			<?php } ?>
           
        </tbody>
    </table>
    </div>
			</div>
            




<?php } ?>
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
<?php include('includes/footer.php');?>
  </section>

  <?php require_once("includes/links.php")?>

    <!--script for this page-->
   
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>
