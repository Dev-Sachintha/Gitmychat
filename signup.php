<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login and Registration Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Gravitas+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet" />
    <style>
        /* Styles are the same as before (truncated here for clarity) */
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Dancing Script', cursive;
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
            max-width: 800px;
            min-height: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 50px auto;
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

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 90%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        header {
            text-align: center;
            font-size: 24px;
            font-family: 'Gravitas One', cursive;
            color: #333;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div id="dynamic-bg"></div>

    <div id="wrapper">
        <div id="header">MY Chat
            <div style="font-size: 14px; font-family: 'Gravitas One', cursive; color: #555;">
                Welcome to the Chat Application
            </div>
        </div>

        <form id="myform">
            <h2>Register</h2>
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="text" name="email" placeholder="Email" required><br>
            <br>Gender:<br>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female<br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required><br><br>
            <input type="submit" value="Sign Up"><br><br><br>
        </form>
    </div>

    <script>
        document.getElementById("myform").addEventListener("submit", function(e) {
            e.preventDefault();

            const form = e.target;
            const data = {
                username: form.username.value,
                email: form.email.value,
                gender: form.gender.value,
                password: form.password.value,
                confirm_password: form.confirm_password.value,
                data_type: "signup"
            };

            fetch("api.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify(data)
                })
                .then(res => res.text())
                .then(response => alert(response))
                .catch(err => alert("Error: " + err));
        });

        const images = ["./pngtree.jpg", "./oytm.jpg", "./vibrant.jpg", "./xy.jpg"];
        let index = 0;
        setInterval(() => {
            document.getElementById("dynamic-bg").style.backgroundImage = `url('${images[index]}')`;
            index = (index + 1) % images.length;
        }, 5000);
    </script>
</body>

</html>