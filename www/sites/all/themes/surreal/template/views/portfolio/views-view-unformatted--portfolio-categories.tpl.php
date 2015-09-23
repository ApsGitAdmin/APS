  <div class="gallerySelector">
    <ul class="gallerySelectorList">
      <li class="current"><a class="uppercase minimo-light" data-filter="article.portfolio" href="#"><?php print t("All");?></a></li>
<?php foreach ($rows as $id => $row): ?>
    <?php print $row; ?>
<?php endforeach; ?>
    </ul>
  </div>
  
  
  
