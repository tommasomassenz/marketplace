<?php



use Illuminate\Foundation\Http\FormRequest;
use App\Http\Request\;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function store(UserRequest $request)
 {
    $user = User::create($request->all());

    return response()->json([
        'status' => true,
        'message' => "user Created successfully!",
        'user' => $user
    ], 200);
 }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
