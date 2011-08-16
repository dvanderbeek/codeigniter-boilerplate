<nav>
    <ul>
        <li class="<?php echo isActive($page_id,"homepage")?>"><a href="<?php echo  base_url()?>homepage">Homepage</a></li>
        <li class="<?php echo isActive($page_id,"example")?>"><a href="<?php echo base_url()?>example">Example</a></li>
        <li class="<?php echo isActive($page_id,"tour")?>"><a href="<?php echo base_url()?>tour">Tour</a></li>
        <li><?php echo anchor('auth/logout', 'Logout')?></li>
    </ul>
</nav>