<html>
<head>
    <title>S振り計算機</title>
</head>
<body>
<?php if ($response->getPokemon()->getMaxSpeedValue() < $response->getTargetList()[0]->getSpeed()): ?>
<p><?php $this->assign($response->getPokemon()->getName())?>は、速さでは勝負出来ません|
<?php $this->assign($response->getPokemon()->getMaxSpeedValue())?> |
<?php $this->assign($response->getTargetList()[0]->getSpeed())?>
</p>
<?php elseif ($response->getPokemon()->getSpeedValue() >= $response->getTargetList()[count($response->getTargetList()) - 1]->getSpeed()): ?>
<p><?php $this->assign($response->getPokemon()->getName())?>はSに振る必要がありません |
<?php $this->assign($response->getPokemon()->getMaxSpeedValue())?> |
<?php $this->assign($response->getTargetList()[count($response->getTargetList()) -1]->getSpeed())?>
</p>
<?php else:?>
<table>
    <tr><th>実数値</th><th>ターゲット名</th><th><?php $this->assign($response->getPokemon()->getName())?>が抜くためのbasePoint</th></tr>
    <?php foreach ($response->getTargetList() as $row):?>
    <tr>
        <td><?php $this->assign($row->getSpeed())?></td>
        <td><?php $this->assign($row->getName())?></td>
        <td>
            <?php // 同値では抜けない ?>
            <?php if ($response->getPokemon()->getMaxSpeedValue() <= $row->getSpeed()):?>
            -
            <?php else:?>
            <?php $this->assign($response->getPokemon()->calcTargetSpeed($row->getSpeed()))?>
            <?php endif;?>
        </td>
    </tr>
    <?php endforeach;?>
</table>
<?php endif;?>
</body>
</html>
