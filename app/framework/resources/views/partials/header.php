<h2>Bem vindo
<?php if ($this->session('logged')) { ?>
    <?php echo $this->session('user')->firstName; ?>
<?php } ?>
</h2>
<h3>Bem-vindo novamente!</h3>