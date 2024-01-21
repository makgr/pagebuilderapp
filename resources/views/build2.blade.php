<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unlayer email editor</title>
</head>

<body>
    <div id="editor-container" style="width: 1024px; height: 700px"></div>
    <script src="//editor.unlayer.com/embed.js"></script>
    <script>
        unlayer.init({
            id: 'editor-container',
            projectId: 1234,
            displayMode: 'email'
        })

        unlayer.exportHtml(function(data) {
            var json = data.design;
            var html = data.html;
            console.log(json)
        }, {
            cleanup: true
        })
    </script>
</body>

</html>
