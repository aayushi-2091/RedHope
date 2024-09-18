<!doctype html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Need For Blood</title>
    <link rel="icon" href="pictures/logo.png" type="image/logo">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="min-height: 100%; display: flex; flex-direction: column;">
<div class="main-content">
    <?php include "content/header.php"; ?>
    <form class="row g-3" style="display: flex; padding: 3rem; margin-top: 4rem;">
        <div class="col-md-4">
          <label for="validationDefault01" class="form-label">First name</label>
          <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
        </div>
        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Last name</label>
          <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
        </div>
        <div class="col-md-4">
          <label for="validationDefaultUsername" class="form-label">Email</label>
          <div class="input-group">
            <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">Blood Group</label>
          <select class="form-select" id="validationDefault04" required>
            <option selected disabled value="">Select blood group</option>
            <option value="1">A+</option>
            <option value="2">A-</option>
            <option value="3">B+</option>
            <option value="4">B-</option>
            <option value="5">AB+</option>
            <option value="6">AB-</option>
            <option value="7">O+</option>
            <option value="8">O-</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="validationDefault05" class="form-label">Reason for Blood</label>
          <input type="text" class="form-control" id="validationDefault05" required>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </form>
      <?php include "content/footer.php"; ?>
      </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>
</html>