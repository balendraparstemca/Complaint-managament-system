
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
    <script src="assets/js/chart-master/Chart.js"></script>
	 <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
 
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>

   

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
	<script src="assets/js/form-component.js"></script>
	
	
	
	 <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
	 <script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.inbox11').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count1').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 

 
 $(document).on('click', '#nn', function(){
  $('.count1').html('');
  var cid = $(this).attr('nid');
  console.log(cid);
  load_unseen_notification(cid);
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000000);
 
});
</script>

	 <script>
$(document).ready(function(){
 
 function load_unseen_notificatio(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{vie:view},
   dataType:"json",
   success:function(data)
   {
    $('.inbox12').html(data.notificatio);
    if(data.unseen_notificatio > 0)
    {
     $('.count2').html(data.unseen_notificatio);
    }
   }
  });
 }
 
 load_unseen_notificatio();
 

 
 $(document).on('click', '#nnn', function(){
  $('.count2').html('');
  var cid = $(this).attr('nid');
  console.log(cid);
  load_unseen_notificatio(cid);
 });
 
 setInterval(function(){ 
  load_unseen_notificatio();; 
 }, 5000000);
 
});
</script>
   
   
	
	
  
   <script type="text/javascript">
function printpage(el)
  {
   var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
  }
</script>
	