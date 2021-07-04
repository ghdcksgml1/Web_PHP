<!doctype html>
<html>
    <head>
    <meta charset="utf-8"/>
    <title>for문을 이용한 select태그</title>
    </head>
    <body>
        <select name="birthMonth" id="birthMonth">
        <?php
            $selectedMonth= 4;

            for($i=1;$i<=12;$i++){
                $selected='';
                if($i==$selectedMonth){
                    $selected = "selected";
                }?>
                <option value="<?=$i?>" <?=$selected?>><?=$i?></option>
            <?php } ?>
            
        </select>
        <label for="birthMonth">월</label>
    </body>
</html>