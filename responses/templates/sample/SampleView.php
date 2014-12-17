<html>
<body>
<table>
    <tr><th>H</th><td><?php $this->assign($response->getPokemon()->getHpValue())?></td></tr>
    <tr><th>A</th><td><?php $this->assign($response->getPokemon()->getAttackValue())?></td></tr>
    <tr><th>B</th><td><?php $this->assign($response->getPokemon()->getDefenceValue())?></td></tr>
    <tr><th>C</th><td><?php $this->assign($response->getPokemon()->getSpecialAttackValue())?></td></tr>
    <tr><th>D</th><td><?php $this->assign($response->getPokemon()->getSpecialDefenceValue())?></td></tr>
    <tr><th>S</th><td><?php $this->assign($response->getPokemon()->getSpeedValue())?></td></tr>
</table>
</body>
</html>
