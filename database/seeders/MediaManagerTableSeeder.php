<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MediaManagerTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('media_managers')->delete();


        \DB::table('media_managers')->insert(array(
            array('id' => '1','user_id' => '1','media_file' => 'uploads/media/aJ7wAo70bSOXLSXTvI4hhtBBSYpusjHSrKuGO0L7.png','media_size' => '124065','media_type' => 'image','media_name' => 'bg-gradient.png','media_extension' => 'png','created_at' => '2023-05-29 18:33:17','updated_at' => '2023-05-29 18:33:17','deleted_at' => NULL),
            array('id' => '2','user_id' => '1','media_file' => 'uploads/media/WLWgVML58lHjPWtis3H1MSsCAy6LWuo1ZzPbBYcE.png','media_size' => '205461','media_type' => 'image','media_name' => 'copy-publish.png','media_extension' => 'png','created_at' => '2023-05-29 18:33:18','updated_at' => '2023-05-29 18:33:18','deleted_at' => NULL),
            array('id' => '3','user_id' => '1','media_file' => 'uploads/media/OnAXEv6O8iK2S0SOvwrcK6gIevuH2Eg2xLXgQJ3g.jpg','media_size' => '221760','media_type' => 'image','media_name' => 'feature-3.jpg','media_extension' => 'jpg','created_at' => '2023-05-29 18:33:18','updated_at' => '2023-05-29 18:33:18','deleted_at' => NULL),
            array('id' => '4','user_id' => '1','media_file' => 'uploads/media/JlMry90Z6zwsOssK0pLIDFmVKGxlxJ4zy4sxxEw8.jpg','media_size' => '313808','media_type' => 'image','media_name' => 'feature-2.jpg','media_extension' => 'jpg','created_at' => '2023-05-29 18:33:18','updated_at' => '2023-05-29 18:33:18','deleted_at' => NULL),
            array('id' => '5','user_id' => '1','media_file' => 'uploads/media/g9DOLLnCDzgFjP5FMbCOcLg23Wh2T5S0DSqKjhh6.jpg','media_size' => '282897','media_type' => 'image','media_name' => 'feature-1.jpg','media_extension' => 'jpg','created_at' => '2023-05-29 18:33:18','updated_at' => '2023-05-29 18:33:18','deleted_at' => NULL),
            array('id' => '6','user_id' => '1','media_file' => 'uploads/media/sNkOGJkxjsX53ITIdFp4m5CrgcOkwVnIHx9mVHe2.jpg','media_size' => '286529','media_type' => 'image','media_name' => 'feature-4.jpg','media_extension' => 'jpg','created_at' => '2023-05-29 18:33:18','updated_at' => '2023-05-29 18:33:18','deleted_at' => NULL),
            array('id' => '7','user_id' => '1','media_file' => 'uploads/media/lOF5TPvuGPcU0HBFb4vyvE11lvXufZemYwZBSgPq.jpg','media_size' => '458111','media_type' => 'image','media_name' => 'feature-top-2.jpg','media_extension' => 'jpg','created_at' => '2023-05-29 18:33:19','updated_at' => '2023-05-29 18:33:19','deleted_at' => NULL),
            array('id' => '8','user_id' => '1','media_file' => 'uploads/media/Kvvt9vH6u55udSDVevRdPjvRlTXLrSTjKTfORIrs.png','media_size' => '264611','media_type' => 'image','media_name' => 'hero-img.png','media_extension' => 'png','created_at' => '2023-05-29 18:33:19','updated_at' => '2023-05-29 18:33:19','deleted_at' => NULL),
            array('id' => '9','user_id' => '1','media_file' => 'uploads/media/gDOTo2s8VY2P01XXBxQnvu61K5MlbuOcQ2DME2Za.png','media_size' => '39931','media_type' => 'image','media_name' => 'hero-robot.png','media_extension' => 'png','created_at' => '2023-05-29 18:33:19','updated_at' => '2023-05-29 18:33:19','deleted_at' => NULL),
            array('id' => '10','user_id' => '1','media_file' => 'uploads/media/eQuDX4Xoxaopqzak7tXBZ12vw208b4ZU1DknerAE.png','media_size' => '142328','media_type' => 'image','media_name' => 'select-advance-option.png','media_extension' => 'png','created_at' => '2023-05-29 18:33:19','updated_at' => '2023-05-29 18:33:19','deleted_at' => NULL),
            array('id' => '11','user_id' => '1','media_file' => 'uploads/media/eCu54yrdjXTNBt9IEdjnnkGjHOGD1xiXZJcDp6MK.png','media_size' => '166740','media_type' => 'image','media_name' => 'select-template.png','media_extension' => 'png','created_at' => '2023-05-29 18:33:19','updated_at' => '2023-05-29 18:33:19','deleted_at' => NULL),
            array('id' => '12','user_id' => '1','media_file' => 'uploads/media/VHLlVTJb3sfnMtm5yCBo3vwBqqwVaKYeIeKdA9Mk.png','media_size' => '173138','media_type' => 'image','media_name' => 'write-prompt.png','media_extension' => 'png','created_at' => '2023-05-29 18:33:19','updated_at' => '2023-05-29 18:33:19','deleted_at' => NULL),
            array('id' => '13','user_id' => '1','media_file' => 'uploads/media/tLTQLIFlP0I9v0lA1MYX5RlZfsDXxjQSbQSZ7cU0.png','media_size' => '4319','media_type' => 'image','media_name' => 'favicon.png','media_extension' => 'png','created_at' => '2023-05-29 18:34:25','updated_at' => '2023-05-29 18:34:25','deleted_at' => NULL),
            array('id' => '14','user_id' => '1','media_file' => 'uploads/media/bwZeX0SwgEwevLfO0yCGNAvxkFq8vdlVAt6swLQX.png','media_size' => '2496','media_type' => 'image','media_name' => 'logo-color.png','media_extension' => 'png','created_at' => '2023-05-29 18:34:25','updated_at' => '2023-05-29 18:34:25','deleted_at' => NULL),
            array('id' => '15','user_id' => '1','media_file' => 'uploads/media/TmrQOAsKTfTmPBmyJ4p5AvxWy4Ff76PLdP5O5Cd0.png','media_size' => '2399','media_type' => 'image','media_name' => 'logo-white.png','media_extension' => 'png','created_at' => '2023-05-29 18:34:25','updated_at' => '2023-05-29 18:34:25','deleted_at' => NULL),
            array('id' => '16','user_id' => '1','media_file' => 'uploads/media/aUtenzo6i8hhJxcHl0n69ZFTZd0j10T9wcxXCt5C.png','media_size' => '794','media_type' => 'image','media_name' => 'logo-icon.png','media_extension' => 'png','created_at' => '2023-05-29 18:36:10','updated_at' => '2023-05-29 18:36:10','deleted_at' => NULL),
            array('id' => '17','user_id' => '1','media_file' => 'uploads/media/PeegEpyC8yJKOncHmcFHO0FzZZflFp0vuM0lbXy3.png','media_size' => '1650','media_type' => 'image','media_name' => 'logo.png','media_extension' => 'png','created_at' => '2023-05-29 18:36:10','updated_at' => '2023-05-29 18:36:10','deleted_at' => NULL),
            array('id' => '18','user_id' => '1','media_file' => 'uploads/media/lxkdLUhhClW2gS7lnGB2o0orGb9UwSn3bdvffnmF.png','media_size' => '3100','media_type' => 'image','media_name' => 'brand-4.png','media_extension' => 'png','created_at' => '2023-05-29 19:01:13','updated_at' => '2023-05-29 19:01:13','deleted_at' => NULL),
            array('id' => '19','user_id' => '1','media_file' => 'uploads/media/88fdY65pfvVX8ikbEHJ96uaVm0XVbXQNAQugzEem.png','media_size' => '2982','media_type' => 'image','media_name' => 'brand-3.png','media_extension' => 'png','created_at' => '2023-05-29 19:01:13','updated_at' => '2023-05-29 19:01:13','deleted_at' => NULL),
            array('id' => '20','user_id' => '1','media_file' => 'uploads/media/fp9a6rz9m8Up4sWGYOvUhnTdQPY6jRkt396xA48F.png','media_size' => '3119','media_type' => 'image','media_name' => 'brand-5.png','media_extension' => 'png','created_at' => '2023-05-29 19:01:13','updated_at' => '2023-05-29 19:01:13','deleted_at' => NULL),
            array('id' => '21','user_id' => '1','media_file' => 'uploads/media/mlvcdXpf4UMUUwPW2PvF0YILNVz7ign3Xex0sBTb.png','media_size' => '2898','media_type' => 'image','media_name' => 'brand-1.png','media_extension' => 'png','created_at' => '2023-05-29 19:01:13','updated_at' => '2023-05-29 19:01:13','deleted_at' => NULL),
            array('id' => '22','user_id' => '1','media_file' => 'uploads/media/sdv4Y3czchHd6E64HH0vp3T1BiCHkY9MJwkiFuj9.png','media_size' => '3023','media_type' => 'image','media_name' => 'brand-2.png','media_extension' => 'png','created_at' => '2023-05-29 19:01:13','updated_at' => '2023-05-29 19:01:13','deleted_at' => NULL),
            array('id' => '23','user_id' => '1','media_file' => 'uploads/media/LrcRjOJv1gVlTHeWB61Y9ONBsYqmunc6dP1GdJqp.png','media_size' => '2491','media_type' => 'image','media_name' => 'brand-7.png','media_extension' => 'png','created_at' => '2023-05-29 19:01:14','updated_at' => '2023-05-29 19:01:14','deleted_at' => NULL),
            array('id' => '24','user_id' => '1','media_file' => 'uploads/media/hLdXSlU2o9xtOgRvbjIb1eaSlynZJeFBLMnHuwdb.png','media_size' => '2592','media_type' => 'image','media_name' => 'brand-8.png','media_extension' => 'png','created_at' => '2023-05-29 19:01:14','updated_at' => '2023-05-29 19:01:14','deleted_at' => NULL),
            array('id' => '25','user_id' => '1','media_file' => 'uploads/media/wBLJC29tMJ8SWRpx15XtZukHCjV7GY7I6rx4X7Ep.png','media_size' => '3732','media_type' => 'image','media_name' => 'brand-6.png','media_extension' => 'png','created_at' => '2023-05-29 19:01:14','updated_at' => '2023-05-29 19:01:14','deleted_at' => NULL),
            array('id' => '26','user_id' => '1','media_file' => 'uploads/media/xwezZUvaxRS9pjH6mI6MfNznDTToN6bqQyrVaPnH.png','media_size' => '2233','media_type' => 'image','media_name' => 'brand-9.png','media_extension' => 'png','created_at' => '2023-05-29 19:01:14','updated_at' => '2023-05-29 19:01:14','deleted_at' => NULL),
            array('id' => '27','user_id' => '1','media_file' => 'uploads/media/KL5lx1UypJXI4mmV7FeblDIUpMyH1PzIrnNKVDuZ.jpg','media_size' => '6325','media_type' => 'image','media_name' => '3.jpg','media_extension' => 'jpg','created_at' => '2023-05-29 19:49:35','updated_at' => '2023-05-29 19:49:35','deleted_at' => NULL),
            array('id' => '28','user_id' => '1','media_file' => 'uploads/media/TDnetBh0y5ppwaYd2hfILXwXih0XaHXecGTlKtGq.jpg','media_size' => '6587','media_type' => 'image','media_name' => '2.jpg','media_extension' => 'jpg','created_at' => '2023-05-29 19:49:35','updated_at' => '2023-05-29 19:49:35','deleted_at' => NULL),
            array('id' => '29','user_id' => '1','media_file' => 'uploads/media/dX6Ci8opVohOjE7axAH4QcC3BSNu0qRiqQH86NBz.jpg','media_size' => '8310','media_type' => 'image','media_name' => '5.jpg','media_extension' => 'jpg','created_at' => '2023-05-29 19:49:35','updated_at' => '2023-05-29 19:49:35','deleted_at' => NULL),
            array('id' => '30','user_id' => '1','media_file' => 'uploads/media/Gk34IvkoLgo0x4BNJLYH6qKyCWnwwBe3TyCWeyBG.jpg','media_size' => '8250','media_type' => 'image','media_name' => '4.jpg','media_extension' => 'jpg','created_at' => '2023-05-29 19:49:35','updated_at' => '2023-05-29 19:49:35','deleted_at' => NULL),
            array('id' => '31','user_id' => '1','media_file' => 'uploads/media/O5GvAe2XxpInTfRZrEWjPITIQTMdIkCtZAJPBTNo.jpg','media_size' => '6851','media_type' => 'image','media_name' => '6.jpg','media_extension' => 'jpg','created_at' => '2023-05-29 19:49:35','updated_at' => '2023-05-29 19:49:35','deleted_at' => NULL),
            array('id' => '32','user_id' => '1','media_file' => 'uploads/media/EAuMFug7lSa1oxXB5kT66fTsTlOysXfCt6pjrawR.jpg','media_size' => '8250','media_type' => 'image','media_name' => '4.jpg','media_extension' => 'jpg','created_at' => '2023-05-29 23:46:20','updated_at' => '2023-05-29 23:46:20','deleted_at' => NULL),
            array('id' => '33','user_id' => '1','media_file' => 'uploads/media/LYHIqdlUyNHWB5FWoWZKKxEbV8uSkfLtL7NEnXDy.png','media_size' => '697','media_type' => 'image','media_name' => 'ai-tools-card-img-1.png','media_extension' => 'png','created_at' => '2024-03-20 09:27:27','updated_at' => '2024-03-20 09:27:27','deleted_at' => NULL),
            array('id' => '34','user_id' => '1','media_file' => 'uploads/media/mIeqkecZ94L5dLgEwUAIz37VzsBrmEWt1OQ3FwdM.png','media_size' => '37984','media_type' => 'image','media_name' => 'Storage Management.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:43','updated_at' => '2024-03-20 09:28:43','deleted_at' => NULL),
            array('id' => '35','user_id' => '1','media_file' => 'uploads/media/zGVMh8rb7HN3cYFcjL6XfS4mPynAnUKJVuXmA1xg.png','media_size' => '26104','media_type' => 'image','media_name' => 'Social Login.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:43','updated_at' => '2024-03-20 09:28:43','deleted_at' => NULL),
            array('id' => '36','user_id' => '1','media_file' => 'uploads/media/MqhdN3swXnuwjyPTi40HK5xHP29gvbquzm9mVOI8.png','media_size' => '2442','media_type' => 'image','media_name' => 'ai-tools-card-img-5.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:43','updated_at' => '2024-03-20 09:28:43','deleted_at' => NULL),
            array('id' => '37','user_id' => '1','media_file' => 'uploads/media/0SmgQ3IcyKR6tlCcppwkpRG0viECFMI1aY9inLQU.png','media_size' => '26601','media_type' => 'image','media_name' => 'Twilio Credentials.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:43','updated_at' => '2024-03-20 09:28:43','deleted_at' => NULL),
            array('id' => '38','user_id' => '1','media_file' => 'uploads/media/6ToWNneIyFmufGCRSjsU04q77SK3Sr3SUS9GCNrg.png','media_size' => '30195','media_type' => 'image','media_name' => 'Google (1).png','media_extension' => 'png','created_at' => '2024-03-20 09:28:43','updated_at' => '2024-03-20 09:28:43','deleted_at' => NULL),
            array('id' => '39','user_id' => '1','media_file' => 'uploads/media/U1NnEAd810RjAPzXNRLGz2BLDYTIyx5lPb8665IT.png','media_size' => '11361','media_type' => 'image','media_name' => 'ai-tools-card-img-2 (1).png','media_extension' => 'png','created_at' => '2024-03-20 09:28:44','updated_at' => '2024-03-20 09:28:44','deleted_at' => NULL),
            array('id' => '40','user_id' => '1','media_file' => 'uploads/media/4frGeilaXbpoXxcySkZtSH4SUkC7sBuVsF0HKvwS.png','media_size' => '1965','media_type' => 'image','media_name' => 'ai-application-icon-3.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:44','updated_at' => '2024-03-20 09:28:44','deleted_at' => NULL),
            array('id' => '41','user_id' => '1','media_file' => 'uploads/media/FKqPeC4XUlq5fhN7bq7Rt1REdfROkeGyULZ3ndYv.png','media_size' => '25156','media_type' => 'image','media_name' => 'affiliate marketing.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:44','updated_at' => '2024-03-20 09:28:44','deleted_at' => NULL),
            array('id' => '42','user_id' => '1','media_file' => 'uploads/media/sUD7MniXjChCU1HMQq2w9z2XUIByO8ud9Z2ZzRYi.png','media_size' => '1153','media_type' => 'image','media_name' => 'ai-application-icon-4.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:44','updated_at' => '2024-03-20 09:28:44','deleted_at' => NULL),
            array('id' => '43','user_id' => '1','media_file' => 'uploads/media/Wtd2ivUyWUe3vQAJP8IP2We8Xr01gX5RAeLhpOMy.png','media_size' => '261101','media_type' => 'image','media_name' => 'testimonial-4-shape-dots.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:44','updated_at' => '2024-03-20 09:28:44','deleted_at' => NULL),
            array('id' => '44','user_id' => '1','media_file' => 'uploads/media/BI6U0vYE0VtATR7YUXy85qeIWDx3wHwAUkiXvgq0.png','media_size' => '1873','media_type' => 'image','media_name' => 'ai-application-icon-2.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:44','updated_at' => '2024-03-20 09:28:44','deleted_at' => NULL),
            array('id' => '45','user_id' => '1','media_file' => 'uploads/media/8xCmOJIHloGGkA1KaRNQn1D67IDp7NgyJbGu4kjd.png','media_size' => '1778','media_type' => 'image','media_name' => 'ai-application-icon-1.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:44','updated_at' => '2024-03-20 09:28:44','deleted_at' => NULL),
            array('id' => '46','user_id' => '1','media_file' => 'uploads/media/oY0p5qYKwuCghptcfDYr4SrhIw3yxKfeYhWU1qFz.png','media_size' => '24201','media_type' => 'image','media_name' => 'AI PDF Chat.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:44','updated_at' => '2024-03-20 09:28:44','deleted_at' => NULL),
            array('id' => '47','user_id' => '1','media_file' => 'uploads/media/lyV6xTRnHNzjC0zUuVw8MAEpWUYEH0LlKnWa10DA.png','media_size' => '79987','media_type' => 'image','media_name' => 'AI VISION.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:45','updated_at' => '2024-03-20 09:28:45','deleted_at' => NULL),
            array('id' => '48','user_id' => '1','media_file' => 'uploads/media/u7Z7gTZdCNnRKSm8tGuWTJFDUxKTeC2KRdJpDe40.png','media_size' => '61002','media_type' => 'image','media_name' => 'AI Chat to image.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:45','updated_at' => '2024-03-20 09:28:45','deleted_at' => NULL),
            array('id' => '49','user_id' => '1','media_file' => 'uploads/media/ppP2H29Vcnd43Q3KY46XxnuBzjLBc194dXyCalgn.png','media_size' => '26503','media_type' => 'image','media_name' => 'AI Chat.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:45','updated_at' => '2024-03-20 09:28:45','deleted_at' => NULL),
            array('id' => '50','user_id' => '1','media_file' => 'uploads/media/7GPtw5YJS5HSZXxMiftBTWRiaUM8EkrCswvwKSq4.png','media_size' => '30979','media_type' => 'image','media_name' => 'azure.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:45','updated_at' => '2024-03-20 09:28:45','deleted_at' => NULL),
            array('id' => '51','user_id' => '1','media_file' => 'uploads/media/xqTwmjLyhxKOA62zQt8IPXXM4dyuB7M8amQaiaU4.png','media_size' => '10768','media_type' => 'image','media_name' => 'IIElevenlabs.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:45','updated_at' => '2024-03-20 09:28:45','deleted_at' => NULL),
            array('id' => '52','user_id' => '1','media_file' => 'uploads/media/n6BdfTgN7JaRKWG3UujL7MAWG5ukwJ0WIPJXcXPY.png','media_size' => '23124','media_type' => 'image','media_name' => 'Open AI.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:45','updated_at' => '2024-03-20 09:28:45','deleted_at' => NULL),
            array('id' => '53','user_id' => '1','media_file' => 'uploads/media/XEHWIW7ELu12jB7fsQv1kT6l19N7bLgoeLitOWep.png','media_size' => '12371','media_type' => 'image','media_name' => 'Google.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:45','updated_at' => '2024-03-20 09:28:45','deleted_at' => NULL),
            array('id' => '54','user_id' => '1','media_file' => 'uploads/media/vfVTApPecKb380ZX3TZifUZtDEFFaG8J3EYv5Pxv.png','media_size' => '23080','media_type' => 'image','media_name' => 'ai-image-card-2.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:45','updated_at' => '2024-03-20 09:28:45','deleted_at' => NULL),
            array('id' => '55','user_id' => '1','media_file' => 'uploads/media/fK5jk3Wyo7VaqtQatWUtUxdE4LhXpiZzaBXpJs4s.png','media_size' => '9609','media_type' => 'image','media_name' => 'ai-image-card-3.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:45','updated_at' => '2024-03-20 09:28:45','deleted_at' => NULL),
            array('id' => '56','user_id' => '1','media_file' => 'uploads/media/VeXX49YTJvxdAToyZOHANuOa4UzoNfEDgAnY9ZdU.png','media_size' => '13123','media_type' => 'image','media_name' => 'ai-image-card-1.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:45','updated_at' => '2024-03-20 09:28:45','deleted_at' => NULL),
            array('id' => '57','user_id' => '1','media_file' => 'uploads/media/nZUWEvvYh0PDFbJWuwc5EBSltIbY3SmsZ2xUu7ka.png','media_size' => '16977','media_type' => 'image','media_name' => 'Public Blog.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:45','updated_at' => '2024-03-20 09:28:45','deleted_at' => NULL),
            array('id' => '58','user_id' => '1','media_file' => 'uploads/media/D6AO0HT3Q1QyGQHR5w4FBAEcfPMhNOb4uYX63Qa0.png','media_size' => '31504','media_type' => 'image','media_name' => 'Create Outline.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:45','updated_at' => '2024-03-20 09:28:45','deleted_at' => NULL),
            array('id' => '59','user_id' => '1','media_file' => 'uploads/media/nwIDceo3SItd6Cu7EcqQQY2r3ZdVbIEcLlKYe2Dc.png','media_size' => '24715','media_type' => 'image','media_name' => 'AI BLOG (1).png','media_extension' => 'png','created_at' => '2024-03-20 09:28:46','updated_at' => '2024-03-20 09:28:46','deleted_at' => NULL),
            array('id' => '60','user_id' => '1','media_file' => 'uploads/media/kkU5aBM1vLUFeuIpjXAUPV4qbrOfN5S6moxJ9Ydt.png','media_size' => '22357','media_type' => 'image','media_name' => 'AI Full Blog.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:46','updated_at' => '2024-03-20 09:28:46','deleted_at' => NULL),
            array('id' => '61','user_id' => '1','media_file' => 'uploads/media/vaH1KHg5bv0A8edjRpmcoCttVjDXj9TxDeYvqLND.png','media_size' => '32665','media_type' => 'image','media_name' => 'Email Templated.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:46','updated_at' => '2024-03-20 09:28:46','deleted_at' => NULL),
            array('id' => '62','user_id' => '1','media_file' => 'uploads/media/Bu9UJiU4kzKLxSvmCGdY8Wuj897zunyrcbbJg0TW.png','media_size' => '25277','media_type' => 'image','media_name' => 'AI Blog.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:46','updated_at' => '2024-03-20 09:28:46','deleted_at' => NULL),
            array('id' => '63','user_id' => '1','media_file' => 'uploads/media/31FYJoAr89IelzAjbgDuBjkBVzM4iiFrfejdcQ3h.png','media_size' => '34508','media_type' => 'image','media_name' => 'Fun or Quote.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:46','updated_at' => '2024-03-20 09:28:46','deleted_at' => NULL),
            array('id' => '64','user_id' => '1','media_file' => 'uploads/media/NqvX51lSTzataYvD0pktquxbpFwnGtzlx7kLbYt2.png','media_size' => '22028','media_type' => 'image','media_name' => 'Social Media Templated.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:46','updated_at' => '2024-03-20 09:28:46','deleted_at' => NULL),
            array('id' => '65','user_id' => '1','media_file' => 'uploads/media/XLXUm4rUow6zmTvTEaVJYH4CyOy6xg1vrRKIkAx3.png','media_size' => '5797','media_type' => 'image','media_name' => 'ai-tools-card-img-4.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:46','updated_at' => '2024-03-20 09:28:46','deleted_at' => NULL),
            array('id' => '66','user_id' => '1','media_file' => 'uploads/media/wLOBj2qS9IzJTpOofmVWAtxIgrOLAcJSes3W6NDB.png','media_size' => '70105','media_type' => 'image','media_name' => 'map.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:46','updated_at' => '2024-03-20 09:28:46','deleted_at' => NULL),
            array('id' => '67','user_id' => '1','media_file' => 'uploads/media/2XgEhTjyVbV4Qp8spoWsZrWRY7S9JA1xD9sICU6S.png','media_size' => '22103','media_type' => 'image','media_name' => 'ai-tools-card-img-3-globe.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:46','updated_at' => '2024-03-20 09:28:46','deleted_at' => NULL),
            array('id' => '68','user_id' => '1','media_file' => 'uploads/media/3Fmyl2cMxv9WKnIq9KJ0KqTfOqmUVY58htSJdimN.png','media_size' => '11361','media_type' => 'image','media_name' => 'ai-tools-card-img-2.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:46','updated_at' => '2024-03-20 09:28:46','deleted_at' => NULL),
            array('id' => '69','user_id' => '1','media_file' => 'uploads/media/EZRK1vXhyBSsS5rx4Y5QGAfYzClfRhxAgq4V9qpO.png','media_size' => '5704','media_type' => 'image','media_name' => 'ai-tools-card-shape-1.png','media_extension' => 'png','created_at' => '2024-03-20 09:28:46','updated_at' => '2024-03-20 09:28:46','deleted_at' => NULL),
            array('id' => '70','user_id' => '1','media_file' => 'uploads/media/bsixvuR7PtPwTsxo4WiRRwePxqBYrVtPjLhxZxCN.png','media_size' => '16967','media_type' => 'image','media_name' => 'affir.png','media_extension' => 'png','created_at' => '2024-03-20 09:51:16','updated_at' => '2024-03-20 09:51:16','deleted_at' => NULL),
            array('id' => '71','user_id' => '1','media_file' => 'uploads/media/HBszinquVVNnE8VRJeXyaxEwwCnEk3uLkoYofmX3.png','media_size' => '17218','media_type' => 'image','media_name' => 'affir.png','media_extension' => 'png','created_at' => '2024-03-20 09:52:22','updated_at' => '2024-03-20 09:52:22','deleted_at' => NULL),
            array('id' => '72','user_id' => '1','media_file' => 'uploads/media/qHVNZIW4EPy13v1TePIysBXpAqPWEihOS2owtJYg.png','media_size' => '36256','media_type' => 'image','media_name' => 'ai-image-slide-1.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:36','updated_at' => '2024-03-20 10:23:36','deleted_at' => NULL),
            array('id' => '73','user_id' => '1','media_file' => 'uploads/media/w1prPacnTuPvCdnmoKsf0olIi5sF2VxfNWiFsdqb.png','media_size' => '40999','media_type' => 'image','media_name' => 'ai-image-slide-2.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:36','updated_at' => '2024-03-20 10:23:36','deleted_at' => NULL),
            array('id' => '74','user_id' => '1','media_file' => 'uploads/media/BUtcZ68o5zpNANxj38HNmI7R4mDfFEWGbhS4y4M8.png','media_size' => '239877','media_type' => 'image','media_name' => 'ai-featured-video-img-3.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:36','updated_at' => '2024-03-20 10:23:36','deleted_at' => NULL),
            array('id' => '75','user_id' => '1','media_file' => 'uploads/media/vMZ95Vilv0Qi6qO4rbx20fHPQurfzabU9HPjoE3c.png','media_size' => '188633','media_type' => 'image','media_name' => 'ai-featured-video-img-2.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:36','updated_at' => '2024-03-20 10:23:36','deleted_at' => NULL),
            array('id' => '76','user_id' => '1','media_file' => 'uploads/media/8u8g3zdRrb6EbiuZ1msdRoavDmaxsUbIgylzb7Av.png','media_size' => '159298','media_type' => 'image','media_name' => 'ai-featured-video-img-4.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:36','updated_at' => '2024-03-20 10:23:36','deleted_at' => NULL),
            array('id' => '77','user_id' => '1','media_file' => 'uploads/media/76CwWSrcqNpKwOC4xyBdIcLaqHPZkfvGZXYjO93y.png','media_size' => '43791','media_type' => 'image','media_name' => 'ai-image-slide-5.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:37','updated_at' => '2024-03-20 10:23:37','deleted_at' => NULL),
            array('id' => '78','user_id' => '1','media_file' => 'uploads/media/s6Cejmb02gSLbpOYiZzFQR3hlhkpwhyS4e1oIpNQ.png','media_size' => '34001','media_type' => 'image','media_name' => 'ai-image-slide-6.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:37','updated_at' => '2024-03-20 10:23:37','deleted_at' => NULL),
            array('id' => '79','user_id' => '1','media_file' => 'uploads/media/LpfohnS7fNJ98uBaLyBB5lf8D0xZNO8R1SZL25bQ.png','media_size' => '34840','media_type' => 'image','media_name' => 'ai-image-slide-9.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:37','updated_at' => '2024-03-20 10:23:37','deleted_at' => NULL),
            array('id' => '80','user_id' => '1','media_file' => 'uploads/media/7Quhoi9MaqmENZ6hQjnkyUuMkCyge70ZPbJdQ7zk.png','media_size' => '38299','media_type' => 'image','media_name' => 'ai-image-slide-10.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:37','updated_at' => '2024-03-20 10:23:37','deleted_at' => NULL),
            array('id' => '81','user_id' => '1','media_file' => 'uploads/media/QMHd768U8eoUxuQoK2J9h1CupxsmXyxcE9XlfMFK.png','media_size' => '32728','media_type' => 'image','media_name' => 'ai-image-slide-11.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:37','updated_at' => '2024-03-20 10:23:37','deleted_at' => NULL),
            array('id' => '82','user_id' => '1','media_file' => 'uploads/media/92Rikf03wOrWggAeRm8PQCZfBzRtMJLBrwjAbTTU.png','media_size' => '41043','media_type' => 'image','media_name' => 'ai-image-slide-12.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:37','updated_at' => '2024-03-20 10:23:37','deleted_at' => NULL),
            array('id' => '83','user_id' => '1','media_file' => 'uploads/media/FlSHC8qUW5eVMOEWZc1jtJdwqeBQ8QNJWbPyXurI.png','media_size' => '48369','media_type' => 'image','media_name' => 'ai-image-slide-13.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:37','updated_at' => '2024-03-20 10:23:37','deleted_at' => NULL),
            array('id' => '84','user_id' => '1','media_file' => 'uploads/media/9WSCLmtY3vWtsK3Nt7R4UsLWEyXamk4M08qs1Kev.png','media_size' => '29380','media_type' => 'image','media_name' => 'ai-image-slide-15.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:37','updated_at' => '2024-03-20 10:23:37','deleted_at' => NULL),
            array('id' => '85','user_id' => '1','media_file' => 'uploads/media/ffFR6R4lm6UlPiDs5kXbGUpFGrPawAIVM4N0ux3S.png','media_size' => '32098','media_type' => 'image','media_name' => 'ai-image-slide-16.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:37','updated_at' => '2024-03-20 10:23:37','deleted_at' => NULL),
            array('id' => '86','user_id' => '1','media_file' => 'uploads/media/CW4Mdr8igX30Q3m02ntRLAonfjig44K7SstXSQOx.png','media_size' => '222564','media_type' => 'image','media_name' => 'insight-1.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:37','updated_at' => '2024-03-20 10:23:37','deleted_at' => NULL),
            array('id' => '87','user_id' => '1','media_file' => 'uploads/media/ejOyRxBK6P3kE6Vr7e9FTduGhTwJ4RCKangRzEbK.png','media_size' => '165383','media_type' => 'image','media_name' => 'insight-2.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:38','updated_at' => '2024-03-20 10:23:38','deleted_at' => NULL),
            array('id' => '88','user_id' => '1','media_file' => 'uploads/media/lhAEEpt9G0pMdZfAH6spBcr7rYtEphF9bVThs1FR.png','media_size' => '239360','media_type' => 'image','media_name' => 'insight-3.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:38','updated_at' => '2024-03-20 10:23:38','deleted_at' => NULL),
            array('id' => '89','user_id' => '1','media_file' => 'uploads/media/NpyhziYxqZfYX1hrPCPDLLDgv5ZvqJT5GzahL6yt.png','media_size' => '145029','media_type' => 'image','media_name' => 'popular-post-1.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:38','updated_at' => '2024-03-20 10:23:38','deleted_at' => NULL),
            array('id' => '90','user_id' => '1','media_file' => 'uploads/media/rgD3lq6imYfhJEsTF5EZd69ht3VnbPb3ITxiEDPM.png','media_size' => '133016','media_type' => 'image','media_name' => 'popular-post-2.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:38','updated_at' => '2024-03-20 10:23:38','deleted_at' => NULL),
            array('id' => '91','user_id' => '1','media_file' => 'uploads/media/T4Vzc5QJ3ya77Z4IOcwHocZUxIxsaNiEeEOFGCim.png','media_size' => '103769','media_type' => 'image','media_name' => 'popular-post-3.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:38','updated_at' => '2024-03-20 10:23:38','deleted_at' => NULL),
            array('id' => '92','user_id' => '1','media_file' => 'uploads/media/MLz5akOToNx4ET1T4CojXeEvu9WH6QhgP9cOhY1O.png','media_size' => '159576','media_type' => 'image','media_name' => 'popular-post-4.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:38','updated_at' => '2024-03-20 10:23:38','deleted_at' => NULL),
            array('id' => '93','user_id' => '1','media_file' => 'uploads/media/1DLUMsmNyGy8PeF50xteMxGUSQI2AoBkVMdFKV1M.png','media_size' => '132077','media_type' => 'image','media_name' => 'popular-post-5.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:38','updated_at' => '2024-03-20 10:23:38','deleted_at' => NULL),
            array('id' => '94','user_id' => '1','media_file' => 'uploads/media/AbWfW3NOns772PGy2pL6pe8u1vXVWVFStUMqowol.png','media_size' => '161328','media_type' => 'image','media_name' => 'popular-post-6.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:38','updated_at' => '2024-03-20 10:23:38','deleted_at' => NULL),
            array('id' => '95','user_id' => '1','media_file' => 'uploads/media/7Eve5kxuIu77CjcO8453V7HDdRGzHcvkbbT1ceNG.png','media_size' => '129005','media_type' => 'image','media_name' => 'popular-post-7.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:39','updated_at' => '2024-03-20 10:23:39','deleted_at' => NULL),
            array('id' => '96','user_id' => '1','media_file' => 'uploads/media/R0PTaXlhzedIeJx4xST1Ujlv7FBRV8A2UscdsDim.png','media_size' => '156284','media_type' => 'image','media_name' => 'popular-post-8.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:39','updated_at' => '2024-03-20 10:23:39','deleted_at' => NULL),
            array('id' => '97','user_id' => '1','media_file' => 'uploads/media/eIzd6hHZOalcnwrPMqaHU7AqQuZqjY05u8pIoxHn.png','media_size' => '153036','media_type' => 'image','media_name' => 'popular-post-9.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:39','updated_at' => '2024-03-20 10:23:39','deleted_at' => NULL),
            array('id' => '98','user_id' => '1','media_file' => 'uploads/media/YmXrreIeXCCjjROng5N58MnZFB7AycRvQZgdQcPH.png','media_size' => '141882','media_type' => 'image','media_name' => 'popular-post-10.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:39','updated_at' => '2024-03-20 10:23:39','deleted_at' => NULL),
            array('id' => '99','user_id' => '1','media_file' => 'uploads/media/z6ghEhPROsxDnURSgtpNo83eBmhBMkbG5ezD5M3E.png','media_size' => '136274','media_type' => 'image','media_name' => 'popular-post-11.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:39','updated_at' => '2024-03-20 10:23:39','deleted_at' => NULL),
            array('id' => '100','user_id' => '1','media_file' => 'uploads/media/cHfOYmId3reG8spUc0PxaGG742BRXEWauTn4rSLa.png','media_size' => '119588','media_type' => 'image','media_name' => 'popular-post-12.png','media_extension' => 'png','created_at' => '2024-03-20 10:23:39','updated_at' => '2024-03-20 10:23:39','deleted_at' => NULL)
          ));
    }
}