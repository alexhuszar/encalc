<div>
    <h4>Categories and prices by provider</h4>
    <?php
      foreach ($data as $key => $data_by_provider) { 
    ?>
        <div>
            <b><?php echo $key ?></b>
        </div>
        <hr>
        <?php foreach ($data_by_provider as $key2 => $data_by_provider_line) {
            echo "<pre>";
            print_r($data_by_provider_line);
            echo "</pre>";
        }
        echo "<hr>";
      }
    ?>
</div>
