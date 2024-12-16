<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class SystemSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('system_settings')->delete();

        \DB::table('system_settings')->insert(array(
            array('id' => '1', 'entity' => 'google_login', 'value' => '1', 'created_at' => '2022-12-07 17:33:40', 'updated_at' => '2023-05-30 00:11:19', 'deleted_at' => NULL),
            array('id' => '2', 'entity' => 'default_currency', 'value' => 'usd', 'created_at' => '2022-12-07 17:55:08', 'updated_at' => '2022-12-07 17:55:08', 'deleted_at' => NULL),
            array('id' => '3', 'entity' => 'no_of_decimals', 'value' => '2', 'created_at' => '2022-12-07 17:55:08', 'updated_at' => '2022-12-07 17:55:08', 'deleted_at' => NULL),
            array('id' => '4', 'entity' => 'truncate_price', 'value' => '0', 'created_at' => '2022-12-07 17:55:08', 'updated_at' => '2022-12-07 17:55:08', 'deleted_at' => NULL),
            array('id' => '5', 'entity' => 'enable_multi_vendor', 'value' => '0', 'created_at' => '2022-12-25 17:00:08', 'updated_at' => '2023-02-18 19:56:54', 'deleted_at' => NULL),
            array('id' => '6', 'entity' => 'default_admin_commission', 'value' => '5', 'created_at' => '2022-12-25 17:00:08', 'updated_at' => '2022-12-25 17:00:08', 'deleted_at' => NULL),
            array('id' => '7', 'entity' => 'vendor_minimum_payout', 'value' => '500', 'created_at' => '2022-12-28 17:34:48', 'updated_at' => '2022-12-28 17:34:48', 'deleted_at' => NULL),
            array('id' => '8', 'entity' => 'order_code_prefix', 'value' => '#writebot-:', 'created_at' => '2023-02-04 17:48:17', 'updated_at' => '2023-02-19 19:42:24', 'deleted_at' => NULL),
            array('id' => '9', 'entity' => 'order_code_start', 'value' => '1', 'created_at' => '2023-02-04 17:48:17', 'updated_at' => '2023-02-04 17:51:38', 'deleted_at' => NULL),
            array('id' => '10', 'entity' => 'system_title', 'value' => 'WriteBot AI', 'created_at' => '2023-02-05 17:48:44', 'updated_at' => '2023-05-29 20:20:02', 'deleted_at' => NULL),
            array('id' => '11', 'entity' => 'title_separator', 'value' => ':', 'created_at' => '2023-02-05 17:48:44', 'updated_at' => '2023-02-05 17:48:44', 'deleted_at' => NULL),
            array('id' => '12', 'entity' => 'site_address', 'value' => 'Cecilia Chapman, 711-2880 Nulla St, Mankato Mississippi 96522', 'created_at' => '2023-02-05 17:49:15', 'updated_at' => '2023-02-05 17:49:15', 'deleted_at' => NULL),
            array('id' => '13', 'entity' => 'registration_with', 'value' => 'email', 'created_at' => '2023-02-18 20:10:22', 'updated_at' => '2023-02-18 20:10:22', 'deleted_at' => NULL),
            array('id' => '14', 'entity' => 'registration_verification_with', 'value' => 'disable', 'created_at' => '2023-02-18 20:10:22', 'updated_at' => '2023-02-18 20:10:22', 'deleted_at' => NULL),
            array('id' => '15', 'entity' => 'topbar_welcome_text', 'value' => 'Welcome to our Organic store', 'created_at' => '2023-02-20 17:41:46', 'updated_at' => '2023-02-20 17:41:46', 'deleted_at' => NULL),
            array('id' => '16', 'entity' => 'topbar_email', 'value' => 'groshop@support.com', 'created_at' => '2023-02-20 17:41:46', 'updated_at' => '2023-02-20 17:41:46', 'deleted_at' => NULL),
            array('id' => '17', 'entity' => 'topbar_location', 'value' => 'Washington, New York, USA - 254230', 'created_at' => '2023-02-20 17:41:46', 'updated_at' => '2023-02-20 17:41:46', 'deleted_at' => NULL),
            array('id' => '18', 'entity' => 'navbar_logo', 'value' => '1', 'created_at' => '2023-02-20 17:41:46', 'updated_at' => '2023-03-12 15:04:45', 'deleted_at' => NULL),
            array('id' => '19', 'entity' => 'navbar_categories', 'value' => NULL, 'created_at' => '2023-02-20 17:41:46', 'updated_at' => '2023-03-12 15:04:45', 'deleted_at' => NULL),
            array('id' => '20', 'entity' => 'navbar_pages', 'value' => '["1"]', 'created_at' => '2023-02-20 17:41:47', 'updated_at' => '2023-03-01 20:32:34', 'deleted_at' => NULL),
            array('id' => '21', 'entity' => 'navbar_contact_number', 'value' => '+80 157 058 4567', 'created_at' => '2023-02-20 17:41:47', 'updated_at' => '2023-02-20 17:41:47', 'deleted_at' => NULL),
            array('id' => '22', 'entity' => 'hero_sliders', 'value' => '[{"id":106549,"sub_title":"Genuine 100% Organic Products","title":"Online Fresh Grocery Products","text":"Assertively target market-driven intellectual capital with worldwide human capital holistic.","image":"39","link":"https:\\/\\/www.youtube.com\\/watch?v=mZ77D66ZYtw"}]', 'created_at' => '2023-02-20 22:36:00', 'updated_at' => '2023-03-01 19:33:57', 'deleted_at' => NULL),
            array('id' => '24', 'entity' => 'top_category_ids', 'value' => '["6","5","4","3","2"]', 'created_at' => '2023-02-25 20:29:10', 'updated_at' => '2023-02-25 20:29:10', 'deleted_at' => NULL),
            array('id' => '25', 'entity' => 'featured_sub_title', 'value' => 'Platform mindshare through effective infomediaries Dynamically implement.', 'created_at' => '2023-02-25 21:18:46', 'updated_at' => '2023-02-25 21:18:46', 'deleted_at' => NULL),
            array('id' => '26', 'entity' => 'featured_products_left', 'value' => '["1","2","5"]', 'created_at' => '2023-02-25 21:18:46', 'updated_at' => '2023-02-26 15:38:23', 'deleted_at' => NULL),
            array('id' => '27', 'entity' => 'featured_products_right', 'value' => '["2","3","4"]', 'created_at' => '2023-02-25 21:18:46', 'updated_at' => '2023-02-25 23:53:03', 'deleted_at' => NULL),
            array('id' => '28', 'entity' => 'featured_center_banner', 'value' => '', 'created_at' => '2023-02-25 21:18:46', 'updated_at' => '2023-02-25 22:01:42', 'deleted_at' => NULL),
            array('id' => '29', 'entity' => 'featured_banner_link', 'value' => 'http://enmart.work/products', 'created_at' => '2023-02-25 21:23:47', 'updated_at' => '2023-02-25 21:23:47', 'deleted_at' => NULL),
            array('id' => '30', 'entity' => 'trending_product_categories', 'value' => '["5","4","3"]', 'created_at' => '2023-02-26 16:35:01', 'updated_at' => '2023-02-26 16:35:01', 'deleted_at' => NULL),
            array('id' => '31', 'entity' => 'top_trending_products', 'value' => '["1","2","3","4","5"]', 'created_at' => '2023-02-26 16:35:01', 'updated_at' => '2023-03-08 23:10:00', 'deleted_at' => NULL),
            array('id' => '32', 'entity' => 'banner_section_one_banners', 'value' => '[]', 'created_at' => '2023-02-26 17:44:06', 'updated_at' => '2023-03-12 14:54:15', 'deleted_at' => NULL),
            array('id' => '33', 'entity' => 'best_deal_end_date', 'value' => '03/31/2023', 'created_at' => '2023-02-26 20:38:19', 'updated_at' => '2023-02-26 20:44:19', 'deleted_at' => NULL),
            array('id' => '34', 'entity' => 'weekly_best_deals', 'value' => '["1","2","4","5"]', 'created_at' => '2023-02-26 20:38:19', 'updated_at' => '2023-02-26 20:53:35', 'deleted_at' => NULL),
            array('id' => '35', 'entity' => 'best_deal_banner', 'value' => '', 'created_at' => '2023-02-26 20:38:19', 'updated_at' => '2023-02-26 20:38:19', 'deleted_at' => NULL),
            array('id' => '36', 'entity' => 'best_deal_banner_link', 'value' => NULL, 'created_at' => '2023-02-26 20:38:19', 'updated_at' => '2023-02-26 20:38:19', 'deleted_at' => NULL),
            array('id' => '37', 'entity' => 'banner_section_two_banner_one_link', 'value' => NULL, 'created_at' => '2023-02-26 21:11:59', 'updated_at' => '2023-02-26 21:11:59', 'deleted_at' => NULL),
            array('id' => '38', 'entity' => 'banner_section_two_banner_one', 'value' => '49', 'created_at' => '2023-02-26 21:11:59', 'updated_at' => '2023-02-26 21:11:59', 'deleted_at' => NULL),
            array('id' => '39', 'entity' => 'banner_section_two_banner_two_link', 'value' => NULL, 'created_at' => '2023-02-26 21:11:59', 'updated_at' => '2023-02-26 21:11:59', 'deleted_at' => NULL),
            array('id' => '40', 'entity' => 'banner_section_two_banner_two', 'value' => '50', 'created_at' => '2023-02-26 21:11:59', 'updated_at' => '2023-02-26 21:11:59', 'deleted_at' => NULL),
            array('id' => '41', 'entity' => 'client_feedback', 'value' => '[{"id":854463,"name":"Lawrence Schroth","heading":"Fantastic Way to cut Your Writing","designation":"Managing Director","rating":"5","review":"I can\\u2019t imagine my life without WriteBot It has changed the game for me. I can put in a sentence or two of a generic idea and WriteBot takes it in and in 30 seconds or less generates more every time I hit enter...","image":"28"},{"id":652109,"name":"Bernard","heading":"WriteBot is my Trusted Copy Friend","designation":"Business Owner","rating":"5","review":"I\'ve used WriteBot for several months now, along with a half dozen other paid AI copy tools and this has outperformed all of them. They have more specialized tools than anyone else.","image":"29"},{"id":199682,"name":"Patrick","heading":"Great quality of output","designation":"SEO Content Writer","rating":"5","review":"WriteBot is THE best!!! Been using it for copywriting especially for blog posts. Saves me so much time and mental energy. It\'s a worthwhile investment! Great quality of output better than any other tool.","image":"31"},{"id":494645,"name":"Candy Roy","heading":"You Love to Outsource to AI - it\\u2019s perfect!","designation":"Social Media Manager","rating":"5","review":"Wouldn\'t you love to outsource (no pun intended) your copywriting to an AI - I do and did! with WriteBot. It will give your phenomenal content with the ultimate edge by using lots of scientific copywriting formulas.","image":"30"},{"id":624097,"name":"Jesse Stoddard","heading":"I find WriteBot to be an excellent tool\\u2026","designation":"Content Marketer & Blogger","rating":"5","review":"I find WriteBot to be an excellent tool for speeding up our copywriting service. Far from \\"replacing\\" myself or any of my writers, WriteBot provides an essential tool for better assemble the finished product faster.","image":"27"}]', 'created_at' => '2023-02-27 00:16:47', 'updated_at' => '2023-05-29 20:37:14', 'deleted_at' => NULL),
            array('id' => '42', 'entity' => 'best_selling_products', 'value' => '["1","2","3"]', 'created_at' => '2023-02-27 17:01:19', 'updated_at' => '2023-02-27 17:01:19', 'deleted_at' => NULL),
            array('id' => '43', 'entity' => 'best_selling_banner', 'value' => '', 'created_at' => '2023-02-27 17:01:19', 'updated_at' => '2023-02-27 17:11:30', 'deleted_at' => NULL),
            array('id' => '44', 'entity' => 'best_selling_banner_link', 'value' => NULL, 'created_at' => '2023-02-27 17:01:19', 'updated_at' => '2023-02-27 17:01:19', 'deleted_at' => NULL),
            array('id' => '45', 'entity' => 'product_listing_categories', 'value' => '["6","5","4","3","2"]', 'created_at' => '2023-02-27 17:47:35', 'updated_at' => '2023-02-27 17:47:35', 'deleted_at' => NULL),
            array('id' => '46', 'entity' => 'footer_categories', 'value' => NULL, 'created_at' => '2023-03-01 15:33:33', 'updated_at' => '2023-03-12 14:59:31', 'deleted_at' => NULL),
            array('id' => '47', 'entity' => 'quick_links', 'value' => '["1"]', 'created_at' => '2023-03-01 15:33:33', 'updated_at' => '2023-05-29 21:19:32', 'deleted_at' => NULL),
            array('id' => '48', 'entity' => 'footer_logo', 'value' => '2', 'created_at' => '2023-03-01 15:33:33', 'updated_at' => '2023-03-12 15:05:55', 'deleted_at' => NULL),
            array('id' => '49', 'entity' => 'accepted_payment_banner', 'value' => '3', 'created_at' => '2023-03-01 15:33:33', 'updated_at' => '2023-03-12 15:05:55', 'deleted_at' => NULL),
            array('id' => '50', 'entity' => 'copyright_text', 'value' => '<p>© All Designed, Developed and <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFXSURBVHgBjZE9S8NQGIXPexsdBGkXF6d0qHSopYKuUqUO4uA/UMFZOjqK7g79AaLi4CquLRIHBydTFbVoaVZBoRKQfiT39TZDLWma9EyXc+9zz/tBiNBrOq9PTmhFhqzatrxKTGv7LOC0284JRcH17FoDYN3vE8MIhRu5vC6l1gi6c5k/RRicNA0LjO+gO43oPhTuiRmHASaTcIpe2e+ZQl4QttTxp9N1Sq0WmvF4bJclMgy+VS91lXLgceBuDGI7+Vi+pI/51R0icdr/FPhSw7BAWPwPohvV5QWBNqWgo1S18tDzqZ4t9A45RMgVtDBnls1BT1WLWYwhcjjh94RkvIzBQtMcawgOnOZQLJ95a/PDqeeKoQZyPppkS5AbGODtOd753VO9mwFgU7C7HpTah2dqd7Za+oraYWkwEUzLySfjDaO68RtWrrDRlVhy21PH6dq1jRD9AULxiBLD039WAAAAAElFTkSuQmCC" data-filename="love.png" style="width: 15px;"> by <b><a href="http://themetags.com/" target="_blank" style=""><font color="#ff9c00">ThemeTags</font></a></b></p>', 'created_at' => '2023-03-01 15:49:42', 'updated_at' => '2023-05-30 00:02:19', 'deleted_at' => NULL),
            array('id' => '51', 'entity' => 'product_page_widgets', 'value' => '[]', 'created_at' => '2023-03-01 19:35:08', 'updated_at' => '2023-03-12 14:56:25', 'deleted_at' => NULL),
            array('id' => '52', 'entity' => 'product_page_banner_link', 'value' => NULL, 'created_at' => '2023-03-01 20:20:50', 'updated_at' => '2023-03-01 20:20:50', 'deleted_at' => NULL),
            array('id' => '53', 'entity' => 'product_page_banner', 'value' => '59', 'created_at' => '2023-03-01 20:20:50', 'updated_at' => '2023-03-01 20:20:50', 'deleted_at' => NULL),
            array('id' => '54', 'entity' => 'facebook_link', 'value' => 'https://www.facebook.com/', 'created_at' => '2023-03-01 20:45:01', 'updated_at' => '2023-03-01 20:45:01', 'deleted_at' => NULL),
            array('id' => '55', 'entity' => 'twitter_link', 'value' => 'https://twitter.com/', 'created_at' => '2023-03-01 20:45:01', 'updated_at' => '2023-03-01 20:45:01', 'deleted_at' => NULL),
            array('id' => '56', 'entity' => 'linkedin_link', 'value' => 'https://www.linkedin.com/', 'created_at' => '2023-03-01 20:45:01', 'updated_at' => '2023-03-01 20:45:01', 'deleted_at' => NULL),
            array('id' => '57', 'entity' => 'youtube_link', 'value' => 'https://www.youtube.com/', 'created_at' => '2023-03-01 20:45:01', 'updated_at' => '2023-03-01 20:45:01', 'deleted_at' => NULL),
            array('id' => '58', 'entity' => 'about_us', 'value' => 'Explain to you how all this mistaken denouncing pleasure and praising pain was born and we will give you a complete account of the system, and expound the actual teachings.
                    
                    Mistaken denouncing pleasure and praising pain was born and we will give you complete account of the system expound.', 'created_at' => '2023-03-01 20:46:33', 'updated_at' => '2023-03-01 20:46:33', 'deleted_at' => NULL),
            array('id' => '59', 'entity' => 'about_intro_sub_title', 'value' => '100% Organic Food Provide', 'created_at' => '2023-03-04 15:54:12', 'updated_at' => '2023-03-04 15:54:12', 'deleted_at' => NULL),
            array('id' => '60', 'entity' => 'about_intro_title', 'value' => 'Be healthy & <br> eat fresh organic food', 'created_at' => '2023-03-04 15:54:12', 'updated_at' => '2023-03-11 16:49:49', 'deleted_at' => NULL),
            array('id' => '61', 'entity' => 'about_intro_text', 'value' => 'Assertively target market lorem ipsum is simply free text available dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt simply freeutation labore et dolore.', 'created_at' => '2023-03-04 15:54:12', 'updated_at' => '2023-03-04 15:54:12', 'deleted_at' => NULL),
            array('id' => '62', 'entity' => 'about_intro_mission', 'value' => 'Continually transform virtual meta- methodologies. leverage existing alignments.', 'created_at' => '2023-03-04 15:54:12', 'updated_at' => '2023-03-04 15:54:12', 'deleted_at' => NULL),
            array('id' => '63', 'entity' => 'about_intro_vision', 'value' => 'Continually transform virtual meta- methodologies. leverage existing alignments.', 'created_at' => '2023-03-04 15:54:12', 'updated_at' => '2023-03-04 15:54:12', 'deleted_at' => NULL),
            array('id' => '64', 'entity' => 'about_intro_quote', 'value' => 'Assertively target market Lorem ipsum is simply free consectetur notted elit sed do eiusmod', 'created_at' => '2023-03-04 15:54:12', 'updated_at' => '2023-03-04 15:54:12', 'deleted_at' => NULL),
            array('id' => '65', 'entity' => 'about_intro_quote_by', 'value' => 'George Scholll', 'created_at' => '2023-03-04 15:54:12', 'updated_at' => '2023-03-04 15:54:12', 'deleted_at' => NULL),
            array('id' => '66', 'entity' => 'about_intro_image', 'value' => '60', 'created_at' => '2023-03-04 15:54:12', 'updated_at' => '2023-03-04 15:54:12', 'deleted_at' => NULL),
            array('id' => '67', 'entity' => 'about_popular_brand_ids', 'value' => '["1","2"]', 'created_at' => '2023-03-04 16:16:59', 'updated_at' => '2023-03-04 16:16:59', 'deleted_at' => NULL),
            array('id' => '68', 'entity' => 'about_features_title', 'value' => 'Our Working Ability', 'created_at' => '2023-03-04 16:49:27', 'updated_at' => '2023-03-04 16:49:27', 'deleted_at' => NULL),
            array('id' => '69', 'entity' => 'about_features_sub_title', 'value' => 'Assertively target market lorem ipsum is simply free text available dolor incididunt simply free ut labore et dolore.', 'created_at' => '2023-03-04 16:49:27', 'updated_at' => '2023-03-04 16:49:27', 'deleted_at' => NULL),
            array('id' => '70', 'entity' => 'about_us_features', 'value' => '[]', 'created_at' => '2023-03-04 16:59:50', 'updated_at' => '2023-03-12 14:57:12', 'deleted_at' => NULL),
            array('id' => '71', 'entity' => 'about_why_choose_sub_title', 'value' => 'Why Choose Us', 'created_at' => '2023-03-04 17:59:45', 'updated_at' => '2023-03-04 17:59:45', 'deleted_at' => NULL),
            array('id' => '72', 'entity' => 'about_why_choose_title', 'value' => 'We do not Buy from the <br> Open Market', 'created_at' => '2023-03-04 17:59:45', 'updated_at' => '2023-03-04 17:59:45', 'deleted_at' => NULL),
            array('id' => '73', 'entity' => 'about_why_choose_text', 'value' => 'Compellingly fashion intermandated opportunities and multimedia based fnsparent e-business.', 'created_at' => '2023-03-04 17:59:45', 'updated_at' => '2023-03-04 17:59:45', 'deleted_at' => NULL),
            array('id' => '74', 'entity' => 'about_why_choose_banner', 'value' => '62', 'created_at' => '2023-03-04 17:59:45', 'updated_at' => '2023-03-04 17:59:45', 'deleted_at' => NULL),
            array('id' => '75', 'entity' => 'about_us_why_choose_us', 'value' => '[]', 'created_at' => '2023-03-04 18:05:13', 'updated_at' => '2023-03-12 14:57:43', 'deleted_at' => NULL),
            array('id' => '76', 'entity' => 'admin_panel_logo', 'value' => '17', 'created_at' => '2023-03-04 20:37:03', 'updated_at' => '2023-05-29 18:36:34', 'deleted_at' => NULL),
            array('id' => '77', 'entity' => 'favicon', 'value' => '13', 'created_at' => '2023-03-04 20:37:03', 'updated_at' => '2023-05-29 22:43:38', 'deleted_at' => NULL),
            array('id' => '78', 'entity' => 'invoice_thanksgiving', 'value' => 'Thank you for purchase. it is really awesome to have you as one of our paid users. We hope that you will be happy with Qlearly, if you ever have any questions, suggestions or concerns please do not hesitate to contact us.', 'created_at' => '2023-03-07 18:04:15', 'updated_at' => '2023-03-07 18:09:20', 'deleted_at' => NULL),
            array('id' => '79', 'entity' => 'navbar_logo_white', 'value' => '15', 'created_at' => '2023-05-29 18:34:46', 'updated_at' => '2023-05-29 18:34:46', 'deleted_at' => NULL),
            array('id' => '80', 'entity' => 'navbar_logo_dark', 'value' => '14', 'created_at' => '2023-05-29 18:34:46', 'updated_at' => '2023-05-29 18:34:46', 'deleted_at' => NULL),
            array('id' => '81', 'entity' => 'navbar_template_groups', 'value' => '["1","2","3","4","5","7"]', 'created_at' => '2023-05-29 18:34:46', 'updated_at' => '2023-05-29 18:35:25', 'deleted_at' => NULL),
            array('id' => '82', 'entity' => 'contact_email', 'value' => 'admin@themetags.com', 'created_at' => '2023-05-29 18:36:34', 'updated_at' => '2023-05-29 20:20:02', 'deleted_at' => NULL),
            array('id' => '83', 'entity' => 'contact_phone', 'value' => '540-907-0453', 'created_at' => '2023-05-29 18:36:34', 'updated_at' => '2023-05-29 20:20:02', 'deleted_at' => NULL),
            array('id' => '84', 'entity' => 'enable_maintenance_mode', 'value' => '0', 'created_at' => '2023-05-29 18:36:34', 'updated_at' => '2023-05-29 18:36:34', 'deleted_at' => NULL),
            array('id' => '85', 'entity' => 'global_meta_title', 'value' => NULL, 'created_at' => '2023-05-29 18:36:34', 'updated_at' => '2023-05-29 18:36:34', 'deleted_at' => NULL),
            array('id' => '86', 'entity' => 'global_meta_description', 'value' => NULL, 'created_at' => '2023-05-29 18:36:34', 'updated_at' => '2023-05-29 18:36:34', 'deleted_at' => NULL),
            array('id' => '87', 'entity' => 'global_meta_keywords', 'value' => NULL, 'created_at' => '2023-05-29 18:36:34', 'updated_at' => '2023-05-29 18:36:34', 'deleted_at' => NULL),
            array('id' => '88', 'entity' => 'global_meta_image', 'value' => NULL, 'created_at' => '2023-05-29 18:36:34', 'updated_at' => '2023-05-29 18:36:34', 'deleted_at' => NULL),
            array('id' => '89', 'entity' => 'hero_title', 'value' => 'Whatever You Need, Just Ask', 'created_at' => '2023-05-29 18:47:17', 'updated_at' => '2023-05-29 18:49:47', 'deleted_at' => NULL),
            array('id' => '90', 'entity' => 'hero_colorful_title', 'value' => 'WriteBot  Has The Answers', 'created_at' => '2023-05-29 18:47:17', 'updated_at' => '2023-05-29 18:47:17', 'deleted_at' => NULL),
            array('id' => '91', 'entity' => 'hero_sub_title', 'value' => 'Tell us what you want our WriteBot AI will create the marketing copy for you, It\'s that simple. AI blog writer that gives you more time to focus on the things you love.', 'created_at' => '2023-05-29 18:47:17', 'updated_at' => '2023-05-29 18:56:23', 'deleted_at' => NULL),
            array('id' => '92', 'entity' => 'hero_background_image', 'value' => '8', 'created_at' => '2023-05-29 18:47:17', 'updated_at' => '2023-05-29 18:47:17', 'deleted_at' => NULL),
            array('id' => '93', 'entity' => 'hero_animated_image', 'value' => '9', 'created_at' => '2023-05-29 18:47:17', 'updated_at' => '2023-05-29 18:47:17', 'deleted_at' => NULL),
            array('id' => '94', 'entity' => 'homepage_trusted_by_title', 'value' => 'Trusted & Used by 1,245+ Companies', 'created_at' => '2023-05-29 19:01:27', 'updated_at' => '2023-05-29 19:01:44', 'deleted_at' => NULL),
            array('id' => '95', 'entity' => 'homepage_trusted_by_images', 'value' => '22,21,20,19,18,26,23,24,25', 'created_at' => '2023-05-29 19:01:27', 'updated_at' => '2023-05-29 19:01:27', 'deleted_at' => NULL),
            array('id' => '96', 'entity' => 'how_it_works_1_title', 'value' => 'Select Template', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:05:33', 'deleted_at' => NULL),
            array('id' => '97', 'entity' => 'how_it_works_1_sub_title', 'value' => 'Select template first that you want to generate content', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:05:33', 'deleted_at' => NULL),
            array('id' => '98', 'entity' => 'how_it_works_1_short_description', 'value' => 'Learn why businesses everywhere are leveraging AI to create sales and marketing campaigns for faster, more sustainable growth.', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:19:49', 'deleted_at' => NULL),
            array('id' => '99', 'entity' => 'how_it_works_1_features', 'value' => 'Select the personalized template,
          Write the prompt or context that you want to generate,
          Generate product descriptions', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:20:51', 'deleted_at' => NULL),
            array('id' => '100', 'entity' => 'how_it_works_1_btn_title', 'value' => 'Select Your Template', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:05:33', 'deleted_at' => NULL),
            array('id' => '101', 'entity' => 'how_it_works_1_btn_link', 'value' => 'https://writebot.themetags.com/dashboard/templates', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:05:33', 'deleted_at' => NULL),
            array('id' => '102', 'entity' => 'how_it_works_1_image', 'value' => '11', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:05:33', 'deleted_at' => NULL),
            array('id' => '103', 'entity' => 'how_it_works_2_title', 'value' => 'Write Your Prompt or Context', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:07:49', 'deleted_at' => NULL),
            array('id' => '104', 'entity' => 'how_it_works_2_sub_title', 'value' => 'Enter a few sentences about your brand and products', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:07:49', 'deleted_at' => NULL),
            array('id' => '105', 'entity' => 'how_it_works_2_short_description', 'value' => 'Increase the quality of your output by working with Chat by WriteBot prebuilt prompts. This helps you guide our software to better content and Choose from emails, social posts, long-form blog posts, and more!', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:28:43', 'deleted_at' => NULL),
            array('id' => '106', 'entity' => 'how_it_works_2_features', 'value' => 'Write or select WriteBot prebuilt prompts, 
          Prompts include helpful commands for generateing purfect content,
          Generate personalized copy for sales outreach', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:25:49', 'deleted_at' => NULL),
            array('id' => '107', 'entity' => 'how_it_works_2_btn_title', 'value' => 'Write Prompts', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:07:49', 'deleted_at' => NULL),
            array('id' => '108', 'entity' => 'how_it_works_2_btn_link', 'value' => 'https://writebot.themetags.com/dashboard/templates/blog-section', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:07:49', 'deleted_at' => NULL),
            array('id' => '109', 'entity' => 'how_it_works_2_image', 'value' => '12', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:07:49', 'deleted_at' => NULL),
            array('id' => '110', 'entity' => 'how_it_works_3_title', 'value' => 'Select Advance Option & Generate', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:13:27', 'deleted_at' => NULL),
            array('id' => '111', 'entity' => 'how_it_works_3_sub_title', 'value' => 'Multiple options for each campaign that you’re working on', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:12:29', 'deleted_at' => NULL),
            array('id' => '112', 'entity' => 'how_it_works_3_short_description', 'value' => 'Experience the full power of an AI content generator that delivers premium results in seconds. Get better results in a fraction of the time.', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:29:31', 'deleted_at' => NULL),
            array('id' => '113', 'entity' => 'how_it_works_3_features', 'value' => 'Scrape websites for public data,
          Generate personalized copy for sales outreach,
          Summarize YouTube videos into key bullet points', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:30:22', 'deleted_at' => NULL),
            array('id' => '114', 'entity' => 'how_it_works_3_btn_title', 'value' => 'Chose Advance Options', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:11:40', 'deleted_at' => NULL),
            array('id' => '115', 'entity' => 'how_it_works_3_btn_link', 'value' => 'https://writebot.themetags.com/dashboard/templates/blog-section', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:11:40', 'deleted_at' => NULL),
            array('id' => '116', 'entity' => 'how_it_works_3_image', 'value' => '10', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:11:40', 'deleted_at' => NULL),
            array('id' => '117', 'entity' => 'how_it_works_4_title', 'value' => 'Edit, Polish, and Publish', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:13:27', 'deleted_at' => NULL),
            array('id' => '118', 'entity' => 'how_it_works_4_sub_title', 'value' => 'Just copy and paste the work into your CMS for publishing', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:11:40', 'deleted_at' => NULL),
            array('id' => '119', 'entity' => 'how_it_works_4_short_description', 'value' => 'Use WriteBot editor to rewrite paragraphs and polish up sentences. Then, just copy and paste the work into your CMS for publishing.', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:34:10', 'deleted_at' => NULL),
            array('id' => '120', 'entity' => 'how_it_works_4_features', 'value' => 'Edit Polish  and Publish with Ease using WriteBot,
          Generate high-converting copy for all your campaigns,
          No software can be a silver-bullet solution for any business', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:35:20', 'deleted_at' => NULL),
            array('id' => '121', 'entity' => 'how_it_works_4_btn_title', 'value' => 'Copy and Publish', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:15:12', 'deleted_at' => NULL),
            array('id' => '122', 'entity' => 'how_it_works_4_btn_link', 'value' => 'https://writebot.themetags.com/dashboard/templates/blog-section', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:15:12', 'deleted_at' => NULL),
            array('id' => '123', 'entity' => 'how_it_works_4_image', 'value' => '2', 'created_at' => '2023-05-29 19:05:33', 'updated_at' => '2023-05-29 19:11:40', 'deleted_at' => NULL),
            array('id' => '124', 'entity' => 'feature_image_1_title', 'value' => 'We Provide Useful Template that Helps Your Business', 'created_at' => '2023-05-29 19:40:57', 'updated_at' => '2023-05-29 19:40:57', 'deleted_at' => NULL),
            array('id' => '125', 'entity' => 'feature_image_1_short_description', 'value' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'created_at' => '2023-05-29 19:40:57', 'updated_at' => '2023-05-29 19:40:57', 'deleted_at' => NULL),
            array('id' => '126', 'entity' => 'feature_image_1_image', 'value' => '7', 'created_at' => '2023-05-29 19:40:57', 'updated_at' => '2023-05-29 19:40:57', 'deleted_at' => NULL),
            array('id' => '127', 'entity' => 'feature_image_2_title', 'value' => 'Write Content', 'created_at' => '2023-05-29 19:40:57', 'updated_at' => '2023-05-29 19:42:30', 'deleted_at' => NULL),
            array('id' => '128', 'entity' => 'feature_image_2_image', 'value' => '5', 'created_at' => '2023-05-29 19:40:57', 'updated_at' => '2023-05-29 19:42:30', 'deleted_at' => NULL),
            array('id' => '129', 'entity' => 'feature_image_3_title', 'value' => 'Generate AI Images', 'created_at' => '2023-05-29 19:40:57', 'updated_at' => '2023-05-29 19:42:30', 'deleted_at' => NULL),
            array('id' => '130', 'entity' => 'feature_image_3_image', 'value' => '4', 'created_at' => '2023-05-29 19:40:57', 'updated_at' => '2023-05-29 19:42:30', 'deleted_at' => NULL),
            array('id' => '131', 'entity' => 'feature_image_4_title', 'value' => 'Generate Code', 'created_at' => '2023-05-29 19:40:57', 'updated_at' => '2023-05-29 19:42:30', 'deleted_at' => NULL),
            array('id' => '132', 'entity' => 'feature_image_4_image', 'value' => '3', 'created_at' => '2023-05-29 19:40:57', 'updated_at' => '2023-05-29 19:42:30', 'deleted_at' => NULL),
            array('id' => '133', 'entity' => 'feature_image_5_title', 'value' => 'Speech to Text Generate', 'created_at' => '2023-05-29 19:40:57', 'updated_at' => '2023-05-29 19:42:30', 'deleted_at' => NULL),
            array('id' => '134', 'entity' => 'feature_image_5_image', 'value' => '6', 'created_at' => '2023-05-29 19:40:57', 'updated_at' => '2023-05-29 19:42:30', 'deleted_at' => NULL),
            array('id' => '135', 'entity' => 'cta_colored_title', 'value' => 'Let\'s Try! Ready to level-up?', 'created_at' => '2023-05-29 20:11:00', 'updated_at' => '2023-05-29 20:13:34', 'deleted_at' => NULL),
            array('id' => '136', 'entity' => 'cta_heading_title', 'value' => 'Start Your 30-Day Free Trial', 'created_at' => '2023-05-29 20:11:00', 'updated_at' => '2023-05-29 20:11:00', 'deleted_at' => NULL),
            array('id' => '137', 'entity' => 'cta_short_description', 'value' => 'Write 10x faster, engage your audience, & never struggle with the blank page again.', 'created_at' => '2023-05-29 20:11:00', 'updated_at' => '2023-05-29 20:11:00', 'deleted_at' => NULL),
            array('id' => '138', 'entity' => 'cta_btn_title', 'value' => 'Get Started - It\'s Free', 'created_at' => '2023-05-29 20:11:00', 'updated_at' => '2023-05-29 20:11:00', 'deleted_at' => NULL),
            array('id' => '139', 'entity' => 'cta_btn_link', 'value' => NULL, 'created_at' => '2023-05-29 20:11:00', 'updated_at' => '2023-05-29 20:11:00', 'deleted_at' => NULL),
            array('id' => '140', 'entity' => 'cta_features', 'value' => '2000 free words per month, 
          No credit card is required,
          90+ content types to explore', 'created_at' => '2023-05-29 20:11:00', 'updated_at' => '2023-05-29 20:12:15', 'deleted_at' => NULL),
            array('id' => '141', 'entity' => 'login_leftbar_title', 'value' => 'Check Out What Our Customers are <br> Saying', 'created_at' => '2023-05-29 22:26:10', 'updated_at' => '2023-05-29 23:15:21', 'deleted_at' => NULL),
            array('id' => '142', 'entity' => 'login_leftbar_colored_title', 'value' => '(10,000+ 5 Star Reviews)', 'created_at' => '2023-05-29 22:26:10', 'updated_at' => '2023-05-29 23:15:21', 'deleted_at' => NULL),
            array('id' => '143', 'entity' => 'login_rightbar_title', 'value' => 'Get Started with 10,000 Free Words', 'created_at' => '2023-05-29 22:26:10', 'updated_at' => '2023-05-29 23:15:21', 'deleted_at' => NULL),
            array('id' => '144', 'entity' => 'login_rightbar_sub_title', 'value' => 'No credit card required!', 'created_at' => '2023-05-29 22:26:10', 'updated_at' => '2023-05-29 23:15:21', 'deleted_at' => NULL),
            array('id' => '145', 'entity' => 'enable_recaptcha', 'value' => '0', 'created_at' => '2023-05-29 22:26:10', 'updated_at' => '2023-05-29 22:26:10', 'deleted_at' => NULL),
            array('id' => '146', 'entity' => 'enable_paypal', 'value' => '1', 'created_at' => '2023-05-29 23:50:42', 'updated_at' => '2023-05-29 23:50:42', 'deleted_at' => NULL),
            array('id' => '147', 'entity' => 'paypal_sandbox', 'value' => '1', 'created_at' => '2023-05-29 23:50:42', 'updated_at' => '2023-05-29 23:50:42', 'deleted_at' => NULL),
            array('id' => '148', 'entity' => 'enable_stripe', 'value' => '1', 'created_at' => '2023-05-29 23:50:42', 'updated_at' => '2023-05-29 23:50:42', 'deleted_at' => NULL),
            array('id' => '149', 'entity' => 'enable_paytm', 'value' => '1', 'created_at' => '2023-05-29 23:50:42', 'updated_at' => '2023-05-29 23:50:42', 'deleted_at' => NULL),
            array('id' => '150', 'entity' => 'enable_razorpay', 'value' => '1', 'created_at' => '2023-05-29 23:50:42', 'updated_at' => '2023-05-29 23:50:42', 'deleted_at' => NULL),
            array('id' => '151', 'entity' => 'enable_iyzico', 'value' => '1', 'created_at' => '2023-05-29 23:50:42', 'updated_at' => '2023-05-29 23:50:42', 'deleted_at' => NULL),
            array('id' => '152', 'entity' => 'iyzico_sandbox', 'value' => '1', 'created_at' => '2023-05-29 23:50:42', 'updated_at' => '2023-05-29 23:50:42', 'deleted_at' => NULL),
            array('id' => '153', 'entity' => 'facebook_login', 'value' => '1', 'created_at' => '2023-05-30 00:11:19', 'updated_at' => '2023-05-30 00:11:19', 'deleted_at' => NULL),
            array('id' => '154', 'entity' => 'software_version', 'value' => '4.8.0', 'created_at' => Carbon::now(), 'updated_at' => '2023-05-30 00:11:19', 'deleted_at' => NULL),
            array('id' => '155', 'entity' => 'last_update', 'value' => Carbon::now(), 'created_at' => '2023-05-30 00:11:19', 'updated_at' => '2023-05-30 00:11:19', 'deleted_at' => NULL),
            array('id' => '156', 'entity' => 'generate_image', 'value' => 1, 'created_at' => '2023-05-30 00:11:19', 'updated_at' => '2023-05-30 00:11:19', 'deleted_at' => NULL),
            array('id' => '157', 'entity' => 'image_stable_diffusion_engine', 'value' => 'stable-diffusion-v1-6', 'created_at' => '2023-05-30 00:11:19', 'updated_at' => '2023-05-30 00:11:19', 'deleted_at' => NULL),
            array('id' => '158', 'entity' => 'default_voiceover', 'value' => 'open_ai_tts', 'created_at' => '2023-05-30 00:11:19', 'updated_at' => '2023-05-30 00:11:19', 'deleted_at' => NULL),
            array('id' => '159', 'entity' => 'hero_video', 'value' => 'public/wirtebot-video.mp4', 'created_at' => '2023-05-30 00:11:19', 'updated_at' => '2023-05-30 00:11:19', 'deleted_at' => NULL),
        
          ));
        
    }
}
