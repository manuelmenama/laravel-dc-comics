<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:2|max:100',
            'thumb' => 'min:10|max:255',
            'price' => 'required|min:1|max:20',
            'series' => 'required|min:2|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|min:2|max:50',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.min' => 'Il titolo deve essere di, almeno, :min caratteri',
            'title.max' => 'Il titolo deve essere di, al massimo, :max caratteri',
            'thumb.required' => 'Il link del thumb è un campo obbligatorio',
            'thumb.min' => 'Il link del thumb deve essere di, almeno, :min caratteri',
            'thumb.max' => 'Il link del thumb deve essere di, al massimo, :max caratteri',
            'price.required' => 'Il prezzo è un campo obbligatorio',
            'price.min' => 'Il prezzo deve essere di, almeno, :min caratteri',
            'price.max' => 'Il prezzo deve essere di, al massimo, :max caratteri',
            'series.required' => 'La serie è un campo obbligatorio',
            'series.min' => 'La serie deve essere di, almeno, :min caratteri',
            'series.max' => 'La serie deve essere di, al massimo, :max caratteri',
            'sale_date.required' => 'La data di uscita è un campo obbligatorio',
            'sale_date.date' => 'La data deve essere di in formato internazionale',
            'type.required' => 'Il tipo è un campo obbligatorio',
            'type.min' => 'Il tipo deve essere di, almeno, :min caratteri',
            'type.max' => 'Il tipo deve essere di, al massimo, :max caratteri',

        ];
    }
}
