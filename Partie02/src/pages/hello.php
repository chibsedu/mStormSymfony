
<?php $name = $request->get('name', 'WorldTemplateING-ob Partie 02') ?>
Hello <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8')?>