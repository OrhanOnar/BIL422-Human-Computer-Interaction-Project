
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
    
                                        <div class="column one" style="margin-top: 100px;">
                                                <div class="column one-second">
                                                    <div class="fancy_heading fancy_heading_icon">
                                            <h2 class="title" style="font-size: 40px;">Sahip Olduğu Projeler</h2>
                                            <?php if(empty($ownpros)){ ?>
                                            <h1 style="margin-top: 50px;"><i>Listelenecek proje bulunamamıştır</i></h1>
                                            <?php } else{ ?>
                                            <table class="table table-striped">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">#</th>
                                                      <th scope="col">Proje Adı</th>
                                                      <th scope="col">Proje Tarihleri</th>
                                                      <th scope="col">Proje Açık/Kapalı (0/1)</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <?php $count=1; ?>
                                                    <?php foreach ($ownpros as $owns) { ?>
                                                    <tr>
                                                     <th scope="row"><?php echo $count; ?></th>
                                                      <td><a style="text-decorations:none; color:inherit;" href="http://localhost/etugether/index.php/Profile/project_detail/<?php echo $owns['project_id']; ?>"><?php echo $owns['name']; ?></a></td>
                                                      <td><a style="text-decorations:none; color:inherit;" href="http://localhost/etugether/index.php/Profile/project_detail/<?php echo $owns['project_id']; ?>"><?php echo $owns['date']; ?></a></td>
                                                      <td><a style="text-decorations:none; color:inherit;" href="http://localhost/etugether/index.php/Profile/project_detail/<?php echo $owns['project_id']; ?>"><?php echo $owns['closed']; ?></a></td>
                                                    </tr>
                                                    <?php $count++; ?>
                                                    <?php } ?>
                                                  </tbody>
                                                </table>
                                                <?php } ?>
                                        </div>

                                                </div>

                                                <div class="column one-second">
                                                    <div class="fancy_heading fancy_heading_icon">
                                            <h2 class="title" style="font-size: 40px;">Katıldığı Projeler</h2>
                                            <?php if(empty($attpros)){ ?>
                                            <h1 style="margin-top: 50px;"><i>Listelenecek proje bulunamamıştır</i></h1>
                                            <?php } else{ ?>
                                            <table class="table table-striped">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">#</th>
                                                      <th scope="col">Proje Adı</th>
                                                      <th scope="col">Proje Tarihleri</th>
                                                      <th scope="col">Proje Açık/Kapalı (0/1)</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <?php $count=1; ?>
                                                    <?php foreach ($attpros as $att) { ?>
                                                    <tr>
                                                     <th scope="row"><?php echo $count; ?></th>
                                                      <td><a style="text-decorations:none; color:inherit;" href="http://localhost/etugether/index.php/Profile/project_detail/<?php echo $att['project_id']; ?>"><?php echo $att['name']; ?></a></td>
                                                      <td><a style="text-decorations:none; color:inherit;" href="http://localhost/etugether/index.php/Profile/project_detail/<?php echo $att['project_id']; ?>"><?php echo $att['date']; ?></a></td>
                                                      <td><a style="text-decorations:none; color:inherit;" href="http://localhost/etugether/index.php/Profile/project_detail/<?php echo $att['project_id']; ?>"><?php echo $att['closed']; ?></a></td>
                                                    </tr>
                                                    <?php $count++; ?>
                                                    <?php } ?>
                                                  </tbody>
                                                </table>
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
      