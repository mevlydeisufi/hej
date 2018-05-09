<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Shop | Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Subscribe page">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>

</head>
<body>
    <div class="content">
        <form method="post"  id="myform" action="insert.php">
            <label for="field1">Name:</label><br>
            <input type="text" name="field1" id="field1" placeholder="Name"><br>
            <label for="field2">Last Name:</label><br>
            <input type="text" name="field2" id="field2" placeholder="Last Name"><br>
            <label for="man">Gender male:</label><br>
            <label for="field3">Email:</label><br>
            <input type="email" name="field3" id="field3" placeholder="Email" required><br>
            <input type="submit" name="send" value="Skicka Meddelande">
            <button type="reset" value="Reset">Reset</button>
        </form>
    </div>
<script>
    $(document).ready(function () {

        $('#myform').validate({
            rules: {
                field1: {
                    required: true,
                    minlength: 3
                    nowhitespace: true
                },
                field2: {
                    required: true,
                    minlength: 3
                    nowhitespace: true

                },
                field3: {
                    required: true,
                    email: true,
                    nowhitespace: true
                },
            },
        });

    });
</script>
</body>
</html>