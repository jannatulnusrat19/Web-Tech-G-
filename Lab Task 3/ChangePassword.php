<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        .button:hover{
     background-color: yellow;
     color: red;
 }
 body{
     background-color: lavenderblush;
     margin: 10px;
     padding: 10px;     
 }
 .my-form{
     background-color: lightblue;
     padding: 20px;
     padding-top: 150px;
     margin: auto;
     margin-top: 80px;
     border: purple 5px solid;
     width: 30%;
     height: 300px;
     text-align: center;    
 }
 .button{
    background-color: rebeccapurple;
    color: white;
    padding: 5px;
    border: none;
    text-align: left;
}
.container h1{
    color:purple;
    text-align: center;
    font-style: italic;
    text-transform: uppercase;
    text-decoration: underline;
    margin-top: 50px;
}
.my-form label{
    display: inline-block;
    padding: 3px 6px;
    text-align: right;
    vertical-align: top;
    width: 150px;

}
.new{
    color: blue;
}
.renew{
    color: brown;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Change Password!</h1>
</div>
    <div class="my-form">
        <label> Current Password: </label> 
        <input type="text"> <br>
        <label class="new"> New Password: </label>
        <input type="text"> <br>
        <label class="renew"> Retype New Password: </label>
        <input type="text"> <br>
        <br>
        <input class="button" type="submit" value="Submit">

    </div>
</body>
</html>