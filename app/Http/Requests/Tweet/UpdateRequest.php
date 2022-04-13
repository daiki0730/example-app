<?php

namespace App\Http\Requests\Tweet;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'tweet' => 'required|max:140'
        ];
    }

    /**
     * @return string
     */
    public function tweet(): string
    {
        return $this->input('tweet');
    }

    /**
     * @return string
     */
    public function id(): string
    {
        return (int)$this->route('tweetId');
    }
}
