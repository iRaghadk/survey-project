<?php
 
namespace App\Http\Controllers;
 
use App\Mail\PreMeasureSubmitted;
use App\Models\PreMeasureResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
 
class PreMeasureController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'phone' => 'required|string|max:50',
            'qualification' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'job_status' => 'required|string|max:255',
            'scale_cv' => 'required|integer|min:1|max:5',
            'scale_search' => 'required|integer|min:1|max:5',
            'scale_communication' => 'required|integer|min:1|max:5',
            'scale_interview' => 'required|integer|min:1|max:5',
            'scale_market' => 'required|integer|min:1|max:5',
            'scale_skills' => 'required|integer|min:1|max:5',
            'had_job' => 'required|in:yes,no',
            'tamkeen' => 'required|in:yes,no',
            'linkedin' => 'required|in:yes,no',
            'expected_result' => 'required|string',
        ]);
 
        $response = PreMeasureResponse::create($validated);
 
        // إرسال إيميل إشعار — محاط بحماية حتى لا يوقف الصفحة لو تعطل SMTP
        $notifyTo = env('MAIL_FROM_ADDRESS');
        if ($notifyTo) {
            try {
                Mail::to($notifyTo)->send(new PreMeasureSubmitted($response));
            } catch (\Throwable $e) {
                Log::error('Failed to send pre-measure notification email: '.$e->getMessage());
            }
        }
 
        return redirect()->route('pre-measure')->with('success', 'شكراً لك، تم إرسال إجاباتك بنجاح!');
    }
}
 