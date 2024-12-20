<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        
        #div1{
           
            height: 900px;
            background-color: aquamarine;


        }
        #div2{
            margin-top: -8PX;
            
            border: 2px solid;
            
            padding: 25px;
            background-color: bisque;
        }
        #a1{
            margin-left: 800px;
        }
        a{

            margin-left: 200px;
            text-decoration: none;
            color: black;
            font-size: 20px;
        }
        h2{
            margin-top: 50px;
            margin-left: 850px;
        }
        #div3{
            margin-left: 750px;
            
        }
        input{
            width: 250px;
            height: 30px;
        }
        button{
            margin-top: 30px;
            margin-left: 180px;
        }
         
    </style>
</head>
<body>
    <div class="div" id="div1">
        <div class="div" id="div2">
            <a class="a" id="a1" href="homepr1.php">Home</a>
            <a href="storepr1.php">store data</a>
            <a href="viewpr1.php">view data</a>
            <a href="updatepr1.php">update data</a>
        </div>
        <h2>view data</h2>
        <form action="viewbackend.php" method="post"> 
        <div class="div" id="div3">
            <label for="">User email :</label>
            <input type="text" name="usemail"><br>
            <button type="submit" name=submit>View</button>

        </div>
        </form>
  

          
    </div>
</body>
</html>