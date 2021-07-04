<?php
    $member = array();

    $member[0] = array();

    $member[0]['name'] = '홍찬희';
    $member[0]['userID'] = 'ghdcksgml2';
    $member[0]['email'] = 'ghdcksgml2@naver.com';

    $member[1] = array();

    $member[1]['name'] = '홍찬영';
    $member[1]['userID'] = 'ghdcks31';
    $member[1]['email'] = 'ghdcks31@naver.com';

    $member[2] = array();

    $member[2]['name'] = '홍찬미';
    $member[2]['userID'] = 'ghdcksal2';
    $member[2]['email'] = 'ghdcksal2@naver.com';

    for($i=0;$i<count($member);$i++){
        echo $member[$i]['name']."<br/>";
    }
?>