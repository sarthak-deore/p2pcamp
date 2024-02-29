<?php
/**
 * @var array{align: string} $attributes
 * @var string $shadowRootStylesheet
 */
?>

<div
      class="give-p2p-campaign-list-block align<?php echo $attributes['align']?>"
      data-attributes=" <?php echo esc_attr(json_encode($attributes))?>"
      data-stylesheet= "<?php echo $shadowRootStylesheet?>">
</div>

