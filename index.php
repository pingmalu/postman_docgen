<html>
    <head><meta charset="utf-8"></head>
<style>
    a {
        display: flex;
        width: 300px;
        position: relative;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin: 34px 22px;
        padding: 10px;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        float: left;
        height: 80px;
        text-transform: uppercase;
        border: 1px solid currentColor;
        font-family: 'Open Sans', Helvetica, arial, sans-serif;
        text-align: center;
        text-decoration: none;
        line-height: 80px;
        color: cornflowerblue;
        font-size: 20px;
        font-style: normal;
        font-weight: 100;
        line-height: 24px;
        border-radius: 3px;
    }

    a:hover {
        background-color: #f2f2f2;
    }

    h1 {
        margin: 27px 27px;
        color: #474747;
    }
</style>
<?php
include_once('config.php');
echo '<h1>'.$config['title'].'</h1>';
foreach ($config['lists'] as $key => $value) {
    echo '<a href="' . $value . '.html">' . $key . '</a>';
}
?>
</html>