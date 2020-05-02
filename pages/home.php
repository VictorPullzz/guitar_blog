<ul class="user-list">
    <?php foreach ($listPeoples as $item) { ?>
        <li class="user-item">
            <div class="user-name"><?php echo $item['name']; ?></div>
            <div class="user-lastname"><?php echo $item['lastname']; ?></div>
            <div class="user-age"><?php echo $item['age']; ?></div>
            <div class="user-sex"><?php echo $item['sex']; ?></div>
        </li>
    <?php } ?>
</ul>



