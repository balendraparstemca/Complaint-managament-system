<?php
$con = mysqli_connect("localhost", "root", "", "mproject");

if(isset($_POST['vie'])){

// $con = mysqli_connect("localhost", "root", "", "notif");

if($_POST["vie"] != '')
{$idd=$_POST["vie"];
    $update_query = "UPDATE tblcomplaints SET nstatus = 1 WHERE complaintNumber=$idd";
    mysqli_query($con, $update_query);
}
$query = "SELECT * FROM tblcomplaints WHERE nstatus=0 ORDER BY complaintNumber DESC";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>';
 while($row = mysqli_fetch_array($result))
 {
   $output .= '
                     
                             <li>
                                <a id="nnn" nid="'.$row["complaintNumber"].'">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">'.$row["userId"].'</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                     your complaint no. '.$row["complaintNumber"].' updated
                                    </span>
                                </a>
                            </li>
                            
   ';

 }
 $output .= '<li><a href="index.html#">See all messages</a>
                            </li>';
}
else{
     $output .= '
     <li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}



$status_query = "SELECT * FROM tblcomplaints WHERE nstatus=0";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notificatio' => $output,
    'unseen_notificatio'  => $count
);

echo json_encode($data);

}



if(isset($_POST['view'])){

// $con = mysqli_connect("localhost", "root", "", "notif");

if($_POST["view"] != '')
{$idd=$_POST["view"];
    $update_query = "UPDATE blogs SET nstatus = 1 WHERE id=$idd";
    mysqli_query($con, $update_query);
}
$query = "SELECT * FROM blogs WHERE nstatus=0 ORDER BY id DESC";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>';
 while($row = mysqli_fetch_array($result))
 {
   $output .= '
                     
                             <li>
                                <a id="nn" nid="'.$row["id"].'">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">'.$row["author"].'</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                     your Blog id. '.$row["id"].' updated
                                    </span>
                                </a>
                            </li>
                            
   ';

 }
 $output .= '<li><a href="index.html#">See all messages</a>
                            </li>';
}
else{
     $output .= '
     <li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}



$status_query = "SELECT * FROM blogs WHERE nstatus=0";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);

echo json_encode($data);

}

?>