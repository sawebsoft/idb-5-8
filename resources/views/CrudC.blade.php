<!DOCTYPE html>
<html lang="en">
<head>
  <title> Entry Form </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Entry form</h2>
  <form action="PostController/store" method="POST">
        
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>

    <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

    <div class="mb-3 mt-3">
        <label for="contact">Contact No:</label>
        <input type="text" class="form-control" id="contact" placeholder="Enter Contact" name="contact">
    </div>


    <div class="mb-3">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
    </div>

    

    <div class="mb-3 mt-3">
        <label for="emailv">Email:</label>
        <input type="email" class="form-control" id="emailv" placeholder="Enter email" name="emailv">
    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


</body>
</html>
