<?php

require './vendor/autoload.php';


$zohoBooks = new \Webleit\ZohoBooksApi\ZohoBooks('cafda604342d6c7be4cd888d6440cf18', '33945686');


//$zohoBooks->contacts->getList();
//$zohoBooks->contacts->getTotal();
//var_dump($zohoBooks->contacts->get(73602000000065001)->getContactPersons());
//var_dump($zohoBooks->customerpayments->getList()->toArray());
// $payment = $zohoBooks->customerpayments->get('73602000000036336');
// var_dump($payment->toArray());
// var_dump($payment->getRefunds()->toArray());

// $zohoBooks->invoices->getList();
// $zohoBooks->invoices->getTotal():
// $zohoBooks->invoices->get(73602000000064029)

/*try {
    $invoice = $zohoBooks->invoices->create([
        'customer_id' => 73602000000065001,
        'date' => '2017-01-01',
        'payment_terms' => 15,
        'line_items' => [
            [
                'name' => 'Test 1',
                'description' => 'Test 1 desc',
                'rate' => 123
            ]
        ]
    ], ['send' => 'false']);

} catch (\Webleit\ZohoBooksApi\Exceptions\ErrorResponseException $e) {
    echo $e->getMessage();
}*/

/*try {
    $invoice = $zohoBooks->invoices->update('73602000000082001', [
        'reference_number' => 'test123'
    ], ['send' => 'false']);

} catch (\Webleit\ZohoBooksApi\Exceptions\ErrorResponseException $e) {
    echo $e->getMessage();
}*/

/*
 try {
    $zohoBooks->invoices->delete('73602000000082001');

} catch (\Webleit\ZohoBooksApi\Exceptions\ErrorResponseException $e) {
    echo $e->getMessage();
}*/