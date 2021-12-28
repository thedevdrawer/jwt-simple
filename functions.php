<?php

function sample($result): void
{
    echo ($result == true ?
        '<span style="color:green">JWT is valid</span>' : '<span style="color:red">JWT is invalid</span>') . '<br>';
}
