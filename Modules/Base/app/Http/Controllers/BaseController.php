<?php

namespace Modules\Base\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Base\Services\BaseService;

class BaseController extends Controller
{
    protected $baseService;

    public function __construct(BaseService $baseService)
    {
        $this->baseService = $baseService;
    }
    public function index()
    {
        $base = $this->baseService->getAll();
        return view('base::index', compact('base'));
    }

    public function store(Request $request)
    {
        $order = $this->baseService->create($request->all());
        return response()->json($order, 201);
    }
}
