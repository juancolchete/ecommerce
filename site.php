<?php
use \juanudk\PageAdmin;

$app->get('/', function () {

$page = new Page();

$page->setTpl("index");
});
?>