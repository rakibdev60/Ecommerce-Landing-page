<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Forms\PageForm;
use App\Enums\TemplateType;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Product;
use Kris\LaravelFormBuilder\FormBuilder;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Page $pages)
    {
        $pages = $pages->all();
        return view('admin.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(PageForm::class, [
            'method' => 'POST',
            'url' => route('admin.pages.store')
        ]);

        return view('admin.page.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        $page =  Page::create([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'template_type' => $request->template_type,
            'data' => []
        ]);

        return redirect()->route('admin.pages.edit', $page->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        $view = 'templates.' . $page->template_type . ".index";
        $product = Product::find($page->data['product_id']);
        // dd($page);
        return view($view, compact('page', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page, FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(PageForm::class, [
            'method' => 'PUT',
            'url' => route('admin.pages.update', $page->id),
            'model' => $page
        ]);

        return view('admin.page.edit', compact('form', 'page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $data = array_merge($page->data, $request->data);

        foreach ($request->file() as $file) {
            foreach ($file as $key => $photo) {
                if (is_array($photo)) {
                    foreach ($photo as $key2 => $value2) {
                        $data[$key][$key2] = $value2->store('photos');
                    }
                } else {
                    $data[$key] = $photo->store('photos');
                }
            }
        }

        $page->update([
            'data' => $data
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->back();
    }
}
