<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class PreMeasureResponse extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'name',
        'gender',
        'phone',
        'qualification',
        'specialization',
        'job_status',
        'scale_cv',
        'scale_search',
        'scale_communication',
        'scale_interview',
        'scale_market',
        'scale_skills',
        'had_job',
        'tamkeen',
        'linkedin',
        'expected_result',
    ];
}