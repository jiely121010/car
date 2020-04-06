<?php /* Smarty version 2.6.18, created on 2015-10-24 09:44:57
         compiled from default/default/foot.html */ ?>
<!--底部导航-->
<div class="footer" id="foot">
	<p class="tc">
		<?php $_from = $this->_tpl_vars['partlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['part']):
?>
		<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/<?php echo $this->_tpl_vars['part']['c_url']; ?>
" title="<?php echo $this->_tpl_vars['part']['c_name']; ?>
" <?php if ($this->_tpl_vars['part']['c_target'] == 2): ?>target="_blank"<?php endif; ?>><?php echo $this->_tpl_vars['part']['c_name']; ?>
</a> | 
		<?php endforeach; endif; unset($_from); ?>
	</p>
	<p class="mt10"><center><div style=line-height:21px>资源提供：<a href=http://www.souho.net target=_blank><font color=red>搜虎精品社区</font></a>
<br>&nbsp;
<a href=http://www.souho.net target=_blank>搜虎精品社区</a> | <a href=http://vip.souho.net target=_blank>极品商业源码</a> | <a href=http://idc.souho.net target=_blank>搜虎精品社区空间、域名</a> | <a href=http://vip.souho.net/templates/Korea/ target=_blank>90G韩国豪华商业模版</a> | <a href=http://tool.souho.net/ target=_blank>站长工具箱</a>
<br>
更多精品商业资源，就在<a href=http://www.souho.net target=_blank>搜虎精品社区</a></font>
</div></center></p>
 </div>
 <div id="right-side" class="right-side">
    <ul>
    <li class="side-top w4"><a id="backtop" title="返回顶部" href="#top" style="display: block;">返回顶部</a></li>
  </ul>
 </div>
<!-- 版权 结束 -->