<?php include_once 'db/dbh.php'; ?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::PS1::</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

   <h1 class="display-4">USER"S DETAILS</h1>
    <div class="container-fluid">
    <div class="row text-center">

        <div class="col-10 mx-auto my-2">

                  <table class="table table-hover">
<thead>


    <tr>
    <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">email</th>
          <th scope="col">mobile</th>

    </tr>

    </thead>
      <tbody>
        <?php
        $sql="SELECT * FROM ps1;";
        $stmt=$dbconn->prepare($sql);
        $result=$stmt->execute();
        $result=$stmt->get_result();
          while($row=$result->fetch_assoc()){
        ?>

                 <tr class="table-active">

            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['mobile']; ?></td>

         </tr>
       <?php } ?>
              </tbody>
    </table>
        </div>


<!--    end of col    -->

    <div class="col-10 mx-auto my-2 col-md-5 card">
        <h5 class="bg-success text-white p-2">Insert new user</h5>
        <form action="db/action.php" method="POST">

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="fname" required>
            </div>
<!--        end of form group-->
      <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="femail" required>
            </div>
<!--        end of form group-->
      <div class="form-group">
            <label>Mobile</label>
            <input type="tel" class="form-control" name="fmobile" required>
            </div>
<!--        end of form group-->
            <input type="submit" value="Save" class="btn btn-success btn-block " name="fsave">
        </form>

        </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
