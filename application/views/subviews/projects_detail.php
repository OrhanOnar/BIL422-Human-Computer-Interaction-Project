
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
                                                <h2 class="user-nicename"><?php echo $pro[0]['name']; ?></h2>
                                                <div id="item-meta">
                                                    <div id="item-buttons"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="item-body">
                                            
                                            <div class="profile" style="text-align: center;">
                                                <div class="bp-widget base">
                                                    <h4>Sahibi</h4>
                                                    <a href="http://localhost/etugether/index.php/Profile/profile_detail/<?php echo $owner['admin_id']; ?>"><?php echo $owner['admin_name']; ?></a>
                                                </div>
                                                <div class="bp-widget base">
                                                    <h4>Tarihi</h4>
                                                    <?php echo $pro[0]['date']; ?>
                                                </div>
                                                <div class="bp-widget single-fields">
                                                    <h4>Açıklama</h4>
                                                    <?php echo $pro[0]['description']; ?>
                                                </div>
                                                <div class="bp-widget single-fields">
                                                    <h4>Açık/Kapalı (0/1)</h4>
                                                    <?php echo $pro[0]['closed']; ?>
                                                </div>
                                                <div class="bp-widget multi-fields">
                                                    <h4>Katılanlar</h4>
                                                    <?php foreach ($atts as $key) { ?>
                                                    <br><a href="http://localhost/etugether/index.php/Profile/profile_detail/<?php echo $key['admin_id']; ?>"><?php echo $key['admin_name'] ?></a></br>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
      