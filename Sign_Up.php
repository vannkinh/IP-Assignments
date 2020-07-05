<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<style>
    .head {
    float: left;
    margin-left: 25px;
    }
    .top-head{
        top: 1px;
    }
    .head1 {
    float: right;
    margin-right: 25px;
    
    }
    .shop {
        color: green;
    }
    .box{
       text-align: center;
       padding: 250px;
       line-height: 50px;
       width: 500px;
       height: 500px;
       margin-left: auto;
       margin-right: auto;
      
    }
    #email {
        width: 400px;
        height: 20px;
        border: solid 2px;
    }
    #name {
        width: 400px;
        height: 20px;
        border: solid 2px;
        
    }

    #password {
        width: 400px;
        height: 20px;
        border: solid 2px;
    }
    #submit {
        width: 405px;
        height: 25px;
        background-color: green;
        color: white;
        box-shadow: 0 4px 4px 0;
    }
</style>
<body>
    <div class="top-head">
        <div class="head">
            <h1>Awesome<span class="shop">Shop</span></h1>
        </div>
        <div> 
            <div class="head1"><input type="button" value="Join"></div>
            <div class="head1"><i class="fa fa-question-circle" >Need Helps</i></div>
        </div>
    </div>
    <div class="box">
        <div style="border: solid 2px; ">
            <h3 style="color: green;">Sign Up</h3>
            <p>By signing up, you agree to Awesome Shop's Term & Condition</p>
            <div><input type="text" value="" placeholder="name" id="name"></div>
            <div><input type="email" name="Email" id="email" placeholder="Email"></div>
            <div><input type="password" name="Password" id="password" placeholder="Password"></div>
            <div><input type="password" name="Password" id="password" placeholder="confirm password"></div>
            <div><input type="submit" value="Continue" id="submit"></div>
            <p><b> Already have an account?</b><a href="Sign_In.html">Sign In</a></p>
        </div>
        
    </div>
</body>
</html>