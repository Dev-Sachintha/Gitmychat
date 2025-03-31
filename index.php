<!DOCTYPE html>
<html>

<head>
    <title>My chat</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gravitas+One&display=swap" rel="stylesheet">
</head>

<style type="text/css">
    @font-face {
        font-family: 'Gravitas One';
        src: url(GravitasOne-Regular.ttf) format('truetype');
    }

    #wrapper {
        max-width: 800px;
        min-height: 500px;
        display: flex;
        background-color: rgb(225, 114, 114);
        margin: 0 auto;
        color: white;
    }

    #left_pannel {
        min-height: 400px;
        background-color: rgb(192, 26, 26);
        flex: 1;
    }

    #right_pannel {
        min-height: 400px;
        background-color: rgb(15, 15, 232);
        flex: 5;
    }

    #header {
        height: 50px;
        background-color: rgb(51, 20, 227);
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
        width: 20%;
        background-color: rgb(213, 130, 21);
    }

    #inner_right_pannel {
        width: 80%;
        background-image: url(./33282617.jpg);
        background-size: cover;


    }
</style>

<body>
    <div id="wrapper">
        <div id="left_pannel">

        </div>
        <div id="right_pannel">
            <div id="header">My Chat</div>
            <div id="container" style="display: flex;">
                <div id="inner_left_pannel"></div>
                <div id="inner_right_pannel"></div>
            </div>
        </div>
    </div>
</body>

</html>