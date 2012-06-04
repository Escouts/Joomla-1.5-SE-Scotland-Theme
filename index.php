<?php
/**
 * @copyright	Copyright (C) 2005 - 2007 Joomlashack. All rights reserved.
 */
?>
<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );
define( 'YOURBASEPATH', dirname(__FILE__) );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="message" />
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template ?>/css/template_css.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template ?>/css/menu.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/js/md_stylechanger.js"></script>
</head>
<body>
<a href="index.php" title="Increase Text Size" onclick="changeFontSize(2);return false;"></a>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-wrapper">
  <tr>
    <td valign="top"><div id="site-container">
        <div id="container">
          <div id="header">
            <div id="header-functions">
            </div>
            <div class="header-logo">
              <a href="/" title="<?php echo $mosConfig_sitename; ?>"><img style="display:block; margin:auto" src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/images/scouthd1.jpg" alt="The Scout Association" width="780px" height="130px" /></a>

              <h2>&nbsp;</h2>
            </div>          
            <?php if($this->countModules('top')) : ?>
            <div id="navcontainer">
              <div id="navbar">
<!--[if lte IE 7]>
		<script type="text/javascript">
		sfHover = function() {
			var sfEls = document.getElementById("navbar").getElementsByTagName("LI");
			for (var i=0; i<sfEls.length; i++) {
				sfEls[i].onmouseover=function() {
					this.className+=" sfhover";
				}
				sfEls[i].onmouseout=function() {
					this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
				}
			}
		}
		if (window.attachEvent) window.attachEvent("onload", sfHover);
		</script>
<![endif]-->
                <jdoc:include type="modules" name="top" style="xhtml" />
              </div>
            </div>
            <?php endif; ?>
          </div>
          <!-- /header -->
          <div id="content-container" class="clearfix">
            <table width="100%" cellspacing="0" cellpadding="0" style="height:100%;">
              <tr valign="top">
                <?php if($this->countModules('left')) : ?>
                <td id="left_sidebar"><jdoc:include type="modules" name="left" style="xhtml" />                </td>
                <!-- end #left_sidebar -->
                <?php endif; ?>
                <td id="main_content">
                <div id="breadcrumbs">
				<small><?php echo JText::_('You are here: '); ?><jdoc:include type="modules" name="breadcrumb" /></small></div>
            <jdoc:include type="component" />                </td>
                <!-- end #main_content -->
                <?php if($this->countModules('right')) : ?>
                <td id="right_sidebar"><jdoc:include type="modules" name="right" style="xhtml" />                </td>
                <!-- end #right_sidebar -->
                <?php endif; ?>
              </tr>
            </table>
          </div>
        </div>
        <!-- /container -->
      </div>
      <!-- /site-container -->
      <?php if($this->countModules('user1 or user2 or user3')) : ?>
      <div id="lower-content">
        <div class="lower-content-container">
          <table width="100%" cellspacing="0" cellpadding="0" style="height:100%;">
            <tr valign="top">
              <?php if($this->countModules('user1')) : ?>
              <td id="leftcol"><jdoc:include type="modules" name="user1" style="xhtml" />              </td>
              <?php endif; ?>
              <?php if($this->countModules('user2')) : ?>
              <td id="maincol"><jdoc:include type="modules" name="user2" style="xhtml" />              </td>
              <?php endif; ?>
              <?php if($this->countModules('user3')) : ?>
              <td id="rightcol"><jdoc:include type="modules" name="user3" style="xhtml" />              </td>
              <?php endif; ?>
            </tr>
          </table>
        </div>
      </div>
      <?php endif; ?>    </td>
  </tr>
</table>
<div class="footer">
  <jdoc:include type="modules" name="footer" style="raw" />
  <span style="font-size:0.7em">Based on template by <a href="http://www.joomlashack.com/">JoomlaShack</a></span>
</div>
</body>
</html>