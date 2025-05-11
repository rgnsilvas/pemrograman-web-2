<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <style>
        body {
            background-image: url('librarybg.png');
            background-size: cover;  
            background-position: center;
            background-attachment: fixed;  
            font-family: 'Arial', sans-serif;
            color: #4a4a4a;
            margin: 0;
            padding: 0;
            height: 100vh;  
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        h1 {
            text-align: center;
            color: #f4a6c6;
            font-size: 50px;
            margin-bottom: 80px;
            margin-top: -20px;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);
        }
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }
        .btn {
            background-color: #f4a6c6;
            color: white;
            font-size: 20px;
            padding: 15px 25px;
            margin: 10px;
            border: none;
            border-radius: 30px;
            text-decoration: none;
            display: inline-block;
        }
        .btn:hover {
            background-color: #f1b7cd;
        }
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>⭐ WELCOME TO SEASIL's LIBRARY ⭐</h1>
    <div class="container">
        <div class="btn-container">
            <a href="Member.php" class="btn">👫 LIST MEMBER</a>
            <a href="Buku.php" class="btn">📕 LIST BUKU</a>
            <a href="Peminjaman.php" class="btn">🤝 LIST PEMINJAMAN</a> 
        </div>
    </div>
</body>
</html>
