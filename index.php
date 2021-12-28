<?php
require_once('classes/JWT.php');
$jwt = (new JWT());

// for demo purposes only, remove this and the sample function below when in use
require_once('functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWT Tutorial</title>
</head>

<body>
    <h1>JWT Tutorial</h1>
    <?php
    $payload = [
        'id' => '1',
        'name' => 'John Doe',
        'iss' => 'jwt.local',
        'aud' => 'example.com'
    ];
    $token = $jwt->generate($payload);
    sample($jwt->is_valid($token));

    $payload = [
        'id' => '1',
        'name' => 'John Doe'
    ];
    $token = $jwt->generate($payload);
    sample($jwt->is_valid($token));

    sample($jwt->is_valid('test'));
    ?>
</body>

</html>