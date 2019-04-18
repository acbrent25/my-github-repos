<?php 

class WP_My_Github_Repos extends WP_Widget{

    // Create Widget
    function __construct(){
        parent::__construct(
            'my_github_repos',
            __('My Github Repos', 'mgr_domain'),
            array('description' => __('A Github Repositiory Widget', 'mgr_domain'))
        );
    }

    // Frontend Display
    public function widget($args, $instance){

    }

    // Backend Form
    public function form($instance){
        // Get title
        if(isset($instance['title'])){
            $title = $instance['title'];
        } else {
            $title = __('Latest Github Repos', 'mgr_domain');
        }

        // Get Username
        if(isset($instance['username'])){
            $username = $instance['username'];
        } else {
            $username = __('acbrent25', 'mgr_domain');
        }

        // Get Count
        if(isset($instance['count'])){
            $count = $instance['count'];
        } else {
            $count = 5;
        }
        ?>
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'mgr_domain'); ?></label>
                <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_html($title) ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('username'); ?>"><?php _e('Username', 'mgr_domain'); ?></label>
                <input type="text" class="widefat" id="<?php echo $this->get_field_id('username'); ?>" name="<?php echo $this->get_field_name('username'); ?>" value="<?php echo esc_html($username) ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Count', 'mgr_domain'); ?></label>
                <input type="text" class="widefat" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" value="<?php echo esc_html($count) ?>">
            </p>
        <?php

    }

    // Update widget values
    public function update($new_instance, $old_instance) {

    }



}