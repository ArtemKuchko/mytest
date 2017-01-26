<?php

//(#cc0055) так и (rgb(255,255,255))

function ColorValidation($color)
{
    if ($color[0] == '#')
    {
        // for HEX colors:
        if (!preg_match('/#[a-f0-9]{3,6}/i', $color) || (strlen($color)>7))
        {
            return false;
        }

        return true;

    }
    else
    {
        // for RGB colors:
        /*if (!preg_match('/rgb\([0-9]{3}\,[0-9]{3}\,[0-9]{3}\)/i', $color)) {
            return false;
        }
        else*/

        {
            list($a, $b, $c) = sscanf($color, "rgb(%d,%d,%d)");


            if ($a > 255 || $b > 255 || $c > 255)
            {
                return false;
            }

            return true;
        }
    }

    /*// for HEX colors:
    if (!preg_match('/#[a-f0-9]{3,6}/i', $color))
    {
        return false;
    }

    // for RGB colors:
    if (!preg_match('/rgb\([0-9]{3}\,[0-9]{3}\,[0-9]{3}\)/i', $color)) {
        return false;
    }
    else
    {
        list($a, $b, $c) = sscanf($color, "rgb(%d,%d,%d)");

        if ($a > 255 || $b > 255 || $c > 255)
        {
            return false;
        }

        return true;
    }*/

}

if (ColorValidation('rgb(2,5,2)'))
{
    echo 'Все ОК';
}
else
{
    echo 'НЕТ!';
}

?>

