<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" value="<?php echo e(csrf_token()); ?>"/>
    <title>Test aja</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="<?php echo e(mix('css/app.css')); ?>" type="text/css" rel="stylesheet"/>
</head>
<body>
    <div id="app">
        <example-component></example-component>
    </div>
    <script src="<?php echo e(mix('js/app.js')); ?>" type="text/javascript"></script>
</body>
</html>
<?php /**PATH /home/eyginef/Publik/laravel/app-investasi/resources/views/index.blade.php ENDPATH**/ ?>