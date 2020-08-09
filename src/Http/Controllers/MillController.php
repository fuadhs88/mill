<?php

namespace Dcat\Admin\Extension\Mill\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class MillController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('CCTV MILL')
            ->description('View CCTV MILL')
            ->body(view('mill::index'));
    }
}
