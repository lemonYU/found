<?php

#翻页

if ($amount) {
    if ($amount < $page_size) {
        $page_count = 1;
    }               //如果总数据量小于$PageSize，那么只有一页
    if ($amount % $page_size) {                                  //取总数据量除以每页数的余数
        $page_count = (int) ($amount / $page_size) + 1;           //如果有余数，则页数等于总数据量除以每页数的结果取整再加一
    } else {
        $page_count = $amount / $page_size;                      //如果没有余数，则页数等于总数据量除以每页数的结果
    }
} else {
    $page_count = 0;
}
// 翻页链接
$page_string = '';


if ($page == 1) {
    $page_string .= '首页 | 上一页 | 第<b>' . ($page) . '</b>页 | 共<b>' . ($page_count) . '</b>页 | ';
} else {
    $page_string .= '<a href=' . $info_page . '&page=1>首页</a>|<a href=' . $info_page . '&page=' . ($page - 1) . '>上一页</a> | 第<b>' . ($page) . '</b>页 | 共<b>' . ($page_count) . '</b>页 | ';
}
if (($page == $page_count) || ($page_count == 0)) {
    $page_string .= '下一页 | 尾页';
} else {
    $page_string .= '<a href=' . $info_page . '&page=' . ($page + 1) . '>下一页</a> | <a href=' . $info_page . '&page=' . $page_count . '>尾页</a>';
}

