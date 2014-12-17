<html>
<body>
<table>
    <tr><th>実数値</th><th>ターゲット名</th></tr>
    <?php foreach ($response->getTargetList() as $row):?>
    <tr><td><?php $this->assign($row->getSpeed())?></td><td><?php $this->assign($row->getName())?></td></tr>
    <?php endforeach;?>
</table>
</body>
</html>
