<?php 
$I = new ApiTester($scenario);
$I->wantTo('perform actions and see result');
$I->sendGET('/receivingrequestitems/getbyid?id=2');

$I->seeResponseIsJson();


