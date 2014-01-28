<?php
defined('_JEXEC') or die;
JHtml::_('behavior.framework', true);
$app = JFactory::getApplication();
$home = JFactory::getURI()->toString() == JURI::base();
?>
<?php 
     $itemid = JRequest::getVar('Itemid');
  $menu = &JSite::getMenu();
  $active = $menu->getItem($itemid);
  $pageClass = $menu->getParams($active->id)->get('pageclass_sfx');
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html>
<html>
    <head>
        <jdoc:include type="head" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
    </head>
    <body <?php if (!$home) echo "class=inner"; ?>>
        <div id="wrap">
            <div id="header">
                <h1><a href="<?php echo JURI::base(); ?>">GeekHub</a></h1>
                <div id="position-0">
                    <jdoc:include type="modules" name="position-0" style="xhtml" />
                </div>
                <div class="clear"></div>
                <div id="position-1">
                    <jdoc:include type="modules" name="position-1" style="xhtml" />
                </div>
            </div><!-- header -->
            <div id="content">
                <?php if($this->countModules('position-4')) : ?>
                <div class='sidebar'>
                    <jdoc:include type="modules" name="position-4" style="xhtml" />
                </div>
                <?php endif; ?>
                <div class="<?php if($pageClass) echo $pageClass; else echo "details"; ?>">
                    <jdoc:include type="message" /> 
                    <jdoc:include type="component" style="xhtml" />
                    <div class="clear"></div>
                    <ul class="social_share">
                        <li id="vk">
                           <jdoc:include type="modules" name="position-6" style="xhtml" />
                        </li>
                        <li class="sertificates_list">
                            <jdoc:include type="modules" name="position-7" style="xhtml" />
                        </li>
                        <li>
                            <jdoc:include type="modules" name="position-8" style="xhtml" />
                        </li>
                    </ul>
                </div>
            </div> <!-- content -->
            <ul id="footer">
                <li>
                    <jdoc:include type="modules" name="position-2" style="xhtml" />
                </li>
                <li> <jdoc:include type="modules" name="position-3" style="xhtml" /></li>
            </ul> <!-- footer -->
        </div>
    </body/