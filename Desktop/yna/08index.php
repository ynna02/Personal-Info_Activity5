<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>PeyysApp</title>
</head>
<body>
    <h1>Peys App</h1>
    <form  method = get>
    Select photo size : <input type="range" id="ImgSize" name="ImgSize" value = "60" min="10" max="100" step="10">
    <br>
    <br>
    Select Border Color: <input type="color" id="BorderColor" name="BorderColor" value="#000000">
    <br>
    <br>
    <input type="submit" name="ProcessBtn">
    <br>
    <br>
    
    <?php
    if(isset($_GET['ProcessBtn'])){
         $ImageRangeSize = 60;
         $ImageRangeSize = $_GET['ImgSize'];
         $border = $_GET['BorderColor'];
     }
     ?>
  
  <div>
  <img src="https://scontent.fcrk1-3.fna.fbcdn.net/v/t39.30808-6/298568451_2291844207645818_3086252747431180306_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGO2JrWxKrfZ5OOg9FutNjhhauIMleYTeeFq4gyV5hN5-QoeZzIKLQ8FZm5VleEBSnYlmawL58KrgeXeVluv0Ok&_nc_ohc=W-FYH3xB25UAX_fdrlj&_nc_oc=AQktoymWnxykalJNSbvpMjbCKb6UqPzem-AKcpDEWt8Wlvcnyx6q3d0uL_aLHAfx3bY&_nc_ht=scontent.fcrk1-3.fna&oh=00_AfAKpVuSXhqLX4fFeoFl0a63Km2froW5jbbDzVoc0zEKbg&oe=6360451A " style="width: <?php echo $ImageRangeSize . '%'; ?>;border-color: <?php echo $border; ?>;border-width: 4px; border-style: solid;">
  </div>
  
   

    </form>


    <script type="text/javascript" href="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" href="js/bootstrap.js"></script>


</body>
</html>