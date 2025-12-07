<div class="content-wrapper">
    <section class="content">
            <?php
            if (isset($content)) {
                $CI =& get_instance();
                $CI->load->view($content);
            }
        ?>
    </section>
</div>

