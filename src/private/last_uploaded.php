// START: QUERY LAST UPLOADED PHOTOS
      $query_lastupload = "SELECT filename FROM photos WHERE date_uploaded IN (SELECT max(date_uploaded) FROM photos)";
      $result_lastupload = $conn->query($query_lastupload);
      if (!$result_lastupload) die("Fatal Error");

      $json = mysqli_fetch_all ($result_lastupload, MYSQLI_ASSOC);

      echo json_encode($json);

      if (in_array('SD_A7T00736_Edit_Web.jpg',$json)) {
        echo 'Yes';
      }
      else echo 'No';
      // $result_cat->fetch_assoc()['filename']
      // END: QUERY LAST UPLOADED PHOTOS
