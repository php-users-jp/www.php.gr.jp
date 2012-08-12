<?php
  include_once 'rooturl.php';
  $target = htmlspecialchars($_GET['t']);
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php if (! empty($_GET['d'])) { ?>
  <link rel="stylesheet" href="<?php echo $root_url.'css/debug.css'; ?>" type="text/css" />
<?php } ?>
  <link rel="stylesheet" href="<?php echo $root_url.'css/initialize.css'; ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo $root_url.'css/'.$target.'.css'; ?>" type="text/css" />
</head>
<body>
<?php include $target.'.php'; ?>
</body>