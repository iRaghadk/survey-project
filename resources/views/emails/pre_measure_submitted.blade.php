<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #f7fafc; margin: 0; padding: 20px; }
        .box { max-width: 600px; margin: 0 auto; background: #fff; border-radius: 10px; padding: 30px; }
        h2 { color: #2b6cb0; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        td { padding: 8px; border-bottom: 1px solid #edf2f7; font-size: 14px; }
        td:first-child { font-weight: 600; color: #4a5568; width: 40%; }
    </style>
</head>
<body>
    <div class="box">
        <h2>إجابة جديدة على استبيان القياس القبلي</h2>
        <table>
            <tr><td>الاسم</td><td>{{ $response->name }}</td></tr>
            <tr><td>الجنس</td><td>{{ $response->gender === 'male' ? 'ذكر' : 'أنثى' }}</td></tr>
            <tr><td>رقم التواصل</td><td>{{ $response->phone }}</td></tr>
            <tr><td>المؤهل العلمي</td><td>{{ $response->qualification }}</td></tr>
            <tr><td>التخصص</td><td>{{ $response->specialization }}</td></tr>
            <tr><td>الحالة المهنية</td><td>{{ $response->job_status }}</td></tr>
            <tr><td>سيرة ذاتية احترافية</td><td>{{ $response->scale_cv }}/5</td></tr>
            <tr><td>البحث عن الفرص المهنية</td><td>{{ $response->scale_search }}/5</td></tr>
            <tr><td>مهارات التواصل المهني</td><td>{{ $response->scale_communication }}/5</td></tr>
            <tr><td>اجتياز المقابلات الشخصية</td><td>{{ $response->scale_interview }}/5</td></tr>
            <tr><td>معرفة متطلبات سوق العمل</td><td>{{ $response->scale_market }}/5</td></tr>
            <tr><td>امتلاك المهارات المطلوبة</td><td>{{ $response->scale_skills }}/5</td></tr>
            <tr><td>سبق الحصول على وظيفة</td><td>{{ $response->had_job === 'yes' ? 'نعم' : 'لا' }}</td></tr>
            <tr><td>الالتحاق ببرنامج تمكين</td><td>{{ $response->tamkeen === 'yes' ? 'نعم' : 'لا' }}</td></tr>
            <tr><td>حساب لينكدإن</td><td>{{ $response->linkedin === 'yes' ? 'نعم' : 'لا' }}</td></tr>
            <tr><td>النتيجة المتوقعة</td><td>{{ $response->expected_result }}</td></tr>
        </table>
    </div>
</body>
</html>