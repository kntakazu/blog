<?php
// 名前空間はモジュール名
namespace User;

class Controller_Hello extends \Controller
{
     function action_index()
     {
	return \Response::forge('Hello!');
     }
}
