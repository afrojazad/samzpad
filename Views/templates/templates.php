<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <style>

        .header, .footer{
            border:1px solid green;
            padding: 10px;
        }
        .container{
            border:1px solid red;
            padding:10px;
        }
    </style>
</head>
<body>
    <div class="header">Header</div>
    <?php 
        // $this->view($content, $data);
    ?>
    {{content}}
    <div class="footer">Footer</div>
</body>
</html>