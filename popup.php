<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container
        {
            width: 100%;
            height: 100vh;
            background-color: lightslategray;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .p-btn
        {
            padding: 10px 60px;
            font-size: 22px;
            cursor: pointer;
            border: 0;
            outline: none;
            border-radius: 20px;
        }
        .popup
        {
            width: 400px;
            background: #fff;
            border-radius: 4px;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50% , -50%) scale(0.1);
            text-align: center;
            color: #333;
            transition: transform 0.4s;
           visibility: hidden;
        }
        .openpopup
        {
            visibility: visible;
            top: 50%;
            transform: translate(-50% , -50%) scale(1);
        }
        .popup h2 
        {
            margin: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }
        .popup p 
        {
            color: #242424;
            margin: 15px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
        }
        .popup button
        {
            padding: 10px 160px;
            background: lightseagreen;
            margin: 10px;
            border:0;
            outline: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.2);
    
        }
    </style>
</head>

<body>
    <div class="container">
       <button class="p-btn" onclick="openup()" >Submit</button>
       <div class="popup" id="popup">
        <h2>Congratulations</h2>
        <p>"Congratulations" is a song by American rapper and singer Post Malone featuring
             fellow American rapper and singer Quavo. The song, at first released as a </p>
             <button class="c-btn" onclick="closeup()">Close</button>
       </div>
    </div>
    <script>
    let p =document.getElementById("popup");

    function openup()
    {
       p.classList.add("openpopup");
    }
    function closeup()
    {
       p.classList.remove("openpopup");
    }
</script>
</body>
</html>

