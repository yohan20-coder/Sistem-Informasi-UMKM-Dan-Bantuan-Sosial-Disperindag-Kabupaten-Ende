<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>

<style>
    img{
        height: fullscreen;
    }
</style>

    <input type="hidden" name="id" value="<?= $ubah['id'];?>">
    <img src="<?= base_url('assets/surkel/').$ubah['lamp2']?>">

    <script>
        window.print();
    </script>
</body>
</html>