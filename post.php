<?php
// 评论Ajax翻页 by 牧风

if(isset($_GET["action"]) && $_GET["action"] == "ajax_comments"){// Ajax请求的头数据
    $this->need('comments.php');
}else{
    if(strpos($_SERVER["PHP_SELF"],"themes")) header('Location:/');
    $this->need('header.php');
?>
<div id="title"><a title="作者：<?php $this->author() ?>" href="<?php $this->author->permalink(); ?>" target="_blank"><?php $this->author->gravatar(48); ?></a>
<h1><?php $this->title() ?></h1>
<span class="desc"><?php $this->date(); ?> / <?php $this->category(' , '); ?> / <?php $this->tags(' , ', true, 'none'); ?>  /  <?php $this->views(); ?> 次围观  /  <?php $this->commentsNum('快抢沙发', '沙发被抢', '%d 条评论'); ?></span>
</div>
<div class="post">
			<?php $this->content(''); ?>
            <?php if ($this->options->copyDisplay == 'display') { ?>
	<div class="lblue">本博客所有文章<a>如无特别注明</a>均为原创。<br />复制或转载请<a>以超链接形式</a>注明转自<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>，原文地址《<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>》
</div><?php } ?>        <?php if ($this->options->shareDisplay == 'display') { ?>
	<div class="share2">
		<ul class="drop-menu">
<!-- Baidu Button BEGIN -->
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" style="margin-left: 6px;" title="分享到QQ空间"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页"></a><a href="#" class="bds_tqf" data-cmd="tqf" title="分享到腾讯朋友"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_hx" data-cmd="hx" title="分享到和讯"></a><a href="#" class="bds_tsohu" data-cmd="tsohu" title="分享到搜狐微博"></a><a href="#" class="bds_isohu" data-cmd="isohu" title="分享到我的搜狐"></a><a href="#" class="bds_ty" data-cmd="ty" title="分享到天涯社区"></a><a href="#" class="bds_diandian" data-cmd="diandian" title="分享到点点网"></a><a href="#" class="bds_huaban" data-cmd="huaban" title="分享到花瓣"></a><a href="#" class="bds_duitang" data-cmd="duitang" title="分享到堆糖"></a><a href="#" class="bds_fbook" data-cmd="fbook" title="分享到Facebook"></a><a href="#" class="bds_twi" data-cmd="twi" title="分享到Twitter"></a><a href="#" class="bds_linkedin" data-cmd="linkedin" title="分享到linkedin"></a><a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a><a href="#" class="bds_sdo" data-cmd="sdo" title="分享到麦库记事"></a><a href="#" class="bds_qingbiji" data-cmd="qingbiji" title="分享到轻笔记"></a><a href="#" class="bds_copy" data-cmd="copy" title="分享到复制网址"></a><a href="#" class="bds_mail" data-cmd="mail" title="分享到邮件分享"></a><a href="#" class="bds_print" data-cmd="print" title="分享到打印"></a><a href="#" class="bds_mshare" data-cmd="mshare" title="分享到一键分享"></a><a href="#" class="bds_more" data-cmd="more"></a><a class="bds_count" data-cmd="count"></a> </div>
    <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=<?php $this->options->shareid() ?>.js?cdnversion='+~(-new Date()/36e5)];</script>
<!-- Baidu Button END -->
		</li>
		</ul>
	</div><?php } ?><!--end share-->
            <?php if ($this->options->pnDisplay == 'display') { ?>
<span class="float_l"  id="pre_post">上一篇： <?php $this->thePrev(); ?></span>
<span class="float_r" id="next_post">下一篇： <?php $this->theNext(); ?>
</span><?php } ?>
<div style="clear:both"></div>
</div>
		<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
<?php }?>
