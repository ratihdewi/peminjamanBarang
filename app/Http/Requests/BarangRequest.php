<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'peminjaman_id' => 'required|Integer',
            'asset_id' => 'required|Integer',
            'jumlah' => 'required|Integer',
            'kembali' => 'jumlah'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute harus diisi.',
        ];
    }
}
