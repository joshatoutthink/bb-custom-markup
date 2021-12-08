<?php 
  
  $fields = $settings->custom_field; 
  $items = $settings->items;


/* do_action( 'qm/debug', $settings ); */

  $post_id = get_the_id();

  $html = '';
  $loop_markup = '';
  
  
  if(!is_array($fields)) return;

//render the non loop field markup

  foreach($items as $item){
        
    $inner_loop_template= $module->get_loop_template($settings->markup);

    foreach($item as $field => $value){
      if(in_array($field, $fields)){
        $inner_loop_template = $module->replace_with_fields($inner_loop_template, $field, $value);
        /* $markup = $module->replace_with_acf_fields($markup, $post_id); */
      }
    }
    $loop_markup .= $inner_loop_template;
    
  }
  $html = $module->insert_loop($settings->markup, $loop_markup);

/**
 * TEMPLATE
 */
?>
<div class="commander-html">
	<?php echo $html ?>
</div>
<?php
