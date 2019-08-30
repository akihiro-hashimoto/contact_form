<?php

// エスケープ処理をする関数
// $str: エスケープしたい文字
// 
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}