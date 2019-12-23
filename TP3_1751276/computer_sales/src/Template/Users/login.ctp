<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('Connexion') ?>

<div id="login"></div> 
<script>
    var onloadCallback = function() {
        widgetId1 = grecaptcha.render('login', {
            'sitekey' : '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI',
            'theme' : 'light'
        });
    };
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
async defer>
<?= $this->Form->end() ?>