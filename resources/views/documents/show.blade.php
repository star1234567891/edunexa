<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View PDF</title>
</head>
<body>
    <h1>Document Viewer</h1>
    <embed src="{{ asset($pdfPath) }}" type="application/pdf" width="100%" height="600px" />
</body>
</html>
