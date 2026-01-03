<?php

test('shows swal with counter', function () {
    visit('/')
        ->click('Increment')
        ->assertSee('Count is 1')
        ->click('Increment')
        ->assertSee('Count is 2');
});
