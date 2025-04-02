<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Chat</title>
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
            max-width: 1000px;
            min-height: 1000px;
            display: flex;
            background-color: transparent;
            margin: 0 auto;
            color: white;
            font-family: 'Dancing Script', cursive;
            font-size: 14px;
            position: relative;
            z-index: 1;
        }

        
    </style>
</head>

<body>

    <div id="dynamic-bg"></div>

    <div id="wrapper">
        <form>
            <input type="text" name="username" placeholder="Username"><br>
            <br>Gender:<br>
            <input type="radio" name="gender">Male<br>
            <input type="radio" name="gender">Female<br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="password" name="confirm_password" placeholder="Confirm Password"><br>
            <input type="submit" value="Sign Up"><br> 
        </form>
        <div id="left_pannel">
            <div style="padding: 10px;">
                <img id="profile_image" src="./sachintha passport size.jpg" alt="Profile Picture">
                <br>
                <strong>Sachintha Chamikara</strong>
                <br>
                <span style="font-size: 12px; opacity: 0.5;">chamikara24sachintha@gmail.com</span>
                <div>
                    <br><br><br><br>

                    <label for="radio_chat" id="label_chat">Chat <img src="./chat-icon.png" alt="Chat Icon"></label>
                    <label for="radio_contact" id="label_contact">Contacts <img src="./contact-icon.png" alt="Contact Icon"></label>
                    <label for="radio_setting" id="label_setting">Setting <img src="./Settings-icon.png" alt="Settings Icon"></label>
                </div>
            </div>
        </div>

        <div id="right_pannel">
            <div id="header">My Chat</div>
            <div id="container">
                <div id="inner_left_pannel"></div>

                

    <script type="text/javascript">
        function _(element) {
            return document.getElementById(element);
        }

        function read_data() {

            var inner_left_pannel = _("inner_left_pannel");

        }
        var label = _("label_chat");
        label.addEventListener("click", function() {
            var inner_left_pannel = _("inner_left_pannel");

            var ajax = new XMLHttpRequest();
            ajax.onload = function() {

                if (ajax.status == 200 || ajax.readyState == 4) {
                    inner_left_pannel.innerHTML = ajax.responseText;
                } else {
                    inner_left_pannel.innerHTML = "Error loading data";
                }
            };



            ajax.open("POST", "file.txt", true);
            ajax.send();

        });
        const images = [
            "./pngtree.jpg",
            "./oytm.jpg",
            "./vibrant.jpg",
            "./xy.jpg",
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