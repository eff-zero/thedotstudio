<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrainingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth()->user()->id == 1;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'       => 'required',
            'quotas'     => 'required',
            'start_hour' => ['required', 'date_format:H:i'],
            'end_hour'   => ['required', 'date_format:H:i', 'after:start_hour'],
            'day'        => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    $dayOfWeek = date('N', strtotime($value));
                    if ($dayOfWeek >= 6) {
                        $fail('Solo se pueden seleccionar días de lunes a viernes.');
                    }
                }
            ],
        ];
    }
}
