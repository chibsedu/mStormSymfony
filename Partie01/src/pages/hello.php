
<?php $name = $request->get('name', 'WorldTemplateING-ob') ?>
Hello <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8')?>