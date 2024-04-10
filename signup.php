
<?php include('header2.php');?>
<section class="signup">
  <div class="container card p-5 col-md-6">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center mb-4">Signup Form</h2>
        <form method="POST" action="signup_process.php">
          <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Signup</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


  <style>
    .signup{
      padding-top: 150px;
      padding-bottom: 150px;
    }
  </style>