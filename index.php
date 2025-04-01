<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Chat</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gravitas+One&display=swap" rel="stylesheet">
</head>

<style type="text/css">
    @font-face {
        font-family: 'Gravitas One';
        src: url(GravitasOne-Regular.ttf) format('truetype');
    }

    @font-face {
        font-family: 'Dancing Script';
        src: url(DancingScript-VariableFont_wght.ttf) format('truetype');
    }

    #wrapper {
        max-width: 1000px;
        min-height: 1000px;
        display: flex;
        background-color: rgb(225, 114, 114);
        margin: 0 auto;
        color: white;
        font-family: 'Dancing Script', cursive;
        font-size: 14px;
    }

    #left_pannel {
        min-height: 100%;
        background-color: rgb(188, 84, 84);
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
        background-color: rgb(232, 232, 243);
        flex: 5;
        text-align: center;
    }

    #header {
        height: 50px;
        background-color: rgb(167, 156, 234);
        font-size: 40px;
        text-align: center;
        font-family: Gravitas One, sans-serif;
    }

    #container {
        display: flex;
        flex-direction: row;
        height: calc(100% - 50px);
    }

    #inner_left_pannel {
        width: 50%;
        background-color: rgb(203, 192, 178);
    }

    #inner_right_pannel {
        width: 80%;
        background-image: url(./33282617.jpg);
        background-size: cover;
        transition: all 1s ease;
    }

    /* Hide right panel when Chat is selected */
    #radio_chat:checked~#inner_right_pannel {
        width: 0;
        opacity: 0;
        overflow: hidden;
    }

    /* Hide left panel when Contact is selected */
    #radio_contact:checked~#inner_left_pannel {
        width: 0;
        opacity: 0;
        overflow: hidden;
    }
</style>

<body>
    <div id="wrapper">
        <div id="left_pannel">
            <div style="padding: 10px;">
                <img id="profile_image" src="./sachintha passport size.jpg">
                <br>
                Sachintha Chamikara
                <br>
                <span style="font-size: 12px; opacity: 0.5;">chamikara24sachintha@gmail.com</span>
                <div>
                    <br><br><br><br>

                    <!-- Labels connected to radio inputs -->
                    <label for="radio_chat" id="label_chat">Chat <img src="./chat-icon.png"></label>
                    <label for="radio_contact" id="label_contact">Contacts <img src="./contact-icon.png"></label>
                    <label for="radio_setting" id="label_setting">Setting <img src="./Settings-icon.png"></label>
                </div>
            </div>
        </div>

        <div id="right_pannel">
            <div id="header">My Chat</div>
            <div id="container">

                <div id="inner_left_pannel"></div>

                <!-- Radio buttons moved above inner_right_pannel -->
                <input type="radio" id="radio_chat" name="myradio">
                <input type="radio" id="radio_contact" name="myradio">
                <input type="radio" id="radio_setting" name="myradio">

                <div id="inner_right_pannel"></div>
            </div>
        </div>
    </div>
</body>

</html>
