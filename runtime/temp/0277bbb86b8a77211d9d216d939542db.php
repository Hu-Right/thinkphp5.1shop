<?php /*a:2:{s:80:"D:\phpStudy\PHPTutorial\WWW\xcx\application\user\view\setting\science\index.html";i:1541644844;s:65:"D:\phpStudy\PHPTutorial\WWW\xcx\application\user\view\layout.html";i:1543209671;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title><?php echo htmlentities($setting['store']['values']['name']); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href="/assets/user/i/favicon.ico"/>
    <meta name="apple-mobile-web-app-title" content="<?php echo htmlentities($setting['store']['values']['name']); ?>"/>
    <link rel="stylesheet" href="/assets/layer/theme/default/layer.css"/>
    <link rel="stylesheet" href="/assets/user/css/app.css"/>
    <link rel="stylesheet" href="//at.alicdn.com/t/font_783249_oo2lzo85b4.css">
    <script src="/assets/user/js/jquery.min.js"></script>
    <script src="//at.alicdn.com/t/font_783249_e5yrsf08rap.js"></script>
    <script>
        BASE_URL = '<?php echo htmlentities($base_url); ?>';
        STORE_URL = '/index.php?s=/user';
		
    </script>
</head>

<body data-type="">
<div class="layer-g tpl-g">
    <!-- 头部 -->
    <header class="tpl-header">
        <!-- 右侧内容 -->
        <div class="tpl-header-fluid">
            <!-- 侧边切换 -->
            <div class="layer-fl tpl-header-button switch-button">
                <i class="iconfont icon-menufold"></i>
            </div>
            <!-- 刷新页面 -->
            <div class="layer-fl tpl-header-button refresh-button">
                <i class="iconfont icon-refresh"></i>
            </div>
         
			
            <!-- 其它功能-->
            <div class="layer-fr tpl-header-navbar">
                <ul>
                    <!-- 欢迎语 -->
                    <li class="layer-text-sm tpl-header-navbar-welcome">
                        <a href="<?php echo url("","",true,false);?>">欢迎你，<span><?php echo htmlentities($store['user']['user_name']); ?></span>
                        </a>
                    </li>
                    <!-- 退出 -->
                    <li class="layer-text-sm">
                        <a href="<?php echo url('user/login/logout'); ?>">
                            <i class="iconfont icon-tuichu"></i> 退出
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- 侧边导航栏 -->
    <div class="left-sidebar dis-flex">
        <!-- 一级菜单 <?php echo htmlentities($setting['store']['values']['name']); ?>-->
        <ul class="sidebar-nav">
            <li class="sidebar-nav-heading"><img src="/assets/user/img/logo.png" width="60" /></li>
           
		  <?php foreach($menus as $key=>$item): ?> 
                <li class="sidebar-nav-link">
                    <a href="<?= isset($item['index']) ? url($item['index']) : 'javascript:void(0);' ?>"
                       class="<?php echo !empty($item['active']) ? 'active'  :  ''; ?>">
                        
                            <i class="iconfont sidebar-nav-link-logo <?php echo htmlentities($item['icon']); ?>"></i>
                     
                        <?php echo htmlentities($item['name']); ?>
                    </a>
                </li>
			<?php endforeach; ?>
        </ul>
        <!-- 子级菜单-->
       <?php $second = isset($menus[$group]['submenu']) ? $menus[$group]['submenu'] : []; if(!empty($second)): ?>
            <ul class="left-sidebar-second">
                <li class="sidebar-second-title"><?php echo htmlentities($menus[$group]['name']); ?></li>
                <li class="sidebar-second-item">
                   
					<?php if(is_array($second) || $second instanceof \think\Collection || $second instanceof \think\Paginator): $i = 0; $__LIST__ = $second;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if(!isset($item['submenu'])): ?>
                            <!-- 二级菜单-->
                            <a href="<?php echo url($item['index']); ?>" class="<?php echo !empty($item['active']) ? 'active'  :  ''; ?>">
                                <?php echo htmlentities($item['name']); ?>
                            </a>
                        <?php else: ?>
                            <!-- 三级菜单-->
                            <div class="sidebar-third-item">
                                <a href="javascript:void(0);"
                                   class="sidebar-nav-sub-title <?php echo !empty($item['active']) ? 'active'  :  ''; ?>">
                                    <i class="iconfont icon-caret"></i>
                                    <?php echo htmlentities($item['name']); ?>
                                </a>
                                <ul class="sidebar-third-nav-sub">
									<?php if(is_array($item['submenu']) || $item['submenu'] instanceof \think\Collection || $item['submenu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item['submenu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$third): $mod = ($i % 2 );++$i;?>
                                        <li>
                                            <a class="<?php echo !empty($third['active']) ? 'active'  :  ''; ?>"
                                               href="<?php echo url($third['index']); ?>">
                                                <?php echo htmlentities($third['name']); ?></a>
                                        </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </li>
            </ul>
        <?php endif; ?>
    </div>

    <!-- 内容区域 start -->
    <div class="tpl-content-wrapper <?php if($second == null): ?>no-sidebar-second<?php endif; ?>">
        <div class="row-content layer-cf">
    <div class="row">
        <div class="layer-u-sm-12 layer-u-md-12 layer-u-lg-12">
            <div class="widget layer-cf">
                <form id="my-form" class="layer-form tpl-form-line-form" enctype="multipart/form-data" method="post">
                    <div class="widget-body">
                        <fieldset>
                            <div class="widget-head layer-cf">
                                <div class="widget-title layer-fl">服务器信息</div>
                            </div>
                            <div class="layer-form-group">
                                <div class="layer-scrollable-horizontal">
                                    <table class="layer-table layer-table-centered">
                                        <tbody>
                                        <tr>
                                            <th width="30%">参数</th>
                                            <th>值</th>
                                            <th></th>
                                        </tr>
                                        <?php if (isset($server)): foreach ($server as $item): ?>
                                            <tr class="<?= isset($statusClass) ? $statusClass[$item['status']] : '' ?>">
                                                <td><?= $item['name'] ?></td>
                                                <td><?= $item['value'] ?> </td>
                                                <td><?= $item['status'] !== 'normal' ? $item['remark'] : '' ?> </td>
                                            </tr>
                                        <?php endforeach; endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="widget-head layer-cf">
                                <div class="widget-title layer-fl">PHP环境要求</div>
                            </div>
                            <div class="layer-form-group">
                                <div class="layer-scrollable-horizontal">
                                    <table class="layer-table layer-table-centered">
                                        <tbody>
                                        <tr>
                                            <th width="30%">选项</th>
                                            <th>要求</th>
                                            <th>状态</th>
                                            <th></th>
                                        </tr>
                                        <?php if (isset($phpinfo)): foreach ($phpinfo as $item): ?>
                                            <tr class="<?= isset($statusClass) ? $statusClass[$item['status']] : '' ?>">
                                                <td><?= $item['name'] ?></td>
                                                <td><?= $item['value'] ?> </td>
                                                <td>
                                                    <?php if ($item['status'] !== 'danger'): ?>
                                                        <i class="layer-icon-check x-color-green"></i>
                                                    <?php else: ?>
                                                        <i class="layer-icon-times x-color-red"></i>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?= $item['status'] !== 'normal' ? $item['remark'] : '' ?> </td>
                                            </tr>
                                        <?php endforeach; endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="widget-head layer-cf">
                                <div class="widget-title layer-fl">目录权限监测</div>
                            </div>
                            <div class="layer-form-group">
                                <div class="layer-scrollable-horizontal">
                                    <table class="layer-table layer-table-centered">
                                        <tbody>
                                        <tr>
                                            <th width="30%">名称</th>
                                            <th class="layer-text-left">路径</th>
                                            <th>状态</th>
                                            <th></th>
                                        </tr>
                                        <?php if (isset($writeable)): foreach ($writeable as $item): ?>
                                            <tr class="<?= isset($statusClass) ? $statusClass[$item['status']] : '' ?>">
                                                <td><?= $item['name'] ?></td>
                                                <td class="layer-text-left"><?= $item['value'] ?> </td>
                                                <td>
                                                    <?php if ($item['status'] !== 'danger'): ?>
                                                        <i class="layer-icon-check x-color-green"></i>
                                                    <?php else: ?>
                                                        <i class="layer-icon-times x-color-red"></i>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?= $item['status'] !== 'normal' ? $item['remark'] : '' ?> </td>
                                            </tr>
                                        <?php endforeach; endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {

        /**
         * 表单验证提交
         * @type {*}
         */
        $('#my-form').superForm();

    });
</script>

    </div>
    <!-- 内容区域 end -->

</div>
<script src="/assets/layer/layer.js"></script>
<script src="/assets/user/js/jquery.form.min.js"></script>
<script src="/assets/user/js/webuploader.html5only.js"></script>
<script src="/assets/user/js/art-template.js"></script>
<script src="/assets/user/js/app.js"></script>
<script src="/assets/user/js/file.library.js"></script>
<script src="/assets/user/js/amazeui.min.js"></script>
</body>

</html>
