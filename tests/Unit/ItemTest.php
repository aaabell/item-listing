<?php

namespace Tests\Unit;

use Tests\TestCase;

class ItemTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $length = 50;
        $color = 'red';
        $price = 250;

        $response = $this->get(route('items.list', ['length' => $length, 'color' => $color, 'price' => $price]));

        $response->assertStatus(200);

        $items = json_decode($response->getContent(), true);

        foreach ($items as $key => $item) {
            // Asssertion for length greater than
            $this->assertTrue(($item['length'] > $length));
            // Asssertion for length color not equal
            $this->assertTrue(($item['color'] != $color));
            // Asssertion for length price greater than
            $this->assertTrue(($item['price'] < $price));
        }
    }
}
