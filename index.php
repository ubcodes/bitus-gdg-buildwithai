
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Content</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Metal+Mania&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
  <script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1684982764/magicmouse-2.0.0.cdn.min.js"></script>
    <style>
        .container {
            text-align: center;
            margin-top: 50px;

        }

        #text,
        #image,
        #generateBtn {
            display: inline-block;
            vertical-align: middle;
        }

        #responseContainer {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Bitus AI</h1>
    <h2>Generate Content</h2>
        <input type="text" name="text" id="text" placeholder="Summarize...">
        <input type="file" class="magic-hover magic-hover__square" name="image" id="image">
        <button class="magic-hover magic-hover__square" id="generateBtn" onclick="generateResponse();">Generate</button>
    </div>

    <div id="responseContainer">
        <div id="response"></div>
    </div>

    <script src="script.js"></script>
    <script type="text/javascript">
    options = {
	"cursorOuter": "circle-basic",
	"hoverEffect": "circle-move",
	"hoverItemMove": false,
	"defaultCursor": false,
	"outerWidth": 30,
	"outerHeight": 30
      };
    magicMouse(options);
</script>
</body>

</html>
