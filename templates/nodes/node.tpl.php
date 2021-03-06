<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php endif; ?>

  <?php if ($user_picture || $display_submitted || !$page): ?>
    <?php if (!$page): ?>
      <header>
  	<?php endif; ?>
      <div class="by-line">
	      <?php print $user_picture; ?>
	      <?php print render($title_prefix); ?>
	      <?php if (!$page): ?>
	        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
	      <?php endif; ?>
	      <?php print render($title_suffix); ?>
	  
	      <?php if ($display_submitted): ?>
	        <div class="submitted"><?php print $submitted; ?></div>
	      <?php endif; ?>
      </div>
    <?php if (!$page): ?>
      </header>
  	<?php endif; ?>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // Hide comments, tags, and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_tags']);
      print render($content);
    ?>
  </div>

  <?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
    <div class="node-links">
      <?php print render($content['field_tags']); ?>
      <?php print render($content['links']); ?>
    </div>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

<?php if (!$page): ?>
  </article>
<?php endif; ?>
