<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('customers')->delete();
        \DB::table('customers')->insert(array(
            0=>
            array(
                'id' => 1,
                'customer_code' => 'CUS00000001',
                'name' =>'{"ar":"علي آدم"}',
                'address' =>'{"ar","امدرمان"}',
                'country' =>'{"ar","السودان"}',
                'city' =>'{"ar","الخرطوم"}',
                'fax' =>'121254154',
                'phone' =>'09154458888',
                'email' =>'customer@gmail.com',
                'facebook' =>'customer.facebook',
                'note' =>'لا يوجد'
            ),
            1=>
            array(
                'id' => 2,
                'customer_code' => 'CUS00000002',
                'name' =>'{"ar":"كمال صالح"}',
                'address' =>'{"ar","امدرمان السوق الشعبي"}',
                'country' =>'{"ar","السودان"}',
                'city' =>'{"ar","الخرطوم"}',
                'fax' =>'121254154',
                'phone' =>'09154458888',
                'email' =>'client@gmail.com',
                'facebook' =>'client.facebook',
                'note' =>'لا يوجد'
            ),
        ));
    }
}
