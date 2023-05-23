<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .wavy-div {
            width: 200px;
            height: 200px;
            background-color: #e8e8e8;
            position: relative;
            overflow: hidden;
        }

        .wavy-div::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: -50%;
            width: 200%;
            height: 100px;
            background-color: #f9f9f9;
            animation: wave 2s infinite linear;
        }

        @keyframes wave {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(100%);
            }
        }
    </style>
    <title>Wavy Animation Effect</title>
</head>
<body>
<div class="wavy-div"></div>
</body>
</html>
