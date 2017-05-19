<?php
#搜索页面
session_start();
include_once 'inc/info_web.php';
include_once 'inc/info_ad.php';

     
include_once 'head.php';


            error_reporting(E_ALL ^ E_NOTICE);
            if ($_POST[key]) {
                $key = explode(" ", $_POST[key]); //空格分隔
                foreach ($key as $mkey) {  //历遍数组赋给$mkey
                }
                $sql = "select * from yszl where info like '%$mkey%'"; //多关键字匹配
                $query = mysql_query($sql);
//$row = mysql_fetch_array($query);
                if (@mysql_num_rows($query) == 0) {
                    echo "<p align='center'>抱歉，没有搜索到相关内容</p>";
                    //  echo "<script language='javascript'>location.href"
                }

                while ($row = mysql_fetch_array($query)) {
                    foreach ($key as $mkey) {
                        $row["info"] = preg_replace("/$mkey/i", "<strong>\\0</strong>", $row["info"]);
                    }
                    ?>
                    <div class='container'>
                    	<ul class='list-group' style='margin-top: 290px'>
	                    	<?php
		                        if (($row["fabu"]) == "1") {
		                            echo " <li class='list-group-item'><strong>类别：</strong>丢失</li>";
		                        } else {
		                            echo " <li class='list-group-item'><strong>类别 ：</strong>招领</li>";
		                        }
		                    ?>
						  <li class='list-group-item'>
						  	<strong>标题：</strong><a href='info.php?id=<?= $row["id"] ?>' target='_blank' title='<?= $row["title"] ?>'><?= $row["title"] ?></a>
						  </li>
						  <li class='list-group-item'><strong>发布时间： </strong><?= $row["time"] ?></li>
						  <li class='list-group-item'><strong>描述：</strong><?= $row["info"] ?></li>
						</ul>
                    </div>
      
        <?php
    }
}
?>

<?= $ad_foot; ?><!--底部广告-->
	
<!-- 页脚-版权信息-Start  -->

﻿<p id="hr"></p>
<?php
include_once 'foot.php'; //插入foot.php页脚信息
?>
