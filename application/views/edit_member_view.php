<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Hello, world!</title>
</head>
<body>

      
<div class="container">
  <div class="row" style="width: 40%;margin-left: auto;margin-right: auto">
    <div class="col text-center">
        <h3 class="text-center" style="color: green"><?php if(isset($msg))echo str_replace("%20"," ",$msg);?></h3>
      <h1>Register</h1>
        <h5>Please enter your personal data</h5>
        <form action="<?php echo site_url('Welcome1/update_member');?>" method="post">
            
            <input type="hidden" name="id" value="<?php echo $one_member->id?>"/>
            
            
              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="full_name" required value="<?php echo $one_member->full_name?>">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Mobile Number</label>
                  
                <div class="col-sm-10">
                  <input name="mobile_number" type="number" class="form-control" id="inputPassword" value="<?php echo $one_member->mobile_number?>">
                </div>
              </div>
            
            
              <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3" style="width: 100%">Update</button>
              </div>
        </form>
        
      </div>
  </div>
</div>      
      
      
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
