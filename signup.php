<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gravitas+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            overflow: hidden;
            font-family: 'Dancing Script', cursive;
        }

        #dynamic-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out;
            z-index: -1;
        }

        #wrapper {
            max-width: 800px;
            min-height: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: transparent;
            margin: 50px auto;
            color: grey;
            font-size: 14px;
            position: relative;
            z-index: 1;

        }

        form {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        input[type="text"],input[type="password"],input[type="submit"] {
            width: 90%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        #header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);

        }
        
    </style>
</head>

<body>

    <div id="dynamic-bg"></div>

    <div id="wrapper">
        <div id="header">MY Chat
            <div style="font-size: 14px; font-family: 'Gravitas One', cursive; color: #555;">Welcome to the Chat Application</div>
        </div>
        <form id="myform" >
            <h2>Register</h2>
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="text" name="email" placeholder="Email" required><br>
            <br>Gender:<br>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female<br><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required><br><br>
            <input type="submit" value="Sign Up" id="signup_button"><br><br><br>
        </form>

        <label id="label_chat" style="cursor: pointer; margin-top: 20px; display: block;">Open Chat</label>
        <div id="inner_left_pannel" style="width: 100%; text-align: center; padding: 10px;"></div>
    </div>

    <script>
        function _(element){
            return document.getElementById(element);
        }
        var signup_button = _("signup_button");
        signup_button.addEventListener("click", collect_data);

    function collect_data(){
        var myform = _("myform");
        var inputs = myform.getElementsByTagName("input");
        var data = {};

        for(var i = inputs.length - 1; i >= 0; i--){

            var key =inputs[i].name;
            switch(key){
                case "username":
                   data.username = inputs[i].value;
                   break;    
                case "email":
                    data.email = inputs[i].value;
                    break;
                case "gender":
                    if(inputs[i].checked){
                    data.gender = inputs[i].value;
                    }
                    break;
                case "password":
                    data.password = inputs[i].value;
                    break;        
                case "confirm_password":
                    data.confirm_password = inputs[i].value;
                    break;
            }
        }

    }
    function send_data(data,type){
      var xml = new XMLHttpRequest();
      xml.onload = function(){
        if(xml.readyState == 4 && xml.status == 200){

            alert(xml.responseText);
        }   
        xml.open("POST", "api.php", true);
        xml.send(data);
    }
 }
        // Background Image Slideshow
        const images = [
            "./pngtree.jpg",
            "./oytm.jpg",
            "./vibrant.jpg",
            "./xy.jpg"
        ];

        let index = 0;

        function changeBackground() {
            document.getElementById("dynamic-bg").style.backgroundImage = `url('${images[index]}')`;
            index = (index + 1) % images.length;
        }

        setInterval(changeBackground, 5000);
        changeBackground();
    </script>

</body>

</html>