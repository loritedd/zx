<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="menu_img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
      * {
    margin: 0px;
    padding: 0px;
  }
  body {
    font-size: 120%;
    background: #F6C2DE;
  }
  
  .header {
    width: 30%;
    margin: -25px auto 0px;
    color: rgb(100, 42, 66);
    background: #d8f8fc;
    text-align: center;
    border: 1px solid #deb0de;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
  }
  form, .content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #ffb9ea;
    background: white;
    border-radius: 0px 0px 10px 10px;
    
  }
  .input-group {
    margin: 10px 0px 10px 0px;
  }
  .input-group label {
    color: rgb(100, 42, 66);
    display: block;
    text-align: left;
    margin: 3px;
    
  }
  .input-group input, option, select, textarea {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid #8ef2ff;
  }
  div.img {
      text-align: center;
  }
  img{
    margin-top: 50px;
    width: 200px;
      border-radius: 100%;
      border: 1px solid #a94442;
  }
  .btn {
    padding: 10px;
    font-size: 15px;
    color: rgb(0, 0, 0);
    background: #8ef2ff;
    border: none;
    border-radius: 5px;
  }
  .btn:hover{
    color: rgb(72, 91, 116);
    box-shadow: brown 2px 2px 4px;
  }
  .error {
    width: 92%; 
    margin: 0px auto; 
    padding: 10px; 
    border: 1px solid #a94442; 
    color: #a94442; 
    background: #f2dede; 
    border-radius: 5px; 
    text-align: left;
  }
  .success {
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    margin-bottom: 20px;
  }
  a{
    text-decoration: none;
    color: rgb(143, 45, 83);
    margin-top:10px;
  }
  a:hover{
    color: rgb(197, 86, 129);
    text-decoration: underline;
  }

    </style>

</head>
<body>
    <section class="book">
        <div class="img"><img src="menu_img/image1.jpg" alt=""></div>
        <div class="book-list">
        <div class="header">
  	<h2>Register</h2>
  </div>
            <form method="post" action="book.php">
              <?php include('errors.php'); ?>
              <div class="input-group">
                <input type="text" value="<?php echo $username; ?>" name="username" placeholder="Full Name"><br>
              </div>
                <div class="input-group">
                    <input type="tel" value="<?php echo $email; ?>" name="phone" placeholder="Phone Number"><br>
                </div>
                <div class="input-group">
                    <label for="servies">Servies:</label>
                    <select name="servies" value="<?php echo $servies?>" placeholder="Choose Servies">
                        <option name="servies" >Choose on the spot</option>
                        <option name="servies" >Make up</option>
                        <option name="servies" >Nail</option>
                        <option name="servies">Hair</option>
                        
                    </select><br>
                </div>
                <div class="input-group">
                <label for="Master">Master:</label>
                <select id="servies" name="master" value="<?php echo $master?>" placeholder="Choose Master">
                    <option name="servies" >Choose on the spot</option>    
                    <option name="master" >Aidana Kairatova (Nail)</option>
                    <option name="master">Zhanar Dugalova (Nail)</option>
                    <option name="master">Moldir Khairolla (Nail)</option>
                    <option name="master" >Tansholpan Kenzhebek (Hair)</option>
                    <option name="master" >Aidana Zhanys (Hair)</option>
                    <option name="master" >Medina Bolat (Hair)</option>
                    <option name="master" >Bota Zharas (Hair)</option>
                    <option name="master" >Togzhan Kembayeva (Make Up)</option>
                    <option name="master" >Azhar Orynbasar (Make Up)</option>
                    <option name="master" >Merey Aidar (Make Up)</option>
                    <option name="master" >Symbat Satzhan (Make Up)</option>
                    <option name="master" >Choose on the spot</option>

                </select><br>
                <a href="Master.html">Know about master more...</a><br>
              </div>
              <div class="input-group">
                <input type="date" value="<?php echo $date?>" name="date">
              </div>
              <div class="input-group">
                <label for="time">Time:</label>
                <input type="time" value="<?php echo $time ?>" name="time">
              </div>
              <div class="input-group">
                <textarea rows="10" cols="45" name="preference"placeholder="Preference"></textarea><br>
              </div>
              <div class="input-group">
                <input type="submit" class="btn" name="reg_user" placeholder="Submit">
              </div>
            </form>
        </div>
    </section>

</body>
</html>
