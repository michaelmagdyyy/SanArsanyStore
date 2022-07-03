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
      <h1>Login</h1>
        <h5>Please enter your username and password to login</h3>
        <form action="<?php echo site_url('Welcome/get_result');?>" method="post">
              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">First Number</label>
                <div class="col-sm-10">
                    <input class="form-control" type="number" name="first_number"  required value="<?php if(isset($first_number)) echo $first_number?>">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Operation Type</label>
                <div class="col-sm-10">
                        <select name="operation_type" class="form-select" aria-label="Default select example">
                          <option selected>Please select operation type</option>
                          <option value="+" <? if(isset($operation_type) && $operation_type == '+') echo ' selected'?>>+</option>
                          <option value="-" <? if(isset($operation_type) && $operation_type == '-') echo ' selected'?>>-</option>
                          <option value="/" <? if(isset($operation_type) && $operation_type == '/') echo ' selected'?>>/</option>
                          <option value="*" <? if(isset($operation_type) && $operation_type == '*') echo ' selected'?>>*</option>
                        </select>
                  </div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Second Number</label>
                  
                <div class="col-sm-10">
                  <input name="second_number" type="number" class="form-control" id="inputPassword" value="<?php if(isset($second_number)) echo $second_number?>">
                </div>
              </div>
            
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Result</label>
                  
                <div class="col-sm-10">
                  <input name="result" type="text" readonly class="form-control"  value="<?php if(isset($result)) echo $result?>">
                </div>
              </div>
            
              <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3" style="width: 100%">Get Result</button>
              </div>
        </form>
        
      </div>
  </div>
</div>      
      
      
      
      
      
      
      
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
