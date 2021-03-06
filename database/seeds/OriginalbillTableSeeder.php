<?php namespace Sanatorium\Bill\Database\Seeds;

use DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class OriginalbillTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	    $bills = [
            [1, 2015001, '2015-01-12', '2015-01-26', 'Bank transfer', 2015001, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 2, 1, 2015, '2015-08-14 11:06:24', '2015-08-14 11:06:24'],
            [3, 2015002, '2015-08-17', '2015-08-31', 'Bank transfer', 2015002, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 3, 1, 2015, '2015-08-17 16:55:11', '2015-08-17 16:55:11'],
            [5, 2015003, '2015-09-03', '2015-09-17', 'Bank transfer', 2015003, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 4, 1, 2015, '2015-09-03 15:33:29', '2015-09-03 15:33:29'],
            [6, 2015004, '2015-09-10', '2015-09-24', 'Bank transfer', 2015004, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 5, 1, 2015, '2015-09-10 11:40:55', '2015-09-10 11:40:55'],
            [8, 2015005, '2015-09-15', '2015-10-06', 'Bank transfer', 2015005, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 6, 1, 2015, '2015-09-15 13:26:49', '2015-09-15 13:26:49'],
            [9, 2015006, '2015-09-30', '2015-10-21', 'Bank transfer', 2015006, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 7, 1, 2015, '2015-09-30 12:40:02', '2015-09-30 12:40:02'],
            [10, 2015007, '2015-10-05', '2015-10-19', 'Bank transfer', 2015007, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 4, 1, 2015, '2015-10-05 13:41:36', '2015-10-05 13:41:36'],
            [11, 2015008, '2015-10-07', '2015-10-21', 'Bank transfer', 2015008, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 6, 1, 2015, '2015-10-07 10:18:23', '2015-10-07 10:18:24'],
            [12, 2015009, '2015-10-07', '2015-10-21', 'Bank transfer', 2015009, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 8, 1, 2015, '2015-10-07 15:42:07', '2015-10-07 15:42:07'],
            [13, 2015010, '2015-10-12', '2015-10-22', 'Bank transfer', 2015010, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 9, 1, 2015, '2015-10-12 12:05:36', '2015-10-12 12:05:36'],
            [14, 2015011, '2015-10-16', '2015-10-30', 'Bank transfer', 2015011, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 8, 1, 2015, '2015-10-16 14:17:04', '2015-10-16 14:17:04'],
            [19, 2015013, '2015-11-10', '2015-11-24', 'Bank transfer', 2015013, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 10, 1, 2015, '2015-11-10 17:38:09', '2015-11-10 17:38:09'],
            [20, 2015014, '2015-11-16', '2015-12-16', 'Bank transfer', 2015014, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 11, 1, 2015, '2015-11-14 14:46:33', '2015-11-14 14:46:33'],
            [21, 2015014, '2015-11-19', '2015-12-03', 'Bank transfer', 2015014, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 4, 1, 2015, '2015-11-19 13:52:02', '2015-11-19 13:52:02'],
            [22, 2015015, '2015-11-25', '2015-12-09', 'Bank transfer', 2015015, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 7, 1, 2015, '2015-11-25 09:31:07', '2015-11-25 09:31:07'],
            [23, 2015016, '2015-12-04', '2015-12-18', 'Bank transfer', 2015016, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 12, 1, 2015, '2015-12-04 13:10:08', '2015-12-04 13:10:08'],
            [24, 2015017, '2015-12-08', '2015-12-22', 'Bank transfer', 2015017, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 10, 1, 2015, '2015-12-08 11:40:28', '2015-12-08 11:40:28'],
            [25, 2015017, '2015-12-08', '2015-12-22', 'Bank transfer', 2015017, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 10, 1, 2015, '2015-12-08 11:45:45', '2015-12-08 11:45:45'],
            [26, 2015019, '2015-12-08', '2015-12-22', 'Bank transfer', 2015019, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 13, 1, 2015, '2015-12-08 14:02:24', '2015-12-08 14:02:24'],
            [27, 2015020, '2015-12-09', '2015-12-23', 'Bank transfer', 2015020, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 7, 1, 2015, '2015-12-09 09:43:10', '2015-12-09 09:43:10'],
            [28, 2015021, '2015-12-14', '2015-12-28', 'Bank transfer', 2015021, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 10, 1, 2015, '2015-12-14 14:15:03', '2015-12-14 14:15:03'],
            [29, 2015022, '2015-12-22', '2016-01-05', 'Bank transfer', 2015022, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 10, 1, 2015, '2015-12-22 13:14:34', '2015-12-22 13:14:34'],
            [30, 2015023, '2015-12-22', '2016-01-05', 'Bank transfer', 2015023, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 10, 1, 2015, '2015-12-22 14:15:00', '2015-12-22 14:15:00'],
            [31, 2016001, '2016-01-06', '2016-02-05', 'Bank transfer', 2016001, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 14, 1, 2016, '2016-01-06 11:59:54', '2016-01-06 11:59:54'],
            [32, 2016002, '2016-01-21', '2016-02-04', 'Bank transfer', 2016002, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 6, 1, 2016, '2016-01-21 09:59:29', '2016-01-21 09:59:29'],
            [33, 2016003, '2016-02-08', '2016-02-22', 'Bank transfer', 2016003, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 6, 1, 2016, '2016-02-08 09:04:38', '2016-02-08 09:04:38'],
            [34, 2016004, '2016-02-10', '2016-02-24', 'Bank transfer', 2016004, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 4, 1, 2016, '2016-02-10 09:13:25', '2016-02-10 09:13:25'],
            [35, 2016005, '2016-02-15', '2016-02-29', 'Bank transfer', 2016005, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 10, 1, 2016, '2016-02-15 11:16:29', '2016-02-15 11:16:29'],
            [36, 2016006, '2016-03-07', '2016-03-21', 'Bank transfer', 2016006, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 10, 1, 2016, '2016-03-07 17:51:32', '2016-03-07 17:51:32'],
            [37, 2016007, '2016-03-09', '2016-03-23', 'Bank transfer', 2016007, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 4, 1, 2016, '2016-03-09 11:28:16', '2016-03-09 11:28:16'],
            [38, 2016008, '2016-04-08', '2016-04-22', 'Bank transfer', 2016008, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 10, 1, 2016, '2016-04-18 16:23:19', '2016-04-18 16:23:19'],
            [39, 2016009, '2016-04-18', '2016-05-02', 'Bank transfer', 2016009, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 4, 1, 2016, '2016-04-18 16:25:37', '2016-04-18 16:25:37'],
            [40, 2016010, '2016-05-06', '2016-05-20', 'Bank transfer', 2016010, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 10, 1, 2016, '2016-05-06 08:29:48', '2016-05-06 08:29:48'],
            [41, 2016011, '2016-06-03', '2016-06-17', 'Bank transfer', 2016011, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 12, 1, 2016, '2016-06-03 10:32:24', '2016-06-03 10:32:24'],
            [42, 2016012, '2016-06-03', '2016-06-17', 'Bank transfer', 2016012, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 12, 1, 2016, '2016-06-03 10:35:15', '2016-06-03 10:35:15'],
            [43, 2016012, '2016-06-03', '2016-06-17', 'Bank transfer', 2016012, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 12, 1, 2016, '2016-06-03 10:36:28', '2016-06-03 10:36:28'],
            [44, 2016014, '2016-06-07', '2016-06-21', 'Bank transfer', 2016014, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 10, 1, 2016, '2016-06-07 12:41:27', '2016-06-07 12:41:27'],
            [45, 2016015, '2016-07-07', '2016-07-21', 'Bank transfer', 2016015, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 10, 1, 2016, '2016-07-07 13:08:06', '2016-07-07 13:08:06'],
            [46, 2016016, '2016-07-13', '2016-07-27', 'Bank transfer', 2016016, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 2, 1, 2016, '2016-07-13 12:58:16', '2016-07-13 12:58:16'],
            [47, 2016016, '2016-07-13', '2016-07-27', 'Bank transfer', 2016016, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 15, 1, 2016, '2016-07-13 13:01:00', '2016-07-13 13:01:00'],
            [48, 2016018, '2016-07-14', '2016-07-28', 'Bank transfer', 2016018, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 12, 1, 2016, '2016-07-14 18:12:01', '2016-07-14 18:12:01'],
            [49, 2016019, '2016-08-08', '2016-08-22', 'Bank transfer', 2016019, '1936998183/0800', 'CZ91 0800 0000 0019 3699 8183', 'GIBACZPX', 10, 1, 2016, '2016-08-08 09:42:34', '2016-08-08 09:42:34']
        ];

	    $jobs = [
            [1, 1, 1, 'schuloffense-gig.de programming', '290', 'EUR', '2015-08-14 11:06:24', '2015-08-14 11:06:24'],
            [2, 3, 1, 'Coretechnologie website', '300', 'EUR', '2015-08-17 16:55:11', '2015-08-17 16:55:11'],
            [3, 4, 1, 'Slingsby website adjustments (40 hours)', '4000', 'EUR', '2015-09-03 15:32:54', '2015-09-03 15:32:54'],
            [4, 5, 1, 'Slingsby website adjustments (40 hours)', '400', 'EUR', '2015-09-03 15:33:29', '2015-09-03 15:33:29'],
            [5, 6, 1, 'Posts to PDF (album) plugin', '250', 'EUR', '2015-09-10 11:40:55', '2015-09-10 11:40:55'],
            [6, 7, 1, 'Aplikace Hoofmanager (alfa verze)', '15 000', 'Kč', '2015-09-15 13:25:27', '2015-09-15 13:25:27'],
            [7, 8, 1, 'Aplikace Hoofmanager (alfa verze)', '15 000', 'Kč', '2015-09-15 13:26:49', '2015-09-15 13:26:49'],
            [8, 9, 1, 'HTML5 banner', '500', 'Kč', '2015-09-30 12:40:02', '2015-09-30 12:40:02'],
            [9, 10, 1, 'Slingsby - account area, fixes, adjustments (25 hours)', '250', 'EUR', '2015-10-05 13:41:36', '2015-10-05 13:41:36'],
            [10, 11, 1, 'Aplikace Hoofmanager (alfa verze)', '18000', 'Kč', '2015-10-07 10:18:24', '2015-10-07 10:18:24'],
            [11, 12, 1, 'Network enable plugin Woocommerce list/grid', '10', 'EUR', '2015-10-07 15:42:07', '2015-10-07 15:42:07'],
            [12, 13, 1, 'Bar-ista.de coding & adjustments', '500', 'EUR', '2015-10-12 12:05:36', '2015-10-12 12:05:36'],
            [13, 14, 1, 'Infinite scroll jscroll', '10', 'EUR', '2015-10-16 14:17:04', '2015-10-16 14:17:04'],
            [14, 15, 1, 'Tweaks and fixes on Bold theme', '10', 'EUR', '2015-10-30 12:44:43', '2015-10-30 12:44:43'],
            [15, 16, 1, 'Faible for Label - Prestashop Adjustments', '100', 'EUR', '2015-11-10 16:45:43', '2015-11-10 16:45:43'],
            [16, 17, 1, 'Faible for Label - Prestashop Adjustments', '100', 'EUR', '2015-11-10 16:48:15', '2015-11-10 16:48:15'],
            [17, 18, 1, 'Sledge meetings - scaffolding and initial development', '280', 'EUR', '2015-11-10 17:37:59', '2015-11-10 17:37:59'],
            [18, 19, 1, 'Sledge meetings - scaffolding and initial development', '280', 'EUR', '2015-11-10 17:38:09', '2015-11-10 17:38:09'],
            [19, 20, 1, 'Sumava - aplikace pro info panel', '25000', 'Kč', '2015-11-14 14:46:33', '2015-11-14 14:46:33'],
            [20, 21, 1, 'Friars walk', '400', 'EUR', '2015-11-19 13:52:02', '2015-11-19 13:52:02'],
            [21, 22, 1, 'Assassins Creed - reskiny (27h)', '8100', 'Kč', '2015-11-25 09:31:07', '2015-11-25 09:31:07'],
            [22, 23, 1, 'One of a Million Musikfestival 2016', '400', 'EUR', '2015-12-04 13:10:08', '2015-12-04 13:10:08'],
            [23, 24, 1, 'Mediabuyer - External source report', '200', 'EUR', '2015-12-08 11:40:28', '2015-12-08 11:40:28'],
            [24, 25, 1, 'Mediabuyer - External source report', '200', 'EUR', '2015-12-08 11:45:45', '2015-12-08 11:45:45'],
            [25, 26, 1, 'Sorsya.cz web', '20000', 'Kč', '2015-12-08 14:02:24', '2015-12-08 14:02:24'],
            [26, 27, 1, 'Rainbow six: Siege (reskiny + bannery)', '8100', 'Kč', '2015-12-09 09:43:10', '2015-12-09 09:43:10'],
            [27, 28, 1, 'Sledge capacity module', '1850', 'EUR', '2015-12-14 14:15:03', '2015-12-14 14:15:03'],
            [28, 29, 1, 'Sledge module development', '925', 'EUR', '2015-12-22 13:14:34', '2015-12-22 13:14:34'],
            [29, 30, 1, 'Mediabuyer - external report phase 2', '300', 'EUR', '2015-12-22 14:15:00', '2015-12-22 14:15:00'],
            [30, 31, 1, 'Webová prezentace Future trading', '5000', 'Kč', '2016-01-06 11:59:54', '2016-01-06 11:59:54'],
            [31, 32, 1, 'Upravy a zmeny Hoofmanager', '10000', 'Kč', '2016-01-21 09:59:29', '2016-01-21 09:59:29'],
            [32, 33, 1, 'Vizitky, etikety, e-mail templaty, podklady pro web', '10000', 'Kč', '2016-02-08 09:04:38', '2016-02-08 09:04:38'],
            [33, 34, 1, 'Uncovered development (99hours)', '990', 'EUR', '2016-02-10 09:13:25', '2016-02-10 09:13:25'],
            [34, 35, 1, 'Yori - startup profiles', '700', 'EUR', '2016-02-15 11:16:29', '2016-02-15 11:16:29'],
            [35, 36, 1, 'YORI - Startup profiles database', '1200', 'EUR', '2016-03-07 17:51:32', '2016-03-07 17:51:32'],
            [36, 37, 1, 'Greenkite 42hrs, Gyle 11hrs, Nashbond 2hrs, Nulty SEO 9hrs, Seafish 15hrs, Skyinvestment 9hrs ', '880', 'EUR', '2016-03-09 11:28:16', '2016-03-09 11:28:16'],
            [37, 38, 1, 'YORI - Startup profiles database + External Report tool', '1200', 'EUR', '2016-04-18 16:23:19', '2016-04-18 16:23:19'],
            [38, 39, 1, 'Kortrijk 23hrs, Seafish 18hrs, Greenkite 18hrs, Nashbond 2hrs, Gyle 1hr, Skyinvestment 1hr', '630', 'EUR', '2016-04-18 16:25:37', '2016-04-18 16:25:37'],
            [39, 40, 1, 'Benchmarketing Adigami API, Teamhero, Yori', '1200', 'EUR', '2016-05-06 08:29:48', '2016-05-06 08:29:48'],
            [40, 41, 1, 'Royal Baden - Coming soon page', '400', 'CHF', '2016-06-03 10:32:24', '2016-06-03 10:32:24'],
            [41, 42, 1, 'Royal Baden - Coming soon page', '1500', 'CHF', '2016-06-03 10:35:15', '2016-06-03 10:35:15'],
            [42, 43, 1, 'Literarische Gesellschaft Baden', '1800', 'CHF', '2016-06-03 10:36:28', '2016-06-03 10:36:28'],
            [43, 44, 1, 'YORI - Startup profiles database, Mediabuyer External Report tool, Teamhero - Resources and Inventory', '1300', 'EUR', '2016-06-07 12:41:27', '2016-06-07 12:41:27'],
            [44, 45, 1, 'EXS - Expert Services, SUD - Sturm und Drang, SUD Profiles - Sturm und Drag profiles', '1300', 'EUR', '2016-07-07 13:08:06', '2016-07-07 13:08:06'],
            [45, 46, 1, 'Kokoza mapa vyvoj', '16650', 'Kč', '2016-07-13 12:58:16', '2016-07-13 12:58:16'],
            [46, 47, 1, 'Kokoza mapa vyvoj', '16650', 'Kč', '2016-07-13 13:01:00', '2016-07-13 13:01:00'],
            [47, 48, 1, 'Royal Baden webpage development', '1200', 'CHF', '2016-07-14 18:12:01', '2016-07-14 18:12:01'],
            [48, 49, 1, 'EXS - Expert Services, SUD - Sturm und Drang, SUD Profiles - Sturm und Drag profiles', '1300', 'EUR', '2016-08-08 09:42:34', '2016-08-08 09:42:34']
        ];

        $billsRepo = app('Sanatorium\Bill\Repositories\Bill\BillRepositoryInterface');
        $jobsRepo = app('Sanatorium\Bill\Repositories\Job\JobRepositoryInterface');

        foreach( $bills as $bill ) {

            $billsRepo->firstOrCreate([
                'id' => $bill[0],
                'num' => $bill[1],
                'issue_date' => $bill[2],
                'due_date' => $bill[3],
                'means_of_payment' => $bill[4],
                'payment_symbol' => $bill[5],
                'account_number' => $bill[6],
                'iban' => $bill[7],
                'swift' => $bill[8],
                'buyer_id' => $bill[9],
                'supplier_id' => $bill[10],
                'year' => $bill[11],
                'created_at' => $bill[12],
                'updated_at' => $bill[13],
            ]);

        }

        foreach ( $jobs as $job ) {

            $jobsRepo->firstOrCreate([
                'id' => $job[0],
                'bill_id' => $job[1],
                'quantity' => intval($job[2]),
                'description' => $job[3],
                'price' => intval(str_replace(' ', '', $job[4])),
                'currency' => $job[5],
                'created_at' => $job[6],
                'updated_at' => $job[7]
            ]);

        }

	}

}
