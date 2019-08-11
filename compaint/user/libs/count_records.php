
<?php

function countrecords($table,$status){
  include("db_connect.php");
  $currentuser="admin";
  if ($currentuser=="admin") {
    # code...
    if ($status=="all") {
      # code...
       $sql="SELECT * FROM $table ORDER BY id";
    if ($result=mysqli_query($con,$sql))
      {
      // Return the number of rows in result set
      $rowcount=mysqli_num_rows($result);
      printf("%d",$rowcount);
      // Free result set
      mysqli_free_result($result);
      }
    }
elseif ($status=="publish") {
  # code...
  $sql="SELECT * FROM $table WHERE posted='$status' ORDER BY id";
    if ($result=mysqli_query($con,$sql))
      {
      // Return the number of rows in result set
      $rowcounter=mysqli_num_rows($result);
      printf("%d",$rowcounter);
      // Free result set
      mysqli_free_result($result);
      }
}
elseif ($status=="draft") {
  # code...
  $sql="SELECT * FROM $table WHERE posted='$status' ORDER BY id";
    if ($result=mysqli_query($con,$sql))
      {
      // Return the number of rows in result set
      $rowcounter=mysqli_num_rows($result);
      printf("%d",$rowcounter);
      // Free result set
     mysqli_free_result($result);
      }
}
    mysqli_close($con);
  }
  else {
    # code...
    if ($status=="all") {
      # code...
      $sql="SELECT * FROM membership_userrecords WHERE tableName='$table' AND memberID='$currentuser' ORDER BY recID";
    if ($result=mysqli_query($con,$sql))
      {
      // Return the number of rows in result set
      $rowcount=mysqli_num_rows($result);
      printf("%d",$rowcount);
      // Free result set
      mysqli_free_result($result);
      }

    mysqli_close($con);
    }
    elseif ($status=="publish") {
      # code...
      $sql="SELECT * FROM blogs WHERE author='$currentuser' AND posted='$status'";
      if ($result=mysqli_query($con,$sql))
      {
      // Return the number of rows in result set
      $rowcount=mysqli_num_rows($result);
      printf("%d",$rowcount);
      // Free result set
      mysqli_free_result($result);
      }
    }
    elseif ($status=="draft") {
      # code...
      $sql="SELECT * FROM blogs WHERE author='$currentuser' AND posted='$status'";
      if ($result=mysqli_query($con,$sql))
      {
      // Return the number of rows in result set
      $rowcount=mysqli_num_rows($result);
      printf("%d",$rowcount);
      // Free result set
      mysqli_free_result($result);
      }
    }
    
  }

}



function admincounter($tablename)
{
  include("db_connect.php");
  # code...
  $sql="SELECT * FROM $tablename";
  if ($result=mysqli_query($con,$sql))
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    printf("%d",$rowcount);
    // Free result set
    mysqli_free_result($result);
    }

  mysqli_close($con);
}


?>


	
