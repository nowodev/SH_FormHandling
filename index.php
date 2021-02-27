<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Handling</title>
  <link rel="stylesheet" href="dist/css/bootstrap.css" />
</head>

<body>
  <main class="container pt-5">
    <h1 class="text-center font-weight-bold">Form Validation</h1>

    <div class="card">
      <div class="card-header"></div>
      <div class="card-body">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="row">
            <div class="form-group col-md-6 mb-2">
              <input type="text" class="form-control" placeholder="Firstname" value="<?= $firstname; ?>" />
            </div>
            <div class="form-group col-md-6 mb-2">
              <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?= $lastname; ?>" />
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6 mb-2">
              <input type="text" class="form-control" placeholder="Phone No" value="<?= $number; ?>" />
            </div>
            <div class="form-group col-md-6 mb-2">
              <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $email; ?>" />
            </div>
          </div>

          <div class="row">
            <div class="col-6 form-group">
              <label for="">Gender: </label>
              <input type="radio" class="" name="gender" value="male" <?php isset($gender) && $gender == "male" ? "checked" : ""; ?>/> Male
              <input type="radio" class="" name="gender" value="female" <?php isset($gender) && $gender == "female" ? "checked" : ""; ?>/> Female
            </div>
            <div class="col-6 form-group">
              <label for="age">Age: </label>
              <select name="age">
                <option value="">Select One</option>
                <?php for ($i=1; $i<=20; $i++): ?>
                <option <?php isset($age) && $age == $i ? "selected" : ""; ?> value="<?= $i; ?>"><?= $i; ?></option>
                <?php endfor; ?>
              </select>
            </div>
          </div>

          <div class="d-grid">
            <button class="btn btn-primary mt-2" type="submit">Submit</button>
          </div>
        </form>
      </div>

      
  </main>

  <script src="dist/js/bootstrap.js"></script>
</body>

</html>