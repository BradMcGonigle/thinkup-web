<?php /* Smarty version 2.6.26, created on 2013-03-13 14:36:03
         compiled from _statusbar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urlencode', '_statusbar.tpl', 15, false),array('modifier', 'ucwords', '_statusbar.tpl', 21, false),array('modifier', 'count', '_statusbar.tpl', 100, false),array('modifier', 'capitalize', '_statusbar.tpl', 106, false),array('modifier', 'relative_datetime', '_statusbar.tpl', 115, false),)), $this); ?>
<?php if ($this->_tpl_vars['enable_bootstrap']): ?>

    <div class="navbar navbar-static-top">
      <div class="navbar-inner">
        <div class="container">

          <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
" class="brand span3"><span style="color : #00AEEF; font-weight : 800;">Think</span><span style="color : black; font-weight : 200;">Up</span></a>


            <a class="btn btn-navbar pull-right" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>

            <?php if ($this->_tpl_vars['logged_in_user'] && ! $_GET['m'] && ! $_GET['p'] && $this->_tpl_vars['instances']): ?>

                <!--search posts-->
                <form class="navbar-search pull-left dropdown" method="get" action="javascript:searchMe('<?php echo $this->_tpl_vars['site_root_path']; ?>
search.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['instances'][0]->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['instances'][0]->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&c=posts&q=');">

                    <input type="text" id="search-keywords" class="search-query span4 dropdown-toggle" data-toggle="dropdown" <?php if ($_GET['q']): ?>value="<?php echo $_GET['q']; ?>
"<?php else: ?>placeholder="Search"<?php endif; ?> />

                    <ul id="search-refine" class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <?php $_from = $this->_tpl_vars['instances']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['i']):
?>
                        <li class="lead"><a onclick="searchMe('<?php echo $this->_tpl_vars['site_root_path']; ?>
search.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&c=posts&q=');" href="#"><i class="icon-<?php echo $this->_tpl_vars['i']->network; ?>
<?php if ($this->_tpl_vars['i']->network == 'google+'): ?> icon-google-plus<?php endif; ?> icon-muted icon-2x"></i> Find <span class="searchterm"></span> in <?php if ($this->_tpl_vars['i']->network == 'twitter'): ?>@<?php endif; ?><?php echo $this->_tpl_vars['i']->network_username; ?>
's <?php if ($this->_tpl_vars['i']->network == 'twitter'): ?>tweets<?php elseif ($this->_tpl_vars['i']->network == 'foursquare'): ?>Foursquare check-ins<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network)) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
 posts<?php endif; ?></a></li>
                        <?php if ($this->_tpl_vars['i']->network == 'twitter'): ?>
                            <li class="lead"><a onclick="searchMe('<?php echo $this->_tpl_vars['site_root_path']; ?>
search.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=twitter&c=followers&q=');" href="#"><i class="icon-twitter icon-muted icon-2x"></i> Search @<?php echo $this->_tpl_vars['i']->network_username; ?>
's followers' bios for <span class="searchterm"></span></a></li>
                            <li class="lead"><a onclick="searchMe('<?php echo $this->_tpl_vars['site_root_path']; ?>
search.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=twitter&c=followers&q=name:');" href="#"><i class="icon-twitter icon-muted icon-2x"></i> Search @<?php echo $this->_tpl_vars['i']->network_username; ?>
's followers for people named <span class="searchterm"></span></a></li>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                    </ul>

                </form>

            <?php endif; ?>


            <div class="nav-collapse">

      <?php if ($this->_tpl_vars['logged_in_user']): ?>

<ul class="nav pull-right" style="border-left : none;">

    <?php if ($this->_tpl_vars['user_is_admin']): ?><li><script src="<?php echo $this->_tpl_vars['site_root_path']; ?>
install/checkversion.php"></script></li><?php endif; ?>
    <li><a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
crawler/updatenow.php<?php if ($this->_tpl_vars['developer_log']): ?>?log=full<?php endif; ?>" id="refresh-data"><i class="icon-refresh"></i></a></li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">
          <?php echo $this->_tpl_vars['logged_in_user']; ?>
<?php if ($this->_tpl_vars['user_is_admin']): ?> <span class="label label-info">admin</span><?php endif; ?>
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li class="<?php if ($_GET['m'] == 'manage'): ?>active<?php endif; ?>"><a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
account/?m=manage"><i class="icon-cog icon-muted"></i> Settings</a></li>
          <li><a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
session/logout.php"><i class="icon-signout icon-muted"></i> Log Out</a></li>
        </ul>
    </li>
</ul> 

      <?php else: ?>
<ul class="nav pull-right">
    <li><a href="http://thinkup.com/" >Get ThinkUp</a></li>
    <li><a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
session/login.php" ><i class="icon-signin icon-muted"></i> Log In</a></li>
</ul>
      <?php endif; ?>
          </div><!--/.nav-collapse -->


        </div>
      </div>
    </div>

<?php else: ?>

 
<?php echo '
  <script type="text/javascript">
    $(document).ready(function() {
      function changeMe() {
        var _mu = $("select#instance-select").val();
        if (_mu != "null") {
          document.location.href = _mu;
        }
      }
    });
  </script>
'; ?>


<div id="status-bar" class="clearfix"> 

  <div class="status-bar-left">
    <?php if ($this->_tpl_vars['instance']): ?>
      <!-- the user has selected a particular one of their instances -->
      <?php echo '
        <script type="text/javascript">
          function changeMe() {
            var _mu = $("select#instance-select").val();
            if (_mu != "null") {
              document.location.href = _mu;
            }
          }
        </script>
      '; ?>

      
      <?php if (count($this->_tpl_vars['instances']) > 1): ?>
      <span id="instance-selector">
        <select id="instance-select" onchange="changeMe();">
          <option value="">-- Switch service user --</option>
          <?php $_from = $this->_tpl_vars['instances']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['i']):
?>
            <?php if ($this->_tpl_vars['i']->network_user_id != $this->_tpl_vars['instance']->network_user_id): ?>
              <option value="<?php echo $this->_tpl_vars['site_root_path']; ?>
dashboard.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><?php echo $this->_tpl_vars['i']->network_username; ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network)) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</option>
            <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?>
        </select>
      </span>
    <?php endif; ?>
    <?php else: ?>
      <!-- the user has not selected an instance -->
      <?php if ($this->_tpl_vars['crawler_last_run']): ?>
      Last update: <?php echo ((is_array($_tmp=$this->_tpl_vars['crawler_last_run'])) ? $this->_run_mod_handler('relative_datetime', true, $_tmp) : smarty_modifier_relative_datetime($_tmp)); ?>
 ago
      <?php endif; ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['instance']): ?> <?php if ($this->_tpl_vars['logged_in_user']): ?> <?php if (count($this->_tpl_vars['instances']) > 1): ?> <?php endif; ?> <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
crawler/updatenow.php<?php if ($this->_tpl_vars['developer_log']): ?>?log=full<?php endif; ?>" class="linkbutton">Capture Data</a><?php endif; ?><?php endif; ?>
  </div> <!-- .status-bar-left -->
  
  <div class="status-bar-right text-right">
    <ul> 
        <li><a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
" class="linkbutton" style="background: #31C22D;color:white;">Insights (New!)</a></li>
      <?php if ($this->_tpl_vars['logged_in_user']): ?>
        <li>Logged in as<?php if ($this->_tpl_vars['user_is_admin']): ?> admin<?php endif; ?>: <?php echo $this->_tpl_vars['logged_in_user']; ?>
 <?php if ($this->_tpl_vars['user_is_admin']): ?><script src="<?php echo $this->_tpl_vars['site_root_path']; ?>
install/checkversion.php"></script><?php endif; ?><a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
account/?m=manage" class="linkbutton">Settings</a> <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
session/logout.php" class="linkbutton">Log Out</a></li>
        <script>var logged_in_user = '<?php echo $this->_tpl_vars['logged_in_user']; ?>
';</script>
      <?php else: ?>
      
        <li><a href="http://thinkup.com/" class="linkbutton">Get ThinkUp</a> <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
session/login.php" class="linkbutton"    >Log In</a></li>
      <?php endif; ?>
    </ul>
  </div> <!-- .status-bar-right -->

  
</div> <!-- #status-bar -->

<div id="page-bkgd">

<div class="container clearfix">
  
  <div id="app-title"><a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
">
    <h1><span id="headerthink">Think</span><span id="headerup">Up</span></h1>
  </a></div> <!-- end #app-title -->
  
</div> <!-- end .container -->

<?php endif; ?>