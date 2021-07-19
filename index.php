<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>

    <script>
    function pageScroll() {
        window.scrollBy(0, 1); // horizontal and vertical scroll increments
        scrolldelay = setTimeout('pageScroll()', 100); // scrolls every 100 milliseconds
    }
    pageScroll();
    </script>
 
    <style>
    div {
        width: 100%;
        height: 100vh;
        display: inline-block;
    }

    div:nth-child(odd) {
        background: red;
    }

    div:nth-child(even) {
        background: green;
    }
    </style>
</body>

</html>