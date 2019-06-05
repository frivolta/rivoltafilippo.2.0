<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateCasehistory extends Controller
{
  public function slider_fields()
    {
        return (object) array (
            'slider_title' => get_field('slider_title', false, false),
            'slider_text' => get_field('slider_text',false, false),
            'slider_hide_social' => get_field('slider_hide_social'),
            'slider_invert_color' => get_field('slider_invert_color'),
        );
    }
    
    public function intro_section ()
    {
        $intro = (object) array (
            'intro_text_subtitle' => get_field('intro_text_subtitle'),
            'intro_text_title' => get_field('intro_text_title', false, false),
            'intro_text_text' => get_field('intro_text_text', false, false),
            'intro_link_text' => get_field('intro_link_text'),
            'intro_link_link' => get_field('intro_link_link'),
            'intro_first_icon' => get_field('first_icon'),
            'intro_second_icon' => get_field('second_icon'),
            'intro_third_icon' => get_field('third_icon'),
            'intro_fourth_icon' => get_field('fourth_icon'),
            'intro_first_title' => get_field('first_title'),
            'intro_second_title' => get_field('second_title'),
            'intro_third_title' => get_field('third_title'),
            'intro_fourth_title' => get_field('fourth_title'),
            'intro_first_text' => get_field('first_text', false, false),
            'intro_second_text' => get_field('second_text', false, false),
            'intro_third_text' => get_field('third_text', false, false),
            'intro_fourth_text' => get_field('fourth_text', false, false),
            'intro_first_link' => get_field('first_link'),
            'intro_second_link' => get_field('second_link'),
            'intro_third_link' => get_field('third_link'),
            'intro_fourth_link' => get_field('fourth_link'),
            'intro_invert_colors' => get_field('intro_invert_colors'),
        );
        
        return $intro;
    }

    public function timeline_section ()
    {
        $timeline = [];

        $timeline = (object) array (
            'timeline_title' => get_field('timeline_title'),
            'timeline_subtitle' => get_field('timeline_subtitle'),
        );

        return $timeline;
    }

    public function about_section () 
    {
        return (object) array (
            'about_subtitle' => get_field('about_subtitle', false, false),
            'about_title' => get_field('about_title', false, false),
            'about_first_column' => get_field('about_first_column', false, false),
            'about_second_column' => get_field('about_second_column', false, false),
            'about_call_to_action_text' => get_field('call_to_action_text', false, false),
            'about_call_to_action_link' => get_field('call_to_action_link', false, false),
            'about_invert_color' => get_field('about_invert_color', false, false),
        );
    } 


    public function get_timeline_repeater_fields ()
    {
        $timeline_repeater = [];
        if (have_rows('timeline_items'))
        {
            while (have_rows('timeline_items')) : the_row();
                $timeline_repeater[] = (object) [
                    "timeline_repeater_title" => get_sub_field('timeline_item_title'),
                    "timeline_repeater_active" => get_sub_field('timeline_item_active'),
                ];
            endwhile;
        }
        return $timeline_repeater;
    }

    public function get_technologies_repeater_fields ()
    {
        $technologies_repeater = [];
        if (have_rows('technology_repeater_fields'))
        {
            while (have_rows('technology_repeater_fields')) : the_row();
                $technologies_repeater[] = (object) [
                    "technology_item_name" => get_sub_field('technology_item_name'),
                ];
            endwhile;
        }
        return $technologies_repeater;
    }
}
