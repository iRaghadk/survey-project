<?php
 
namespace App\Mail;
 
use App\Models\PreMeasureResponse;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
 
class PreMeasureSubmitted extends Mailable
{
    use Queueable, SerializesModels;
 
    public PreMeasureResponse $response;
 
    public function __construct(PreMeasureResponse $response)
    {
        $this->response = $response;
    }
 
    public function build()
    {
        return $this->subject('إجابة جديدة على استبيان القياس القبلي')
            ->view('emails.pre_measure_submitted')
            ->with(['response' => $this->response]);
    }
}