<?php 
/*
 * Plugin Name:     Nazmul Facebook QR Code
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:           Md Nazmul Hoque
 * Author URI:        nazmulhoque.xyz
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       nazmulhoque
 * Domain Path:       /languages
 * Requires Plugins: It is my first plugin porject
 */

 class Nazmul_Fb_Qr_Code {
    public function __construct()
    {
        add_action('init', [$this, 'initialize']);
    }
    function initialize(){
        add_filter('the_content', [$this, 'display_qr_code']);
    }
    function display_qr_code($content){
        $current_post_url = get_permalink();
        $size = 150;
        $color = '000';
        $final_size = apply_filters('qr_code_size', $size);
        $final_size = apply_filters('qr_code_size',$color);
           $heading = apply_filters('qr_code_heading', 'Changing QR Code Name');
        $qr_code_image = "https://api.qrserver.com/v1/create-qr-code/?size={$final_size}x{$final_size}&data=https://www.facebook.com/nazmulhoque1437" .$current_post_url;
          $newContent = $content . "<h1>{$heading}</h1><p><img src='{$qr_code_image}'</p>";
       do_action ('qr_code_displayed', $current_post_url);
          return $newContent;
    }
 }
 new Nazmul_Fb_Qr_Code;

// class Nazmul_Fb_Qr_Code {
//     public function __construct() {
//         add_action('init', [$this, 'initialize']);
//     }

//     function initialize() {
//         add_filter('the_content', [$this, 'display_qr_code']);
//     }

//     function display_qr_code($content) {
//         // QR কোডের লিঙ্কটি সরাসরি ফেসবুক প্রোফাইল লিঙ্কে সেট করা
     
//         $qr_code_image = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://www.facebook.com/nazmulhoque1437";
        
//         // ফেসবুক QR কোড ইমেজটি কনটেন্টের সাথে যোগ করা
//         $newContent = $content . "<p><img src='{$qr_code_image}' alt='Nazmul's Facebook QR Code'></p>";
        
//         return $newContent;
//     }
// }

// // ক্লাসটি ইনস্ট্যানশিয়েট করা
// new Nazmul_Fb_Qr_Code();

// class Nazmul_Fb_Qr_Code {
//     public function __construct() {
//         add_action('init', [$this, 'initialize']);
//     }

//     function initialize() {
//         add_filter('the_content', [$this, 'display_qr_code']);
//     }

//     function display_qr_code($content) {
//         // QR কোডের লিঙ্কটি সরাসরি ফেসবুক প্রোফাইল লিঙ্কে সেট করা
//         $qr_code_image = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://www.facebook.com/nazmulhoque1437";
        
//         // ফেসবুক QR কোড ইমেজ এবং টেক্সট কনটেন্টের সাথে যোগ করা
//         $newContent = $content . "
//         <div style='text-align: center;'>
//             <p><strong>Nazmul Hoque Facebook Account Link </strong></p> <!-- এখানে েআমার ফেসবুকের  নাম দেখাবে-->
//             <img src='{$qr_code_image}' alt='Nazmul's Facebook QR Code'>
//         </div>";
        
//         return $newContent;
//     }
// }

// // ক্লাসটি ইনস্ট্যানশিয়েট করা
// new Nazmul_Fb_Qr_Code();



// class Nazmul_Fb_Qr_Code {
//     public function __construct() {
//         add_action('init', [$this, 'initialize']);
//     }

//     function initialize() {
//         add_filter('the_content', [$this, 'display_qr_code',],99);
//     }

//     function display_qr_code($content) {
//         //এখানে আমার ফেসবুক QR কোড লিঙ্ক সেট করা
//         $qr_code_image = "https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=https://www.facebook.com/nazmulhoque1437";
        
//         // কনটেন্টের সাথে আমার নাম এবং QR কোড ইমেজ যোগ করা
//         $newContent = $content . "<p><strong>Nazmul Hoque Facebook</strong></p><p><img src='{$qr_code_image}' alt='Nazmul's Facebook QR Code'></p>";
        
//         return $newContent;
//     }
// }

// // ক্লাসটি ইনস্ট্যানশিয়েট করা
// new Nazmul_Fb_Qr_Code();


