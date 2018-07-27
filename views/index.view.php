<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <title>Untitled</title>
    <link rel="stylesheet" href="views/css/style.css">
</head>

<body>
<form name="selectForm" method="post" action="/apply">
    <select id="selector" name="select" onChange="selected();">
        <option value="" hidden style="color: #ccc">Please select...</option>
        <?php
            foreach ($selectList as $key => $option) {
                if (strpos($option, "(disabled)") !== false) {
                    //$option = str_replace("(disabled)", "", "{$option}");
                    ?>
                    <option value="<?=$key;?>" disabled="disabled"><?=$option;?></option>
                    <?php
                } else {
                    ?>
                    <option value="<?=$key;?>"><?=$option;?></option>
                    <?php
                }
            }
        ?>
    </select>
    <?php
        $count = 1;
        foreach($selectList as $value)
        {
            echo '<input type="hidden" name="selectList['.$count.']" value="'. $value. '">';
            $count++;
        }
    ?>
    <input type="submit" id="btn_submit" disabled value="submit">
</form>
<script type="text/javascript" src="views/js/app.js"> </script>
</body>
</html>
