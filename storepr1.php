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
            margin-top: 100px;
            margin-left: 900px;
        }
        #div3{
            border: 1px solid;
            height: 500px;
            width: 400px;
            margin-left: 750px;
            background-color: aqua;

        }
        #div4,#div5,#div6,#div7{
            margin-top: 40px;
            margin-left: 90px;
        }
        input{
            height: 30px;
            width: 200px;
        }
        button{
            margin-top: 50px;
            margin-left: 180px;
            padding: 7px;
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
         <form action="storebackend.php" method="post">
            <h2 >store data</h2>
        <div class="div" id="div3">
            <div class="div" id="div4">
                <label for="">User e-mail :</label><br>
                <input type="email" required name="useremail" placeholder="Enter user email">
            </div>
            <div class="div" id="div5">
                <label for="">App Name :</label><br>
                <input type="text" required name="appname" placeholder="Enter app name">
            </div>
            <div class="div" id="div6">
                <label for="">Password    :</label><br>
                <input type="password" required name="password" placeholder="Enter password">
            </div> <div class="div" id="div7">
                <label for="">e-mail       :</label><br>
                <input type="email" required name="email" placeholder="Enter email">
            </div>
             
            <button type="submit" name="submit">submit</button>
            
            </div>
         </form>

         

    </div>
</body>
</html>