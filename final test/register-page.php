<!doctype html>
<html lang="en">
  <head>
    <title>Simple DB</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <h3>REGISTER</h3>
      <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <form action="process-register.php" method="POST">
        <div class="form-group">
            <label for="">First Name</label>
            <input type="text" class="form-control" name="txtFirstName" id="txtFirstName" aria-describedby="emailHelpId" placeholder="">
        </div>
        <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" class="form-control" name="txtLastName" id="txtLastName" aria-describedby="emailHelpId" placeholder="">
            
      </div>
      <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="txtEmail" id="txtEmail" aria-describedby="emailHelpId" placeholder="">
            
      </div>
      <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="txtPassword" id="txtPassword" aria-describedby="emailHelpId" placeholder="">
            
      </div>
      <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" class="form-control" name="txtPassword2" id="txtPassword2" aria-describedby="emailHelpId" placeholder="">
      </div>
      <div class="form-group">
            <input type="submit" class="form-control btn btn-primary" value="Register" name="txtLogin" id="txtLogin" aria-describedby="emailHelpId" placeholder="">
      </div>
      </form>
                    </div>
                </div>
            
            </div>
      </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>