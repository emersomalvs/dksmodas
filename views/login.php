
<?php if(!empty($error)): ?>
      <div class="callout callout-danger">
        <p><?php echo $error; ?></p>
      </div>
    <?php endif; ?>
<form action="<?php echo BASE_URL; ?>login/index_action" method="POST">
	<input type="email" name="email" placeholder="E-mail" /><br/>
	<input type="password" name="password" placeholder="Senha" /><br/>
	<input type="submit" value="Entrar"/><br/>

</form>