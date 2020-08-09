<?php

use Dcat\Admin\Extension\Mill\Http\Controllers;

Route::get('mill', Controllers\MillController::class.'@index');