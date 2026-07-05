<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>استبيان القياس القبلي - مقياس الجاهزية المهنية</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 40px; background-color: #fcfcfc; color: #333; }
        .container { max-width: 800px; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin: 0 auto; }
        .logo-area { text-align: center; margin-bottom: 35px; border-bottom: 2px solid #f0f0f0; padding-bottom: 20px; }
        .logo-area img { max-width: 130px; height: auto; }
        h2 { color: #1a2a3a; margin-top: 15px; font-size: 24px; }
        .motivational-text { background-color: #ebf8ff; color: #2b6cb0; padding: 15px; border-radius: 8px; font-weight: 500; margin-bottom: 30px; line-height: 1.6; }
        .question-block { margin-bottom: 25px; padding: 20px; border-radius: 8px; background-color: #fafafa; border: 1px solid #edf2f7; }
        .question-title { font-size: 16px; font-weight: 600; color: #2d3748; margin-bottom: 12px; }
        .required { color: #e53e3e; margin-right: 4px; }
        label { display: block; margin: 10px 0; font-size: 15px; cursor: pointer; color: #4a5568; }
        input[type="radio"], input[type="checkbox"] { margin-left: 10px; transform: scale(1.1); }
        input[type="text"], input[type="tel"] { width: 100%; padding: 12px; margin-top: 8px; border: 1px solid #cbd5e0; border-radius: 6px; box-sizing: border-box; font-size: 14px; }
        
        /* تنسيق جدول مقياس الجاهزية */
        .scale-table { width: 100%; border-collapse: collapse; margin-top: 15px; background: #fff; }
        .scale-table th, .scale-table td { border: 1px solid #e2e8f0; padding: 12px; text-align: center; font-size: 14px; }
        .scale-table th { background-color: #edf2f7; color: #4a5568; }
        .scale-table td:first-child { text-align: right; font-weight: 500; width: 50%; }

        .btn-container { text-align: left; margin-top: 30px; }
        button { background-color: #2b6cb0; color: white; padding: 12px 35px; border: none; border-radius: 6px; cursor: pointer; font-size: 16px; font-weight: bold; transition: background 0.2s; }
        button:hover { background-color: #2c5282; }
    </style>
</head>
<body>

<div class="container">
    <!-- الشعار والترويسة -->
    <div class="logo-area">
        <img src="{{ asset('images/logo.png') }}" alt="الشعار">
        <h2>استبيان القياس القبلي</h2>
    </div>

    <div class="motivational-text">
        <strong>رحلتك تبدأ الآن ..</strong><br>
        إجاباتك تمثل نقطة الانطلاق التي سنقيس من خلالها أثر رحلتك التطويرية، لنرصد التقدم الذي ستحققه والخطوات التي ستقودك نحو فرص أكبر ومستقبل أكثر جاهزية.
    </div>

    <!-- النموذج المباشر على الويب -->
    <form action="#" method="POST" onsubmit="event.preventDefault();">
        
        <!-- الاسم -->
        <div class="question-block">
            <div class="question-title">الاسم<span class="required">*</span></div>
            <input type="text" required placeholder="اكتب إجابتك هنا...">
        </div>

        <!-- الجنس -->
        <div class="question-block">
            <div class="question-title">الجنس<span class="required">*</span></div>
            <label><input type="radio" name="gender" value="male" required> ذكر</label>
            <label><input type="radio" name="gender" value="female" required> أنثى</label>
        </div>

        <!-- رقم التواصل -->
        <div class="question-block">
            <div class="question-title">رقم التواصل<span class="required">*</span></div>
            <input type="tel" required placeholder="اكتب إجابتك هنا...">
        </div>

        <!-- المؤهل العلمي -->
        <div class="question-block">
            <div class="question-title">المؤهل العلمي<span class="required">*</span></div>
            <input type="text" required placeholder="اكتب إجابتك هنا...">
        </div>

        <!-- التخصص -->
        <div class="question-block">
            <div class="question-title">التخصص<span class="required">*</span></div>
            <input type="text" required placeholder="اكتب إجابتك هنا...">
        </div>

        <!-- الحالة المهنية -->
        <div class="question-block">
            <div class="question-title">الحالة المهنيّة<span class="required">*</span></div>
            <label><input type="radio" name="job_status" value="student" required> طالب</label>
            <label><input type="radio" name="job_status" value="graduate" required> خريج</label>
            <label><input type="radio" name="job_status" value="employee" required> موظف</label>
            <label><input type="radio" name="job_status" value="job_seeker" required> باحث عن عمل</label>
            <label><input type="radio" name="job_status" value="freelancer" required> صاحب عمل حر</label>
        </div>

        <!-- مقياس الجاهزية المهنية (جدول خيارات من 1 إلى 5) -->
        <div class="question-block">
            <div class="question-title">مقياس الجاهزية المهنيّة<span class="required">*</span></div>
            <p style="font-size: 13px; color: #718096; margin-top: -5px;">(1 تعني لا أوافق بشدة، 5 تعني أوافق بشدة)</p>
            
            <table class="scale-table">
                <thead>
                    <tr>
                        <th>العبارة</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>أمتلك سيرة ذاتية إحترافية</td>
                        <td><input type="radio" name="scale_cv" value="1" required></td>
                        <td><input type="radio" name="scale_cv" value="2"></td>
                        <td><input type="radio" name="scale_cv" value="3"></td>
                        <td><input type="radio" name="scale_cv" value="4"></td>
                        <td><input type="radio" name="scale_cv" value="5"></td>
                    </tr>
                    <tr>
                        <td>أجيد البحث عن الفرص المهنيّة</td>
                        <td><input type="radio" name="scale_search" value="1" required></td>
                        <td><input type="radio" name="scale_search" value="2"></td>
                        <td><input type="radio" name="scale_search" value="3"></td>
                        <td><input type="radio" name="scale_search" value="4"></td>
                        <td><input type="radio" name="scale_search" value="5"></td>
                    </tr>
                    <tr>
                        <td>أمتلك مهارات التواصل المهنيّ</td>
                        <td><input type="radio" name="scale_communication" value="1" required></td>
                        <td><input type="radio" name="scale_communication" value="2"></td>
                        <td><input type="radio" name="scale_communication" value="3"></td>
                        <td><input type="radio" name="scale_communication" value="4"></td>
                        <td><input type="radio" name="scale_communication" value="5"></td>
                    </tr>
                    <tr>
                        <td>أستطيع اجتياز المقابلات الشخصية</td>
                        <td><input type="radio" name="scale_interview" value="1" required></td>
                        <td><input type="radio" name="scale_interview" value="2"></td>
                        <td><input type="radio" name="scale_interview" value="3"></td>
                        <td><input type="radio" name="scale_interview" value="4"></td>
                        <td><input type="radio" name="scale_interview" value="5"></td>
                    </tr>
                    <tr>
                        <td>أعرف متطلبات سوق العمل في تخصصي</td>
                        <td><input type="radio" name="scale_market" value="1" required></td>
                        <td><input type="radio" name="scale_market" value="2"></td>
                        <td><input type="radio" name="scale_market" value="3"></td>
                        <td><input type="radio" name="scale_market" value="4"></td>
                        <td><input type="radio" name="scale_market" value="5"></td>
                    </tr>
                    <tr>
                        <td>أمتلك المهارات المطلوبة للفرص المناسبة لي</td>
                        <td><input type="radio" name="scale_skills" value="1" required></td>
                        <td><input type="radio" name="scale_skills" value="2"></td>
                        <td><input type="radio" name="scale_skills" value="3"></td>
                        <td><input type="radio" name="scale_skills" value="4"></td>
                        <td><input type="radio" name="scale_skills" value="5"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- هل سبق لك الحصول على وظيفة؟ -->
        <div class="question-block">
            <div class="question-title">هل سبق لك الحصول على وظيفة ؟<span class="required">*</span></div>
            <label><input type="radio" name="had_job" value="yes" required> نعم</label>
            <label><input type="radio" name="had_job" value="no" required> لا</label>
        </div>

        <!-- هل سبق لك الالتحاق ببرنامج تمكين مهني؟ -->
        <div class="question-block">
            <div class="question-title">هل سبق لك الالتحاق ببرنامج تمكيّن مهني؟<span class="required">*</span></div>
            <label><input type="radio" name="tamkeen" value="yes" required> نعم</label>
            <label><input type="radio" name="tamkeen" value="no" required> لا</label>
        </div>

        <!-- هل لديك حساب مهني في لينكدإن؟ -->
        <div class="question-block">
            <div class="question-title">هل لديك حساب مهني في لينكدإن ؟<span class="required">*</span></div>
            <label><input type="radio" name="linkedin" value="yes" required> نعم</label>
            <label><input type="radio" name="linkedin" value="no" required> لا</label>
        </div>

        <!-- ما أهم نتيجة تتوقع تحقيقها من البرنامج؟ -->
        <div class="question-block">
            <div class="question-title">ما أهم نتيجة تتوقع تحقيقها من البرنامج؟<span class="required">*</span></div>
            <input type="text" required placeholder="اكتب إجابتك هنا...">
        </div>

        <!-- زر الإرسال -->
        <div class="btn-container">
            <button type="submit">إرسال الإجابات</button>
        </div>

    </form>
</div>

</body>
</html>