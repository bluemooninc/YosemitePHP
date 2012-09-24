<?php /* Smarty version 2.6.26, created on 2012-09-22 10:27:33
         compiled from xoopstrap/theme.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
	<meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
"/>
	<meta http-equiv="content-style-type" content="text/css"/>
	<meta http-equiv="content-script-type" content="text/javascript"/>
	<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
"/>
	<meta name="robots" content="<?php echo $this->_tpl_vars['xoops_meta_robots']; ?>
"/>
	<meta name="keywords" content="<?php echo $this->_tpl_vars['xoops_meta_keywords']; ?>
"/>
	<meta name="description" content="<?php echo $this->_tpl_vars['xoops_meta_description']; ?>
"/>
	<meta name="rating" content="<?php echo $this->_tpl_vars['xoops_meta_rating']; ?>
"/>
	<meta name="author" content="<?php echo $this->_tpl_vars['xoops_meta_author']; ?>
"/>
	<meta name="copyright" content="<?php echo $this->_tpl_vars['xoops_meta_copyright']; ?>
"/>
	<meta name="generator" content="XOOPS Cube"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $this->_tpl_vars['xoops_sitename']; ?>
 - <?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
</title>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['xoops_themecss']; ?>
"/>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
css/override.css">
	<link rel="stylesheet" href="css/custom-theme/jquery-ui-1.8.16.custom.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/js/bootstrap.js"></script>
	<!-- RMV: added module header -->
	<?php echo $this->_tpl_vars['xoops_module_header']; ?>

	<script type="text/javascript">
		<!-- <?php echo $this->_tpl_vars['xoops_js']; ?>
 -->
	</script>
</head>
<body>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<div class="nav-collapse">
				<ul class="nav">
										<a class="brand" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/">
						<?php echo $this->_tpl_vars['xoops_sitename']; ?>

					</a>
					<?php if ($this->_tpl_vars['moduleMenu']): ?>
					<li>
						<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
" class="home active">
							<i class="icon-white icon-home"></i>&nbsp;
						</a>
					</li>
					<?php $_from = $this->_tpl_vars['moduleMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['modMenu']):
?>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="icon-envelope"></i>
							<?php echo $this->_tpl_vars['modMenu']['name']; ?>

							<b class="caret"></b>
						</a>
						<!-- Drop down -->
						<ul class="dropdown-menu">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						</ul>
					</li>
					<li class="divider-vertical"></li>
					<?php $_from = $this->_tpl_vars['modMenu']['sublinks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subMenu']):
?>
					<?php if ($this->_tpl_vars['subMenu']['dropdown']): ?>
					<li class="dropdown nondot">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="icon-white icon-th-list"></i>
							<?php echo $this->_tpl_vars['subMenu']['name']; ?>

							<b class="caret"></b></a>
						<!-- Drop down -->
						<ul class="dropdown-menu">
							<?php $_from = $this->_tpl_vars['subMenu']['dropdown']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dropwdown']):
?>
							<li>
								<a href="<?php echo $this->_tpl_vars['dropwdown']['url']; ?>
"><?php echo $this->_tpl_vars['dropwdown']['name']; ?>
</a>
							</li>
							<?php endforeach; endif; unset($_from); ?>
						</ul>
					</li>
					<?php else: ?>
					<li>
						<a href="<?php echo $this->_tpl_vars['subMenu']['url']; ?>
"><?php echo $this->_tpl_vars['subMenu']['name']; ?>
</a>
					</li>
					<?php endif; ?>
					<li class="divider-vertical"></li>
					<?php endforeach; endif; unset($_from); ?>
					<?php endforeach; endif; unset($_from); ?>
					<?php else: ?>
										<?php $_from = $this->_tpl_vars['xoops_cgblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
					<li class="dropdown">
						<a href="#"
						   class="dropdown-toggle"
						   data-toggle="dropdown">
							<i class="icon-white icon-th-list"></i>
							<?php echo $this->_tpl_vars['block']['title']; ?>

							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<?php echo $this->_tpl_vars['block']['content']; ?>

						</ul>
					</li>
					<li class="divider-vertical"></li>
					<?php endforeach; endif; unset($_from); ?>
					<?php endif; ?>
				</ul>
			</div>
			<!--/.nav-collapse -->
			<div class="btn-group pull-right">
				<?php if ($this->_tpl_vars['xoops_uname']): ?>
				<a href="#" data-toggle="dropdown" class="btn dropdown-toggle">
					<i class="icon-user"></i>
					<span class="caret"></span>
					<?php echo $this->_tpl_vars['xoops_uname']; ?>

				</a>
				<?php else: ?>
				<a class="btn btn-primary" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php">Login</a>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['xoops_uname']): ?>
				<ul class="dropdown-menu">
					<?php if ($this->_tpl_vars['xoops_isadmin']): ?>
					<li class="userMenuAdmin"><a
							href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/admin.php"><?php echo @_MB_LEGACY_ADMENU; ?>
</a></li>
					<li class="divider"></li>
					<?php endif; ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:legacy_block_usermenu.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</ul>
				<?php endif; ?>
							</div>
			<div class="GlobalSearchBox pull-right">
				<form action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/search.php" method="get">
					<input id="globalSearch" class="Search-box PngBg" type="text" name="query" size="22"/>
					<input type="hidden" name="action" value="results"/>
					<!-- <button name="submit" type="submit" value="search" accesskey="F">Search</button> -->
				</form>
			</div>
			<a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
		</div>
	</div>
</div>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
	<div class="container">
		<div class="pull-left">
			<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
xcl_images/logo.png" alt="<?php echo $this->_tpl_vars['xoops_sitename']; ?>
" title="<?php echo $this->_tpl_vars['xoops_sitename']; ?>
"/>
		</div>
	</div>
</header>
<br/>

<div class="container-fluid">
	<div class="row-fluid">
		<?php if ($this->_tpl_vars['xoops_showlblock'] == 1 && $this->_tpl_vars['xoops_showcblock'] == 1 && $this->_tpl_vars['xoops_showrblock'] == 1): ?>
		<?php $this->assign('sidespan', 'span2'); ?>
		<?php $this->assign('centerspan', 'span8'); ?>
		<?php elseif ($this->_tpl_vars['xoops_showlblock'] == 0 && $this->_tpl_vars['xoops_showcblock'] == 1 && $this->_tpl_vars['xoops_showrblock'] == 1): ?>
		<?php $this->assign('sidespan', 'span3'); ?>
		<?php $this->assign('centerspan', 'span9'); ?>
		<?php elseif ($this->_tpl_vars['xoops_showlblock'] == 1 && $this->_tpl_vars['xoops_showcblock'] == 1 && $this->_tpl_vars['xoops_showrblock'] == 0): ?>
		<?php $this->assign('sidespan', 'span3'); ?>
		<?php $this->assign('centerspan', 'span9'); ?>
		<?php elseif ($this->_tpl_vars['xoops_showlblock'] == 0 && $this->_tpl_vars['xoops_showcblock'] == 1 && $this->_tpl_vars['xoops_showrblock'] == 0): ?>
		<?php $this->assign('sidespan', 'span0'); ?>
		<?php $this->assign('centerspan', 'span12'); ?>
		<?php elseif ($this->_tpl_vars['xoops_showlblock'] == 1 && $this->_tpl_vars['xoops_showcblock'] == 0 && $this->_tpl_vars['xoops_showrblock'] == 0): ?>
		<?php $this->assign('sidespan', 'span3'); ?>
		<?php $this->assign('centerspan', 'span9'); ?>
		<?php elseif ($this->_tpl_vars['xoops_showlblock'] == 0 && $this->_tpl_vars['xoops_showcblock'] == 0 && $this->_tpl_vars['xoops_showrblock'] == 1): ?>
		<?php $this->assign('sidespan', 'span3'); ?>
		<?php $this->assign('centerspan', 'span9'); ?>
		<?php elseif ($this->_tpl_vars['xoops_showlblock'] == 1 && $this->_tpl_vars['xoops_showcblock'] == 0 && $this->_tpl_vars['xoops_showrblock'] == 1): ?>
		<?php $this->assign('sidespan', 'span6'); ?>
		<?php $this->assign('centerspan', 'span0'); ?>
		<?php endif; ?>
		<!-- left block -->
		<?php if ($this->_tpl_vars['xoops_showlblock'] == 1): ?>
		<div class="<?php echo $this->_tpl_vars['sidespan']; ?>
">
			<div class="well sidebar-nav">
				<h2>LEFT</h2>
				<?php $_from = $this->_tpl_vars['xoops_lblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
				<?php echo $this->_tpl_vars['block']['title']; ?>

				<?php echo $this->_tpl_vars['block']['content']; ?>

				<?php endforeach; endif; unset($_from); ?>
			</div>
		</div>
		<?php endif; ?>
		<!-- Center block -->
		<?php if ($this->_tpl_vars['xoops_showcblock'] == 1 || $this->_tpl_vars['xoops_contents']): ?>
		<div class="<?php echo $this->_tpl_vars['centerspan']; ?>
">
			<?php if (empty ( $this->_tpl_vars['xoops_contents'] )): ?>
			<!-- <div class="hero-unit">
							<h1><?php echo $this->_tpl_vars['xoops_slogan']; ?>
</h1>
							<p>Bootstrap with WISYWIG,Finder CMS kit</p><br/>
						</div> -->
			<?php else: ?>
			<?php echo $this->_tpl_vars['xoops_contents']; ?>

			<?php endif; ?>
			<div class="row-fluid">
				<?php if ($this->_tpl_vars['xoops_clblocks'] && $this->_tpl_vars['xoops_ccblocks'] && $this->_tpl_vars['xoops_crblocks']): ?>
				<?php $this->assign('cspan', 'span4'); ?>
				<?php elseif (! isset ( $this->_tpl_vars['xoops_clblocks'] ) && $this->_tpl_vars['xoops_ccblocks'] && $this->_tpl_vars['xoops_crblocks']): ?>
				<?php $this->assign('cspan', 'span6'); ?>
				<?php elseif ($this->_tpl_vars['xoops_clblocks'] && ! isset ( $this->_tpl_vars['xoops_ccblocks'] ) && $this->_tpl_vars['xoops_crblocks']): ?>
				<?php $this->assign('cspan', 'span6'); ?>
				<?php elseif ($this->_tpl_vars['xoops_clblocks'] && $this->_tpl_vars['xoops_ccblocks'] && ! isset ( $this->_tpl_vars['xoops_crblocks'] )): ?>
				<?php $this->assign('cspan', 'span6'); ?>
				<?php elseif (! isset ( $this->_tpl_vars['xoops_clblocks'] ) && ! isset ( $this->_tpl_vars['xoops_ccblocks'] ) && $this->_tpl_vars['xoops_crblocks']): ?>
				<?php $this->assign('cspan', 'span12'); ?>
				<?php elseif ($this->_tpl_vars['xoops_clblocks'] && ! isset ( $this->_tpl_vars['xoops_ccblocks'] ) && ! isset ( $this->_tpl_vars['xoops_crblocks'] )): ?>
				<?php $this->assign('cspan', 'span12'); ?>
				<?php elseif (! isset ( $this->_tpl_vars['xoops_clblocks'] ) && $this->_tpl_vars['xoops_ccblocks'] && ! isset ( $this->_tpl_vars['xoops_crblocks'] )): ?>
				<?php $this->assign('cspan', 'span12'); ?>
				<?php elseif ($this->_tpl_vars['xoops_clblock'] && ! isset ( $this->_tpl_vars['xoops_ccblocks'] ) && ! isset ( $this->_tpl_vars['xoops_crblocks'] )): ?>
				<?php $this->assign('cspan', 'span12'); ?>
				<?php endif; ?>
				<!-- BLOCK Center-Left -->
				<?php if (isset ( $this->_tpl_vars['xoops_clblocks'] )): ?>
				<div class="<?php echo $this->_tpl_vars['cspan']; ?>
">
					<h2>CENTER LEFT</h2>
					<?php $_from = $this->_tpl_vars['xoops_clblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
					<?php echo $this->_tpl_vars['block']['title']; ?>

					<?php echo $this->_tpl_vars['block']['content']; ?>

					<?php endforeach; endif; unset($_from); ?>
				</div>
				<?php endif; ?>
				<!-- BLOCK Center-Center -->
				<?php if (isset ( $this->_tpl_vars['xoops_ccblocks'] )): ?>
				<div class="<?php echo $this->_tpl_vars['cspan']; ?>
">
					<h2>CENTER CENTER</h2>
					<?php $_from = $this->_tpl_vars['xoops_ccblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
					<?php echo $this->_tpl_vars['block']['title']; ?>

					<?php echo $this->_tpl_vars['block']['content']; ?>

					<?php endforeach; endif; unset($_from); ?>
				</div>
				<?php endif; ?>
				<!-- BLOCK Center-Right -->
				<?php if (isset ( $this->_tpl_vars['xoops_crblocks'] )): ?>
				<div class="<?php echo $this->_tpl_vars['cspan']; ?>
">
					<h2>CENTER RIGHT</h2>
					<?php $_from = $this->_tpl_vars['xoops_crblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
					<?php echo $this->_tpl_vars['block']['title']; ?>

					<?php echo $this->_tpl_vars['block']['content']; ?>

					<?php endforeach; endif; unset($_from); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['xoops_showrblock'] == 1): ?>
		<div class="<?php echo $this->_tpl_vars['sidespan']; ?>
">
			<div class="well sidebar-nav">
				<h2>RIGHT</h2>
				<?php $_from = $this->_tpl_vars['xoops_rblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
				<?php echo $this->_tpl_vars['block']['title']; ?>

				<?php echo $this->_tpl_vars['block']['content']; ?>

				<?php endforeach; endif; unset($_from); ?>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<!-- End Block Center-Left and Center-Right -->
	<br class="floatClear"/>
	<hr>
	<footer>
		<p>
			<?php echo $this->_tpl_vars['xoops_footer']; ?>

		</p>
	</footer>
</div>
<!-- history back script -->
<script type="text/javascript">
	function history_back() {
		var str = document.referrer;

		if (document.URL.indexOf("modules/point/index.php") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
";
			return;
		}
		if (document.URL.indexOf("modules/xoopsmembers") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/message/index.php?action=send&menu=send";
			return;
		}
		if (document.URL.indexOf("modules/bulletin") > 0 && document.URL.indexOf("page=article") > 0 && document.URL.indexOf("storyid=") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/message/";
			return;
		}
		if (document.URL.indexOf("modules/bulletin") > 0 && document.URL.indexOf("op=comments") > 0 && document.URL.indexOf("storytopic") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoopsURL']; ?>
/modules/bulletin/?op=comments";
			return;
		}
		if (str && ( document.URL.indexOf("modules/point/index.php") <= 0 )) {
			page = -1;
			if (((str.indexOf("modules/message/") > 0) && (document.URL.indexOf("modules/message/") <= 0)) ||
					((str.indexOf("modules/ccenter/index.php?form") > 0) && (document.URL.indexOf("modules/ccenter/index.php?form") > 0))) {
				page--;
				history.go(page);
				return;
			}
		}
		document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
";
		return;
	}

	function scroll_up() {
		myScroll.scrollTo(0, -300, 400, true);
	}
	function scroll_down() {
		myScroll.scrollTo(0, 300, 400, true);
	}

	function scroll_iine() {
		var targetOffset = $('#iine').offset().top;
		$(this).blur();
		$('html,body').animate({ scrollTop:targetOffset }, 'slow');
	}
	function scroll_wordofmouth() {
		var targetOffset = $('#contents_submit').offset().top;
		$(this).blur();
		$('html,body').animate({ scrollTop:targetOffset }, 'slow');

	}
	function contact_to() {
		var bool =
	<
		{
			if $contact_button_flg}
		>
			true < {else} > false < {
			/if}>;
			if (bool) {
				if (document.URL.indexOf("<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/bulletin/") != -1) {
					location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/ccenter/index.php?form=" + document.getElementsByName("formid")[0].value;
				}
			} else {
				alert("このメッセージに対して、お問合せはできません。");
				return;
			}
		}

		var linkTags = document.getElementsByTagName('a');
		var checkExLink = function () {
			try {
				return confirm('外部サイト' + this.href + 'へ移動します。よろしいですか？');
			} catch (e) {
			}
		};
		if (linkTags.length > 0
				&& document.URL.indexOf("<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/branch_information/") < 0
				&& document.URL.indexOf("<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/ob_committee/") < 0) {
			for (var i in linkTags) {
				try {
					if (linkTags[i].href != '' && linkTags[i].href.indexOf('http') == 0 && linkTags[i].href.indexOf('<?php echo $this->_tpl_vars['xoops_url']; ?>
') == -1 && linkTags[i].onclick == null) {
						linkTags[i].onclick = checkExLink;
					}
				} catch (e) {
				}
			}
		}

</script>
<!-- Piwik -->
<script type="text/javascript">
	var pkBaseURL = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/piwik/";
	document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	try {
		var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
		piwikTracker.trackPageView();
		piwikTracker.enableLinkTracking();
	} catch (err) {
	}
</script>
<noscript><p><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/piwik/piwik.php?idsite=1" style="border:0" alt=""/></p></noscript>
<!-- End Piwik Tracking Code -->
<!-- history back script -->
<script type="text/javascript">
	function history_back() {
		var str = document.referrer;

		if (document.URL.indexOf("modules/point/index.php") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
";
			return;
		}
		if (document.URL.indexOf("modules/xoopsmembers") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/message/index.php?action=send&menu=send";
			return;
		}
		if (document.URL.indexOf("modules/bulletin") > 0 && document.URL.indexOf("page=article") > 0 && document.URL.indexOf("storyid=") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/message/";
			return;
		}
		if (document.URL.indexOf("modules/bulletin") > 0 && document.URL.indexOf("op=comments") > 0 && document.URL.indexOf("storytopic") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoopsURL']; ?>
/modules/bulletin/?op=comments";
			return;
		}
		if (str && ( document.URL.indexOf("modules/point/index.php") <= 0 )) {
			page = -1;
			if (((str.indexOf("modules/message/") > 0) && (document.URL.indexOf("modules/message/") <= 0)) ||
					((str.indexOf("modules/ccenter/index.php?form") > 0) && (document.URL.indexOf("modules/ccenter/index.php?form") > 0))) {
				page--;
				history.go(page);
				return;
			}
		}
		document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
";
		return;
	}

	function scroll_up() {
		myScroll.scrollTo(0, -300, 400, true);
	}
	function scroll_down() {
		myScroll.scrollTo(0, 300, 400, true);
	}

	function scroll_iine() {
		var targetOffset = $('#iine').offset().top;
		$(this).blur();
		$('html,body').animate({ scrollTop:targetOffset }, 'slow');
	}
	function scroll_wordofmouth() {
		var targetOffset = $('#contents_submit').offset().top;
		$(this).blur();
		$('html,body').animate({ scrollTop:targetOffset }, 'slow');

	}
	function contact_to() {
		var bool =
	<
		{
			if $contact_button_flg}
		>
			true < {else} > false < {
			/if}>;
			if (bool) {
				if (document.URL.indexOf("<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/bulletin/") != -1) {
					location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/ccenter/index.php?form=" + document.getElementsByName("formid")[0].value;
				}
			} else {
				alert("このメッセージに対して、お問合せはできません。");
				return;
			}
		}

		var linkTags = document.getElementsByTagName('a');
		var checkExLink = function () {
			try {
				return confirm('外部サイト' + this.href + 'へ移動します。よろしいですか？');
			} catch (e) {
			}
		};
		if (linkTags.length > 0
				&& document.URL.indexOf("<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/branch_information/") < 0
				&& document.URL.indexOf("<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/ob_committee/") < 0) {
			for (var i in linkTags) {
				try {
					if (linkTags[i].href != '' && linkTags[i].href.indexOf('http') == 0 && linkTags[i].href.indexOf('<?php echo $this->_tpl_vars['xoops_url']; ?>
') == -1 && linkTags[i].onclick == null) {
						linkTags[i].onclick = checkExLink;
					}
				} catch (e) {
				}
			}
		}

</script>
<!-- Piwik -->
<script type="text/javascript">
	var pkBaseURL = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/piwik/";
	document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	try {
		var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
		piwikTracker.trackPageView();
		piwikTracker.enableLinkTracking();
	} catch (err) {
	}
</script>
<noscript><p><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/piwik/piwik.php?idsite=1" style="border:0" alt=""/></p></noscript>
<!-- End Piwik Tracking Code -->
<!-- history back script -->
<script type="text/javascript">
	function history_back() {
		var str = document.referrer;

		if (document.URL.indexOf("modules/point/index.php") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
";
			return;
		}
		if (document.URL.indexOf("modules/xoopsmembers") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/message/index.php?action=send&menu=send";
			return;
		}
		if (document.URL.indexOf("modules/bulletin") > 0 && document.URL.indexOf("page=article") > 0 && document.URL.indexOf("storyid=") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/message/";
			return;
		}
		if (document.URL.indexOf("modules/bulletin") > 0 && document.URL.indexOf("op=comments") > 0 && document.URL.indexOf("storytopic") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoopsURL']; ?>
/modules/bulletin/?op=comments";
			return;
		}
		if (str && ( document.URL.indexOf("modules/point/index.php") <= 0 )) {
			page = -1;
			if (((str.indexOf("modules/message/") > 0) && (document.URL.indexOf("modules/message/") <= 0)) ||
					((str.indexOf("modules/ccenter/index.php?form") > 0) && (document.URL.indexOf("modules/ccenter/index.php?form") > 0))) {
				page--;
				history.go(page);
				return;
			}
		}
		document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
";
		return;
	}

	function scroll_up() {
		myScroll.scrollTo(0, -300, 400, true);
	}
	function scroll_down() {
		myScroll.scrollTo(0, 300, 400, true);
	}

	function scroll_iine() {
		var targetOffset = $('#iine').offset().top;
		$(this).blur();
		$('html,body').animate({ scrollTop:targetOffset }, 'slow');
	}
	function scroll_wordofmouth() {
		var targetOffset = $('#contents_submit').offset().top;
		$(this).blur();
		$('html,body').animate({ scrollTop:targetOffset }, 'slow');

	}
	function contact_to() {
		var bool =
	<
		{
			if $contact_button_flg}
		>
			true < {else} > false < {
			/if}>;
			if (bool) {
				if (document.URL.indexOf("<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/bulletin/") != -1) {
					location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/ccenter/index.php?form=" + document.getElementsByName("formid")[0].value;
				}
			} else {
				alert("このメッセージに対して、お問合せはできません。");
				return;
			}
		}

		var linkTags = document.getElementsByTagName('a');
		var checkExLink = function () {
			try {
				return confirm('外部サイト' + this.href + 'へ移動します。よろしいですか？');
			} catch (e) {
			}
		};
		if (linkTags.length > 0
				&& document.URL.indexOf("<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/branch_information/") < 0
				&& document.URL.indexOf("<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/ob_committee/") < 0) {
			for (var i in linkTags) {
				try {
					if (linkTags[i].href != '' && linkTags[i].href.indexOf('http') == 0 && linkTags[i].href.indexOf('<?php echo $this->_tpl_vars['xoops_url']; ?>
') == -1 && linkTags[i].onclick == null) {
						linkTags[i].onclick = checkExLink;
					}
				} catch (e) {
				}
			}
		}

</script>
<!-- Piwik -->
<script type="text/javascript">
	var pkBaseURL = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/piwik/";
	document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	try {
		var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
		piwikTracker.trackPageView();
		piwikTracker.enableLinkTracking();
	} catch (err) {
	}
</script>
<noscript><p><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/piwik/piwik.php?idsite=1" style="border:0" alt=""/></p></noscript>
<!-- End Piwik Tracking Code -->
<!-- history back script -->
<script type="text/javascript">
	function history_back() {
		var str = document.referrer;

		if (document.URL.indexOf("modules/point/index.php") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
";
			return;
		}
		if (document.URL.indexOf("modules/xoopsmembers") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/message/index.php?action=send&menu=send";
			return;
		}
		if (document.URL.indexOf("modules/bulletin") > 0 && document.URL.indexOf("page=article") > 0 && document.URL.indexOf("storyid=") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/message/";
			return;
		}
		if (document.URL.indexOf("modules/bulletin") > 0 && document.URL.indexOf("op=comments") > 0 && document.URL.indexOf("storytopic") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoopsURL']; ?>
/modules/bulletin/?op=comments";
			return;
		}
		if (str && ( document.URL.indexOf("modules/point/index.php") <= 0 )) {
			page = -1;
			if (((str.indexOf("modules/message/") > 0) && (document.URL.indexOf("modules/message/") <= 0)) ||
					((str.indexOf("modules/ccenter/index.php?form") > 0) && (document.URL.indexOf("modules/ccenter/index.php?form") > 0))) {
				page--;
				history.go(page);
				return;
			}
		}
		document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
";
		return;
	}

	function scroll_up() {
		myScroll.scrollTo(0, -300, 400, true);
	}
	function scroll_down() {
		myScroll.scrollTo(0, 300, 400, true);
	}

	function scroll_iine() {
		var targetOffset = $('#iine').offset().top;
		$(this).blur();
		$('html,body').animate({ scrollTop:targetOffset }, 'slow');
	}
	function scroll_wordofmouth() {
		var targetOffset = $('#contents_submit').offset().top;
		$(this).blur();
		$('html,body').animate({ scrollTop:targetOffset }, 'slow');

	}
	function contact_to() {
		var bool =
	<
		{
			if $contact_button_flg}
		>
			true < {else} > false < {
			/if}>;
			if (bool) {
				if (document.URL.indexOf("<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/bulletin/") != -1) {
					location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/ccenter/index.php?form=" + document.getElementsByName("formid")[0].value;
				}
			} else {
				alert("このメッセージに対して、お問合せはできません。");
				return;
			}
		}

		var linkTags = document.getElementsByTagName('a');
		var checkExLink = function () {
			try {
				return confirm('外部サイト' + this.href + 'へ移動します。よろしいですか？');
			} catch (e) {
			}
		};
		if (linkTags.length > 0
				&& document.URL.indexOf("<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/branch_information/") < 0
				&& document.URL.indexOf("<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/ob_committee/") < 0) {
			for (var i in linkTags) {
				try {
					if (linkTags[i].href != '' && linkTags[i].href.indexOf('http') == 0 && linkTags[i].href.indexOf('<?php echo $this->_tpl_vars['xoops_url']; ?>
') == -1 && linkTags[i].onclick == null) {
						linkTags[i].onclick = checkExLink;
					}
				} catch (e) {
				}
			}
		}

</script>
<!-- Piwik -->
<script type="text/javascript">
	var pkBaseURL = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/piwik/";
	document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	try {
		var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
		piwikTracker.trackPageView();
		piwikTracker.enableLinkTracking();
	} catch (err) {
	}
</script>
<noscript><p><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/piwik/piwik.php?idsite=1" style="border:0" alt=""/></p></noscript>
<!-- End Piwik Tracking Code -->
<!-- history back script -->
<script type="text/javascript">
	function history_back() {
		var str = document.referrer;

		if (document.URL.indexOf("modules/point/index.php") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
";
			return;
		}
		if (document.URL.indexOf("modules/xoopsmembers") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/message/index.php?action=send&menu=send";
			return;
		}
		if (document.URL.indexOf("modules/bulletin") > 0 && document.URL.indexOf("page=article") > 0 && document.URL.indexOf("storyid=") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/message/";
			return;
		}
		if (document.URL.indexOf("modules/bulletin") > 0 && document.URL.indexOf("op=comments") > 0 && document.URL.indexOf("storytopic") > 0) {
			document.location.href = "<?php echo $this->_tpl_vars['xoopsURL']; ?>
/modules/bulletin/?op=comments";
			return;
		}
		if (str && ( document.URL.indexOf("modules/point/index.php") <= 0 )) {
			page = -1;
			if (((str.indexOf("modules/message/") > 0) && (document.URL.indexOf("modules/message/") <= 0)) ||
					((str.indexOf("modules/ccenter/index.php?form") > 0) && (document.URL.indexOf("modules/ccenter/index.php?form") > 0))) {
				page--;
				history.go(page);
				return;
			}
		}
		document.location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
";
		return;
	}

	function scroll_up() {
		myScroll.scrollTo(0, -300, 400, true);
	}
	function scroll_down() {
		myScroll.scrollTo(0, 300, 400, true);
	}

	function scroll_iine() {
		var targetOffset = $('#iine').offset().top;
		$(this).blur();
		$('html,body').animate({ scrollTop:targetOffset }, 'slow');
	}
	function scroll_wordofmouth() {
		var targetOffset = $('#contents_submit').offset().top;
		$(this).blur();
		$('html,body').animate({ scrollTop:targetOffset }, 'slow');

	}
	function contact_to() {
		var bool =
	<
		{
			if $contact_button_flg}
		>
			true < {else} > false < {
			/if}>;
			if (bool) {
				if (document.URL.indexOf("<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/bulletin/") != -1) {
					location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/ccenter/index.php?form=" + document.getElementsByName("formid")[0].value;
				}
			} else {
				alert("このメッセージに対して、お問合せはできません。");
				return;
			}
		}

		var linkTags = document.getElementsByTagName('a');
		var checkExLink = function () {
			try {
				return confirm('外部サイト' + this.href + 'へ移動します。よろしいですか？');
			} catch (e) {
			}
		};
		if (linkTags.length > 0
				&& document.URL.indexOf("<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/branch_information/") < 0
				&& document.URL.indexOf("<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/ob_committee/") < 0) {
			for (var i in linkTags) {
				try {
					if (linkTags[i].href != '' && linkTags[i].href.indexOf('http') == 0 && linkTags[i].href.indexOf('<?php echo $this->_tpl_vars['xoops_url']; ?>
') == -1 && linkTags[i].onclick == null) {
						linkTags[i].onclick = checkExLink;
					}
				} catch (e) {
				}
			}
		}

</script>
<!-- Piwik -->
<script type="text/javascript">
	var pkBaseURL = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/piwik/";
	document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	try {
		var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
		piwikTracker.trackPageView();
		piwikTracker.enableLinkTracking();
	} catch (err) {
	}
</script>
<noscript><p><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/piwik/piwik.php?idsite=1" style="border:0" alt=""/></p></noscript>
<!-- End Piwik Tracking Code -->

</body>
</html>