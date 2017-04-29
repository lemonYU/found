<?php
#搜索页面


session_start();
include_once 'inc/info_web.php';
include_once 'inc/info_ad.php';
?>
<!DOCTYPE html>

        <!-- 页顶-栏目信息-Start  -->
     
        <?php
        include_once 'head.php';
        ?>
              
           
        <!-- 页顶-栏目信息-End  -->
        <div>
            <h4 class="title container" align='center' id="title">信息搜索</h4>
            <br>
            <?php
            echo "
            <div id='search' class='container'>
	            <form action='search.php' method='post'>
	            
				  <div class='form-group col-md-6 col-md-offset-2 pull-left'>
				    <div class='input-group col-md-12'>
				      <input type='text' class='form-control' id='exampleInputAmount' placeholder='搜索关键字...'  name='key' style='height:50px;border-radius:1rem;'>
				    </div>
				  </div>
				  <div class='input-group col-md-2 pull-left'>
				  	<input type='submit' class='btn btn-default' value='搜索' />
				  </div>
				</form>
			</div>
			<p align='center'>热门搜索： 身份证 钱包 驾照 手机 Iphone 火车站 </p>
        </div>";
			
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
                    	<ul class='list-group'>
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

</br><?= $ad_foot; ?><!--底部广告-->
	
<!-- 页脚-版权信息-Start  -->

﻿<p id="hr"></p>
<?php
include_once 'foot.php'; //插入foot.php页脚信息
?>

<!-- 页脚-版权信息-End  -->
