<div class="content_wrapper clearfix" style="margin-top: 50px;">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section the_content no_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper">
                                    <div id="buddypress">
                                        <div id="item-header" role="complementary">
                                            <div id="item-header-content">
                                                <h2 class="user-nicename">Projeler</h2>
                                            </div>
                                        </div>
                                        <div id="item-body" style="margin-top: 50px;">
                                            <div class="activity">
                                                <ul id="activity-stream" class="activity-list item-list">
                                                    <?php if(empty($pros)){ ?>
                                                    <h1 style="margin-top: 50px;"><i>Listelenecek proje bulunamamıştır</i></h1>    
                                                    <?php } else{ ?>
                                                    <?php foreach ($pros as $pro) { ?>
                                                    <li class="activity activity_update activity-item" id="activity-33">
                                                        <div class="activity-content">
                                                            <div class="activity-header">
                                                                <h1>Adı: <a href="http://localhost/etugether/index.php/Profile/project_detail/<?php echo $pro['project_id']; ?>"><?php echo $pro['name']; ?></a></h1>
                                                            </div>
                                                            <div class="activity-meta">
                                                                <h1>Sahibi: <a href="http://localhost/etugether/index.php/Profile/profile_detail/<?php echo $pro['user']['admin_id']; ?>"><?php echo $pro['user']['admin_name']; ?></a></h1>
                                                            </div>
                                                            <div class="activity-meta">
                                                                <h1><i>Tarihi: <?php echo $pro['date']; ?></i></h1>
                                                            </div>
                                                            <div class="activity-meta">
                                                                <i style="font-size: 20px;">Açıklama: </i> <?php echo $pro['description']; ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php } ?>
                                                <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>