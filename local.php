
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show/Hide Div</title>
    <style>
        #hiddenDiv {
            display: none;
        }
    </style>
</head>
<body>
    <div id="hiddenDiv">
        Yeh ek hidden div hai jo click hone par dikhai dega.
    </div>
    <button id="toggleButton">Click Me</button>

    <script>document.getElementById('toggleButton').addEventListener('click', function() {
    var hiddenDiv = document.getElementById('hiddenDiv');
    if (hiddenDiv.style.display === 'none') {
        hiddenDiv.style.display = 'block';
    } else {
        hiddenDiv.style.display = 'none';
    }
});
</script>
</body>
</html>