<?php 
//UNI DIMENSIONAL ARRAY EXAMPLE
$data  = array( 
    'name'=> 'Jhon',
    'address' => 'New York',
    

);


echo "<pre>";
print_r($data);


//BI DIMENSIONAL ARRAY EXAMPLE
$data  = array(
    'name'=> 'Jhon',
    'address' => 'New York',
    'contact' => array(
        'mobile1' => '3435453454',

    )
    );

echo "<pre>";
print_r($data);

//THREE DIMENSIONAL ARRAY EXAMPLE
$data  = array(
    'name'=> 'Jhon',
    'address' => 'New York',
    'contact' => array(
        'mobile1' => array(
            'home phone' => '896986',
            'business phone' => '97907098'
        )

        )
    );

echo "<pre>";
print_r($data);

