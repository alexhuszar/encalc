<?php
function home($data)
{
    set('data', $data);
    return html('index.html.php');
}