<div class="mt-4 footer-body">
    <div class="container mt-4">
<div class="row">
    <div class="col-md-3">
    <?php if(is_active_sidebar('footer1')): ?>
               <?php dynamic_sidebar('footer1'); ?>
            <?php endif; ?>
    </div>
    <div class="col-md-3">
    <?php if(is_active_sidebar('footer2')): ?>
               <?php dynamic_sidebar('footer2'); ?>
            <?php endif; ?>
    </div>
    <div class="col-md-3">
    <?php if(is_active_sidebar('footer2')): ?>
               <?php dynamic_sidebar('footer3'); ?>
            <?php endif; ?>
    </div>
    <div class="col-md-3">
    <?php if(is_active_sidebar('footer4')): ?>
               <?php dynamic_sidebar('footer4'); ?>
            <?php endif; ?>
    </div>
    </div>
</div>
    </div>
<div class="footer-bottom">
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
           <div>&copy; 2021 MORGAN ZINTEC COLLEGE</div>
           <div>SITE DEVELOPED & HOSTED BY ANIXSYS PVT LTD</div>
        </div>
    </div>
</div>
<?php wp_footer(  ) ?>
</body>
</html>