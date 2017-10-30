<html>
<head>
	<title>Home for PDO</title>
</head>
<body>
<div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h1 style="color:black">welcome to IS218 party!</h1>
      </div>
    </div>
  </div>

  <div class="container" style="color:black"> 
    <form method="get" action="test_db.php" >
      <div class="form-group">
        <label>Task:</label>
        <!-- <input type="text" name="case_label" id="task"/> -->
        <select name="case_label">
          <option value="insert">insert</option>
          <option value="update">update</option>
          <option value="delete">delete</option>
          <option value="down dir">down dir</option>
          <option value="nonexist label">nonexist label</option>
        </select>
      </div>
      <div class="form-group">
        <input type="submit" value="Send" />
      </div>
    </form>
  </div>
</body>
</html>
<?php require 'show.php'; ?>
