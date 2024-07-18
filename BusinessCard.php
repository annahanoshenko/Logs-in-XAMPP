<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Візитка</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 300px;
            text-align: center;
            padding: 20px;
        }
        .card img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .card h2 {
            font-size: 24px;
            margin: 10px 0;
        }
        .card p {
            font-size: 18px;
            color: #666;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="AnnaHanoshenko.jpg" alt="Фото Анни Ганошенко">
        <h2>Анна Ганошенко</h2>
        <p>Test Automation Engineer in .NET</p>
    </div>
</body>
</html>