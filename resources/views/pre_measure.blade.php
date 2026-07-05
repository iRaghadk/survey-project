<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>استبيان القياس القبلي - مشروع WASSL</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 40px; background-color: #fdfdfd; color: #333; }
        .container { max-width: 750px; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin: 0 auto; }
        .logo-area { text-align: center; margin-bottom: 35px; border-bottom: 2px solid #f0f0f0; padding-bottom: 20px; }
        .logo-area img { max-width: 130px; height: auto; }
        h2 { color: #1a2a3a; margin-top: 15px; font-size: 24px; }
        .description { color: #666; font-size: 14px; line-height: 1.6; }
        .question-block { margin-bottom: 30px; padding: 15px; border-radius: 6px; background-color: #fafafa; }
        .question-title { font-size: 16px; font-weight: 600; color: #2c3e50; margin-bottom: 12px; }
        label { display: block; margin: 10px 0; font-size: 15px; cursor: pointer; color: #4a5568; }
        input[type="radio"], input[type="checkbox"] { margin-left: 10px; transform: scale(1.1); }
        input[type="text"], textarea { width: 100%; padding: 12px; margin-top: 8px; border: 1px solid #cbd5e0; border-radius: 6px; box-sizing: border-box; font-size: 14px; }
        textarea { resize: vertical; min-height: 100px; }
        .btn-container { text-align: left; margin-top: 20px; }
        button { background-color: #2b6cb0; color: white; padding: 12px 30px; border: none; border-radius: 6px; cursor: pointer; font-size: 16px; font-weight: bold; transition: background 0.2s; }
        button:hover { background-color: #2c5282; }
    </style>
</head>
<body>

<div class="container">
    <!-- الشعار والترويسة -->
    <div class="logo-area">
        <img src="{{ asset('images/logo.png') }}" alt="شعار WASSL">
        <h2>استبيان القياس القبلي لـ نظام WASSL</h2>
        <p class="description">عزيزي المشارك، يهدف هذا الاستبيان المبدئي إلى قياس مدى الحاجة والوعي الرقمي بنظام الملاحة داخل الحرم الجامعي وأنظمة التواصل الرقمي المقترحة قبل البدء الفعلي بالتطبيق الفعلي للنظام.</p>
    </div>

    <!-- الأسئلة مباشرة على الويب -->
    <form action="#" method="POST" onsubmit="event.preventDefault();">
        
        <!-- السؤال الأول: نصي -->
        <div class="question-block">
            <div class="question-title">1. الاسم الثلاثي (اختياري):</div>
            <input type="text" placeholder="اكتب الإجابة هنا...">
        </div>

        <!-- السؤال الثاني: خيارات متعددة -->
        <div class="question-block">
            <div class="question-title">2. ما هي الصعوبة الأكبر التي تواجهها عادةً عند التنقل أو البحث عن القاعات والمكاتب داخل الحرم الجامعي؟</div>
            <label><input type="radio" name="q2" value="1"> عدم وضوح اللوحات الإرشادية واللافتات.</label>
            <label><input type="radio" name="q2" value="2"> كثرة المباني والتعقيد الداخلي للممرات والقاعات.</label>
            <label><input type="radio" name="q2" value="3"> صعوبة الوصول إلى مكاتب أعضاء هيئة التدريس تحديداً.</label>
            <label><input type="radio" name="q2" value="4"> لا أواجه أي صعوبة في التنقل.</label>
        </div>

        <!-- السؤال الثالث: مربعات اختيار -->
        <div class="question-block">
            <div class="question-title">3. ما هي الميزات التي تتوقع أو تفضل الاستفادة منها بشكل أساسي في تطبيق نظام الملاحة والتواصل الرقمي داخل الجامعة؟ (يمكنك اختيار أكثر من إجابة)</div>
            <label><input type="checkbox" name="q3[]" value="1"> خرائط تفاعلية داخلية للمباني والقاعات (Indoor Navigation).</label>
            <label><input type="checkbox" name="q3[]" value="2"> قنوات تواصل رقمية مباشرة مع الإدارات أو الأقسام المختلفة.</label>
            <label><input type="checkbox" name="q3[]" value="3"> استقبال الإشعارات والتنبيهات الفورية بخصوص التعديلات أو الفعاليات.</label>
            <label><input type="checkbox" name="q3[]" value="4"> إمكانية حجز أو الاستعلام عن الأماكن المتاحة بالحرم الجامعي.</label>
        </div>

        <!-- السؤال الرابع: تقييم خيارات -->
        <div class="question-block">
            <div class="question-title">4. كيف تقيم مستوى استخدامك واعتمادك الحالي على التطبيقات الرقمية في تسهيل المهام اليومية أو الأكاديمية؟</div>
            <label><input type="radio" name="q4" value="high"> عالي جداً - أعتمد عليها في كل شيء تقريباً.</label>
            <label><input type="radio" name="q4" value="medium"> متوسط - أستخدمها للمهام الضرورية فقط.</label>
            <label><input type="radio" name="q4" value="low"> ضعيف - أفضل الطرق التقليدية والورقية.</label>
        </div>

        <!-- السؤال الخامس: نص مفتوح -->
        <div class="question-block">
            <div class="question-title">5. هل لديك أي مقترحات أو إضافات معينة ترغب برؤيتها في نظام الملاحة والتواصل (WASSL) لتسهيل تجربتك؟</div>
            <textarea placeholder="اكتب مقترحاتك هنا..."></textarea>
        </div>

        <!-- زر الحفظ والإرسال الشكلي -->
        <div class="btn-container">
            <button type="submit">إرسال الإجابات</button>
        </div>

    </form>
</div>

</body>
</html>