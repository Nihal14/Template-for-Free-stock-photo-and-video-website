<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="css/upload.css">
	<meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets//logo3.png" />
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>
<body style="background-color: #ffcfcf;">
<div class="container">
  <div class="login-form">
	<h2 style="text-align:center">Upload a Pic</h2>
    <!-- Login form elements here -->
 
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image" required>

           <input type="text"
                  name="title"
                  placeholder="Title" required/>

           <input type="text"
                  name="description"
                  placeholder="Description" required>
                 
           <select name="color">
                <option value="monochrome">Monochrome</option>
                <option value="colored">Colored</option>
           </select>

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
	 </div>
</div>
</body>
</html>