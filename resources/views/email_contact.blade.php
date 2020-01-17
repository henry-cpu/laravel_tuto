
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                text-align-all: center;
            }

            .links > a{
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            h1{
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-align: center;
            }
            .m-b-md {
                margin-bottom: 30px;
            }

        </style>
    </head>
    <body>
        <h2>Kontakt von Benutzer</h2>
        <p>Empfang von Informationen</p>
        <ul>
            <li><strong>Name</strong> : {{ $name }}</li>
            <li><strong>Email</strong> : {{ $email }}</li>
            <li><strong>Message</strong> : {{ $msg }}</li>
        </ul>

    </body>



</html>