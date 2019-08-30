
        <!-- Main Content -->

            <div class="content_wrapper clearfix" style="margin-top: 50px;">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section the_content no_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper">
                                    <div id="buddypress">
                                        <div id="item-header" role="complementary">
                                            <div id="item-header-content">
                                                <h2 class="user-nicename"><?php echo $user['admin_name']; ?></h2>
                                                <div id="item-meta">
                                                    <div id="item-buttons"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="item-body">
                                            
                                            <div class="profile" style="text-align: center;">
                                                <div class="bp-widget base">
                                                    <h4>İsim Soyisim</h4>
                                                    <?php echo $user['admin_real']; ?>
                                                </div>
                                                <div class="bp-widget single-fields">
                                                    <h4>Mail</h4>
                                                    <?php echo $user['admin_mail']; ?>
                                                </div>
                                                <div class="bp-widget single-fields">
                                                    <h4>Açıklama</h4>
                                                    <?php echo $user['admin_desc']; ?>
                                                </div>
                                                <div class="bp-widget multi-fields">
                                                    <h4>Diller</h4>
                                                    <?php echo $user['admin_pls']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="text-align: center; margin-top: 50px;">
                                            <a href="*">Düzenle</a>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
      