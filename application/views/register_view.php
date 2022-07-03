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
        <form action="<?php echo site_url('Welcome1/register_data');?>" method="post">
              <div class="mb-3 row">
                <label for="full_name" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input id="full_name" class="form-control" type="text" name="full_name" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Mobile Number</label>
                  
                <div class="col-sm-10">
                  <input name="mobile_no" type="number" class="form-control" id="inputPassword">
                </div>
              </div>
            
            
              <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3" style="width: 100%">Save</button>
              </div>
        </form>
        
      </div>
  </div>
</div>      
      
      
<div class="container">
    <div class="row">
    
        <table class="table table-dark table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Full Name</th>
              <th scope="col">Gender</th>
              <th scope="col">Mobile No.</th>
              <th scope="col">Email</th>
              <th scope="col">Status</th>
            <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              
          <? 
             foreach($members as $row){?>
            <tr>
              <td><?php echo $row->id?></td>
              <td><?php echo $row->full_name?></td>
              <td><?php echo $row->gender?></td>
              <td><?php echo $row->mobile_number?></td>
              <td><?php echo $row->email?></td>
              <td><?php echo $row->status?></td>
            <td><a href="<?php echo site_url('Welcome/edit_member/' . $row->id);?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a> - <a href="<?php echo site_url('Welcome/delete_member/' . $row->id);?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></a>
                
                </td>
            </tr>
        <? }?>
              
          </tbody>
        </table>        
    
    </div>

</div>
    
    
    
    
    
    
    
    
      
      
      
      
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
