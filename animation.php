<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animation</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        h1
        {
            font-size: 40px;
            text-align: center;
           
        }
        h1::after 
        {
            content: '';
            color: red;
            animation: afzal 10s linear infinite;

        }
        @keyframes afzal 
        {
            10%{content : 'Web Developer'}
            30%{content : 'Digital Marketer'}
            50%{content : 'Graphics Designer'}
            80%{content : 'Video Editor'}
            100%{content : 'Services Provider'}
        }
        .loder
        {
            width: 100%;
            height: 4px;
            border-radius: 12px;
            background: red;
            animation: loder 10s ease-in-out;
        }
        @keyframes loder
        {
            10%{width : 0%;}
            30%{width : 30%;}
            50%{width : 50%;}
            80%{width : 80%;}
            100%{width : 100%;}
        }
    </style>
</head>
<body>
    <div class="loder"></div>
    <br><br><br><br>
    <h1>Afzal Khan & </h1>
</body>
</html>