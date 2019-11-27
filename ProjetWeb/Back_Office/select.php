<?php

if (isset($_POST["user_id"])) {
    $output = '';
    $connect = mysqli_connect("localhost", "root", "", "prodigy");
    $query = "SELECT * FROM table_users WHERE user_idd = '" . $_POST["user_id"] . "'";
    $result = mysqli_query($connect, $query);
    $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '  
                <tr>  
                     <td width="30%"><label>Id</label></td>  
                     <td width="70%">' . $row["user_idd"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">' . $row["user_name"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Adresse_email</label></td>  
                     <td width="70%">' . $row["user_email"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Date</label></td>  
                     <td width="70%">' . $row["joining_date"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Role</label></td>  
                     <td width="70%">' . $row["role"] . '</td>  
                </tr>  
                ';
    }
    $output .= "</table></div>";
    echo $output;
} else {
    echo "dommage ! ";
}
