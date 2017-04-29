<!-- <div class="copy">
    <p>Copyright &copy; 2009-2013  Power by <a href=" http://zzzzy.com" target="_blank">zzzzy.com</a> <a href="http://bbs.oupag.com" target="_blank">Forum</a> <a href="admin/login.php" target="_blank">Login</a> <a href="#top">Top</a></br> QQ：<a href="http://sighttp.qq.com/msgrd?v=3&uin=<?= $webqq; ?>&Site=http://bbs.oupag.com&Menu=yes" target="_blank"><?= $webqq; ?></a> -  E-mail：<a href=" mailto:<?= $webmail; ?>" target="_blank"><?= $webmail; ?></a><?= $webstat; ?></br><span style="font-size:14px"><a href="index.php" title="<?= $webname; ?>"><b><?= $webname; ?></b></a></span></p><br>
</div> -->
	</div>

<footer class="footer-1 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h2>Lost & Found</h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="widget">
                    <h6 class="title">友情链接</h6>
                    <hr>
                    <ul class="link-list recent-posts">
                        <li>
                            <?= $webname?>
                        </li>
                        <li>
                            <a href="https://github.com/yingliyu/" target="_blank">github</a>
                        </li>
                        <li>
                            <a href="http://www.cnblogs.com/imelemon/" target="_blank">博客园</a>
                        </li>
                    </ul>
                </div>
                <!--end of widget-->
            </div>
        </div>
        <!--end of row-->
        <div class="row">
            <div class="col-sm-6">
                <span class="sub">Copyright ©2017 鱼忘七秒</span>
            </div>
            <div class="col-sm-6 text-right">

            </div>
        </div>
    </div>
    <!--end of container-->
    <a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>
</footer>
</div>
<script src="/public/js/jquery.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<!--<script src="/js/js.js"></script>-->
<!--分页-->
<script>
    $(function () {
        var $ul = $('#pagination');
        var $lis = $ul.children('li');
//      console.log($lis);

        $lis.click(function(){
//            console.log($(this).index());
            $(this).addClass('active').siblings('li').removeClass('active');
        });
    });
</script>
</body>
</html>