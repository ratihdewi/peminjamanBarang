<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerpanjangRequest extends FormRequest
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
            'kode_transaksi' => 'required|string|max:255',
            'peminjam' => 'required|String',
            'nip' => 'required|String',
            'no_hp' => 'required|String',
            'tgl_pinjam' => 'required|Date',
            'tgl_kembali' => 'required|Date',
            'email' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute harus diisi.',
        ];
    }
}
