<?php


namespace App\Http\Controllers\Admin;


use App\Forms\Admin\OfferForm;
use App\Forms\Admin\SeoForm;
use App\Http\Requests\Admin\OfferRequest;
use App\Models\Offer;
use App\Models\Gallery;
use App\Models\Seo;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class OfferController extends BaseController
{
    public function __construct()
    {
        parent::__construct(
            Offer::class,
            OfferForm::class,
            'offer',
            true,
            true
        );
    }

    public function show(int $id) {
        $item = Offer::with(['seo', 'gallery'])->findOrFail($id);
        $form = new OfferForm($item);
        $formSeo = null;

        if($item->seo) {
            $formSeo = new SeoForm($item->seo);
        }

        if(!$item->gallery) {
            $item->gallery()->associate(Gallery::create());
            $item->save();
        }

        return view('admin.offer.edit', compact('item', 'form', 'formSeo'));
    }

    public function edit(OfferRequest $request)
    {
        $id = $request->id;
        $post = $request->post();
        $item = Offer::with(['seo'])->findOrNew($id);


        if ($request->hasFile('offer.pdf_path')) {

            $pdfFile = $request->file('offer.pdf_path');

            $path = Storage::disk('public')->put('offer_file', $pdfFile);

            $post['offer']['pdf_path'] = $path;
        }
        if (isset($post['seo'])) {
            $rules = [];

            foreach (SeoForm::FIELDS as $name => $field) {
                $rules['seo.' . $name] = $field['rules'];
            }

            $seoId = null;
            if ($item->seo) {
                $seoId = $item->seo->id;
            }
            $rules['seo.url'][] = Rule::unique('seo')->ignore($seoId)->where('lang', getAdminLang());

            Validator::make($post, $rules)->validate();
        }
        $item->fill($post['offer']);

        if ($item->seo) {
            $item->seo()->update($post['seo']);
        } else {
            $item->seo()->associate(Seo::create($post['seo']));
        }
        $item->save();


        if ($request->exists('saveandclose')) {
            Log::info(__('admin.log.updated', ['model' => 'offer', 'id' => $item->getKey()]));
            return redirect(route('admin.offer.index'))->with('success', 'Pomyślnie zapisano zmiany.');
        } else {
            Log::info(__('admin.log.created', ['model' => 'offer', 'id' => $item->getKey()]));
            return redirect(route('admin.offer.show', $item))->with('success', 'Pomyślnie zapisano zmiany.');;
        }
    }
}
