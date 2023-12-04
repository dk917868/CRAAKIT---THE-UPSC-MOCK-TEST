<?php
session_start();
include "header.php";
include "../connection.php";
if (!isset($_SESSION["admin"])) {
?>
  <script type="text/javascript">
    window.location = "index.php";
  </script>
<?php
}

if (isset($_POST["submit"])) {
  // Get the file details
  $fileName = $_FILES["file"]["name"];
  $fileTmpName = $_FILES["file"]["tmp_name"];

  // Check if the file is a CSV
  $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
  if (strtolower($fileExt) != "csv") {
    die("Only CSV files are allowed in subjects.");
  }

  // Open the file
  $file = fopen($fileTmpName, "r");

  // Loop through the file and insert the data into the database
  while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
    // Escape the data to prevent SQL injection attacks
    $id = mysqli_real_escape_string($link, $data[0]);
    $question_no = mysqli_real_escape_string($link, $data[1]);
    $question = mysqli_real_escape_string($link, $data[2]);
    $opt1 = mysqli_real_escape_string($link, $data[3]);
    $opt2 = mysqli_real_escape_string($link, $data[4]);
    $opt3 = mysqli_real_escape_string($link, $data[5]);
    $opt4 = mysqli_real_escape_string($link, $data[6]);
    $answer = mysqli_real_escape_string($link, $data[7]);
    $category = mysqli_real_escape_string($link, $data[8]);
    $DateWePosting = mysqli_real_escape_string($link, $data[9]);
    $DateOfPaper = mysqli_real_escape_string($link, $data[10]);
    $Subject = mysqli_real_escape_string($link, $data[11]);


    $sql = "INSERT INTO `dummy_questions` (`id`,`question_no`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `category`, `DateWePosting`, `DateOfPaper`, `Subject`) VALUES('$id','$question_no', '$question', '$opt1', '$opt2', '$opt3', '$opt4', '$answer', '$category', '$DateWePosting', '$DateOfPaper', '$Subject')";
    if ($link->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>";
    }
  }
  echo '<script>alert("Question paper added succesfully");</script>';

  // Close the file
  fclose($file);

  // Redirect to the home page
  //   header("Location: ./index.php");
  //   exit();
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Upload CSV File</title>
</head>

<body>
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
          <h1>Upload Questions File (CSV File)</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="content mt-3">
    <div class="animated fadeIn">


      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <form action="" method="post" enctype="multipart/form-data">

              <div class="card-body">
                <div class="col-xl-4 col-lg-8 col-md-10 col-sm-12">
                  <div class="card">
                    <div class="card-header"><strong>UPLOAD Subject wise questions FILE HERE</strong></div>
                    <div class="card-body card-block">
                      <form action="" method="post">
                        <div class="form-group">
                          <h4><strong>Select subject</strong></h4><br />
                          <?php
                          // sql query to fetch subject details
                          $sql = "select distinct `Subject` from `questions`";

                          // execute the query and retrive the result
                          $result = mysqli_query($link, $sql);

                          //4. generate html options dynamically
                          $options = "";
                          if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                              $options .= "<option value='" . $row['Subject'] . "'>" . $row['Subject'] . "</option>";
                            }
                          }
                          //5. output generated html code
                          echo "<select class='form-control' name='subject'>";
                          echo  "<option>Select Subject</option>";
                          echo $options;
                          echo "</select>";

                          ?>
                        </div>
                      </form>
                      <?Php
                      if (isset($_post['Subject'])) {
                        $subject = $_post['subject'];
                        $sql = "select * from `questions` where subject='$subject'";
                        $result = mysqli_query($link, $sql);

                        if ($result->num_rows > 0) {
                          $_SESSION['dateofpaper'] = $row['DateOfPaper'];
                        }
                      }
                      ?>

                      <div class="form-group"><label for="file">Upload Subject Wise Questions file here :</label><input type="file" name="file" id="file"></div>
                      <br>
                      <div class="form-group">
                        <input type="submit" name="submit" value="UPLOAD" class="btn btn-success">
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header">
                      <strong class="card-title">Uploaded and Validated Subject Papers</strong>
                    </div>
                    <div class="card-body">



                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">SL NO</th>
                            <th scope="col">Subject </th>
                            <th scope="col">DateOfPaper</th>
                            <th scope="col">EDIT</th>
                            <th scope="col">DELETE</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $slno = 0;
                          $res = mysqli_query($link, "select distinct(Subject) from validated_subject_questions");
                          $count = mysqli_num_rows($res);
                          if ($count == 0) {
                            echo "<tr align='center'><td colspan='5'>Not Uploaded and Validated Any Paper </td></tr>";
                          } else {
                            while ($row = mysqli_fetch_array($res)) {
                              $slno = $slno + 1;

                          ?>

                              <tr>
                                <td scope="row"><?php echo $slno; ?></td>
                                <td><?php echo $subject; ?></td>

                                <?php


                                ?>

                              </tr>
                              <tr>
                                
                              </tr>
                          <?php
                            }
                          }

                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </form>
          </div> <!-- .card -->

        </div>
        <!--/.col-->
      </div>
    </div><!-- .animated -->
  </div><!-- .content -->
  <?php
  include "./footer.php";
  ?>

</body>

</html>