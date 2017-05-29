<?php
function calc($data)
{
    set('data', $data);
    return html('calc.html.php');
}