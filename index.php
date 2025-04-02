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

        #left_pannel {
            min-height: 100%;
            background-color: rgba(247, 226, 226, 0.9);
            flex: 1;
            padding: 10px;
            text-align: center;
        }

        #profile_image {
            width: 50%;
            border: solid thin black;
            border-radius: 25%;
            margin: 10px;
            padding: 10px;
            background-color: transparent;
        }

        #left_pannel label {
            width: 100%;
            height: 20px;
            display: block;
            font-size: 14px;
            background-color: #404b56;
            border-bottom: solid thin white;
            cursor: pointer;
            padding: 5px;
            transition: all 0.5s ease;
        }

        #left_pannel label:hover {
            background-color: #778593;
        }

        #left_pannel label img {
            float: right;
            width: 25px;
        }

        #right_pannel {
            min-height: 100%;
            background-color: rgba(232, 232, 243, 0.9);
            flex: 5;
            text-align: center;
        }

        #header {
            height: 50px;
            background-color: rgb(193, 188, 224);
            font-size: 40px;
            text-align: center;
            font-family: 'Gravitas One', sans-serif;
        }

        #container {
            display: flex;
            flex-direction: row;
            height: calc(100% - 50px);
        }

        #inner_left_pannel {
            width: 50%;
            background-color: transparent;
            padding: 20px;
            font-size: 16px;
            color: black;
        }

        #inner_right_pannel {
            width: 80%;
            background-image: url('./chat.png');
            background-size: cover;
            background-position: center;
            transition: all 1s ease;
            background-color: transparent;
        }

        #radio_chat:checked~#inner_right_pannel {
            width: 0;
            opacity: 0;
            overflow: hidden;
        }

        #radio_contact:checked~#inner_left_pannel {
            width: 0;
            opacity: 0;
            overflow: hidden;
        }
    </style>
</head>

<body>

    <div id="dynamic-bg"></div>

    <div id="wrapper">
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

                <input type="radio" id="radio_chat" name="myradio">
                <input type="radio" id="radio_contact" name="myradio">
                <input type="radio" id="radio_setting" name="myradio">

                <div id="inner_right_pannel"></div>
            </div>
        </div>
    </div>

    <script>
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