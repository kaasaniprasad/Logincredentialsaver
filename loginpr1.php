<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
 <style>
        *{
            padding: 0px;
            margin: 0px;
            background-color: #3c5b9a;
            
        }
        #di1{
            
            height: 900px;
            margin: 10px;
            box-shadow: 0 0 20px #143477;
             
             
        }
        #di2{
            text-align: center;
        }
        #di2,#di3{
            border: 1px solid;
            height: 450px;
        }
        #di3{
            background-color: rgb(228, 236, 236);
        }
        #di4{
            border: 1px solid;
            margin-left: 750px;
            margin-right: 750px;
            height: 250px;
            margin-top: -70px;
            background-color: whitesmoke;
        }
        .inp{
            border: none;
            outline: none;
            border-bottom: 1px solid;
            font-size: 1rem;
            background-color: whitesmoke;
            margin-left: 40px;
            margin-top: 30px;
        }
        button{
            margin-top: 20px;
            margin-left: 160px;
            padding: 5px;
        }
        h1{
            margin-top: 150px;
        }
        h5{
            margin-top: 30px;
            font-size: 50px;
        }
        p{
            margin-top: px;
            margin-left: 40px;
            background-color: whitesmoke;
            
        }
 #a20{
    margin-top: 20px;
    margin-left: 160px;
    border: 2px solid;
    padding: 5px;
    color: black;
 }
 #p1{
    margin-top: 30px;
 }
    </style>
</head>
<body>
 <form  action="loginbackend.php" method="post" > 
     <div class="div1" id="di1">
        <div class="div1" id="di2">
            <h1>Login Credential Saver</h1>
            <h5> Login </h5>
        </div>
        <div class="div1" id="di3">
            <div class="div1" id="di4">
                
            <p>e-mail :</p>
                <input type="email" placeholder="Email" class="inp" name="email" required><br>
                <p class="p" id="p1">password :</p>
                <input type="password" placeholder="Password" class="inp" name="password" required><br><br>
                
                <button  >Login</button>
            </div>
        </div>
     </div>
    </form>

</body>
</html>