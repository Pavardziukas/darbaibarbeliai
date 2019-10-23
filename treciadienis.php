<?php

$drinks = [
[
    name = Vilkmerges alus,
    price_stock = 3.6,
    discount = 0,
    img = 'https://www.beersofeurope.co.uk/images/product/l/VilkmergesVysniuKriek.jpg?t=1561548872',
]
[
    name = Stumbro degtinela,
    price_stock = 11.79,
    discount = 0, //%
    img = 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT0w_TuaAQxlMtzZIu0l591pZC0KmgSrtFeW8fPp3rgvSrKvkmG',
]
[
    name = Ballentines,
    price_stock = 14.95,
    discount = 0,
    img = 'https://img.thewhiskyexchange.com/900/blend_bal5.jpg',
]
[
    name = Bintang beer,
    price_stock = 2.19,
    discount = 3, //%
    img = 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQWXjdGoJVzrxGszvR3ncGWgciKVNPPB0JmSaSDqkUWYVrV9y5b',
]
]
foreach ($drinks as $key = $value)
$discounted_price = $value ['$price_stock'] * ((100 - $value['discount'])/100)
var_dump($drinks)