<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{
  public function slider_fields()
    {
        return (object) array (
            'slider_title' => get_field('slider_title', false, false),
            'slider_text' => get_field('slider_text', false, false),
            'slider_hide_social' => get_field('slider_hide_social'),
            'slider_invert_color' => get_field('slider_invert_color'),
        );
    }
    
    public function cv_download_link ()
    {
        $cv_link = (object) array (
            'cv_download_link_url' => get_field('cv_download_link'),
        );

        return $cv_link;
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

    public function get_education_repeater_fields ()
    {
        $education = [];   
        // check if the repeater field has rows of data
        if( have_rows('education_items') )
        {
            // loop through the rows of data
            while ( have_rows('education_items') ) : the_row();
                $education[] = (object) [
                    "education_title" => get_sub_field('education_item_title'),
                    "education_institute" => get_sub_field('education_item_institute'),
                    "education_date" => get_sub_field('education_item_date'),
                    "education_certification" => get_sub_field('education_item_certification')
                ]; 
            endwhile;
        }
        return $education;
    }

    public function get_experience_repeater_fields ()
    {
        $experience = [];   
        // check if the repeater field has rows of data
        if( have_rows('experience_items') )
        {
            // loop through the rows of data
            while ( have_rows('experience_items') ) : the_row();
                $experience[] = (object) [
                    "experience_title" => get_sub_field('experience_item_title'),
                    "experience_institute" => get_sub_field('experience_item_institute'),
                    "experience_date" => get_sub_field('experience_item_date'),
                    "experience_certification" => get_sub_field('experience_item_certification')
                ]; 
            endwhile;
        }
        return $experience;
    }
    
    public function get_mainlanguages_repeater_fields ()
    {
        $mainlanguages = [];   
        // check if the repeater field has rows of data
        if( have_rows('mainlanguages_items') )
        {
            // loop through the rows of data
            while ( have_rows('mainlanguages_items') ) : the_row();
                $mainlanguages[] = (object) [
                    "mainlanguages_title" => get_sub_field('mainlanguages_item_title'),
                ]; 
            endwhile;
        }
        return $mainlanguages;
    }

    /**
     * @return (object)
     * e.g: 
     * skillset = {
     *  0: {
     *   skillset_title: 'title'
     *   skillset_items: [
     *    0: {
     *     skillset_item_name: "name"
     *    },
     *    1: {
     *     skillset_item_name: "name"
     *    }
     *   ]
     *  }
     * }
     */
    public function get_skillset_repeater_fields () 
    {
        $skillset = [];   
        // check if the repeater field has rows of data
        if( have_rows('skillset_items') )
        {
            // loop through the rows of data
            while ( have_rows('skillset_items') ) : the_row(); 
                $skillset_items = [];
                // Check rows for every skillset title / repeater
                if ( have_rows('skillset_item_repeater'))
                {
                    while ( have_rows('skillset_item_repeater') ) : the_row();
                        $skillset_items[] = (object) [
                            "skillset_item_name" => get_sub_field('skillset_item_skill_name')
                        ];
                    endwhile;
                }
                $skillset[] = (object) [
                    "skillset_title" => get_sub_field('skillset_item_title'),
                    "skillset_items" => $skillset_items
                ];
            endwhile;
        }
        return $skillset;
    }

    /**
     * Looping Posts
     */
    public function latest_posts ()
    {
        $args = array (
            'post_type' => 'post',
	    	'posts_per_page' => 2,
        );
        $the_query = new WP_Query( $args );
        return $the_query;
    }
}
