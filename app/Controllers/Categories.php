<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use CodeIgniter\API\ResponseTrait;

class Categories extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        // load helpers
        helper('html');

        $categoriesModel = new CategoryModel();
        return view('index', [
            'categories' => $categoriesModel->getCategories(),
        ]);
    }

    public function list($id = null)
    {
        $categoriesModel = new CategoryModel();
        $categories = $categoriesModel->getCategories($id);

        return $this->respond($categories, 200);
    }
}
