<?php

    if ($facebook = \Idno\Core\site()->plugins()->get('Facebook')) {
        $login_url = $facebook->getAuthURL();
    }

?>
<div class="social">
    <a href="<?=$login_url?>" class="connect fb <?php

        if (!empty(\Idno\Core\site()->session()->currentUser()->facebook)) { echo 'connected'; }

    ?>" >Facebook<?php if (!empty(\Idno\Core\site()->session()->currentUser()->facebook)) { echo ' - connected!'; } ?></a><br>
    <label class="control-label">Share pictures, updates, events, and posts to Facebook.</label>
</div>