<?php

$template = <<<END
You are fighting a <b>{{monstername}}</b>.<br />
Monster's HP: {{monsterhp}}<br /><br />
{{message}}
The monster attacks you for (<span style="color: black; font-weight: bold;">{{monsterphysdamage}}</span>|<span style="color: green; font-weight: bold;">{{monstermagicdamage}}</span>|<span style="color: red; font-weight: bold;">{{monsterfiredamage}}</span>|<span style="color: blue; font-weight: bold;">{{monsterlightdamage}}</span>) damage.<br /><br />
Command?
<form action="fight.php" method="post">
<input type="submit" name="fight" value="Fight" /> <br />
{{spells}}<br />
<input type="submit" name="run" value="Run" />
</form>
END;

?>