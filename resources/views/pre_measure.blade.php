<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>استبيان القياس القبلي - مقياس الجاهزية المهنية</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; background-color: #fcfcfc; color: #333; }

        /* الهيدر العلوي */
        .top-header {
            background-color: #ffffff;
            border-bottom: 1px solid #eee;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .top-header img { height: 45px; }
        .top-header .site-title { font-size: 18px; font-weight: 700; color: #2b6cb0; }

        .container { max-width: 800px; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin: 40px auto; }

        /* منطقة الشعار بخلفية متدرجة */
        .logo-area {
            text-align: center;
            margin: -40px -40px 35px -40px;
            padding: 50px 20px 40px;
            border-radius: 12px 12px 0 0;
            background: linear-gradient(135deg, #1a4d8f 0%, #2b6cb0 45%, #4299e1 100%);
            position: relative;
            overflow: hidden;
        }
        .logo-area::before {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 20% 20%, rgba(248,184,3,0.25) 0%, transparent 50%),
                        radial-gradient(circle at 80% 80%, rgba(255,255,255,0.1) 0%, transparent 50%);
        }
        .logo-area img {
            max-width: 150px;
            height: auto;
            position: relative;
            z-index: 1;
            background: #fff;
            padding: 12px 18px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        h2 { color: #ffffff; margin-top: 18px; font-size: 24px; position: relative; z-index: 1; }
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

        /* الفوتر */
        .site-footer {
            background-color: #1a2a3a;
            color: #cbd5e0;
            padding: 40px;
            text-align: center;
            margin-top: 60px;
        }
        .site-footer img { height: 55px; margin-bottom: 15px; filter: brightness(0) invert(1); }
        .site-footer p { font-size: 14px; margin: 5px 0; }
        .site-footer .copyright { margin-top: 20px; font-size: 12px; color: #718096; }

        /* ===== التجاوب مع الأجهزة اللوحية (تابلت / لابتوب صغير) ===== */
        @media (max-width: 900px) {
            .container { max-width: 90%; padding: 30px; }
        }

        /* ===== التجاوب مع الهواتف ===== */
        @media (max-width: 600px) {
            body { margin: 0; }

            .top-header {
                flex-direction: column;
                gap: 10px;
                padding: 15px 20px;
                text-align: center;
            }
            .top-header .site-title { font-size: 16px; }
            .top-header img { height: 38px; }

            .container {
                max-width: 100%;
                width: 100%;
                margin: 0;
                padding: 20px;
                border-radius: 0;
                box-shadow: none;
            }

            .logo-area {
                margin: -20px -20px 25px -20px;
                padding: 35px 15px 25px;
            }
            .logo-area img { max-width: 110px; padding: 8px 12px; }
            h2 { font-size: 19px; }

            .motivational-text { font-size: 14px; padding: 12px; }

            .question-block { padding: 15px; margin-bottom: 18px; }
            .question-title { font-size: 15px; }

            input[type="text"], input[type="tel"] { font-size: 16px; padding: 10px; }
            label { font-size: 14px; }

            /* جدول مقياس الجاهزية: يصير قابل للتمرير أفقياً بدل ما ينكسر */
            .scale-table-wrapper {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                margin-top: 15px;
                border-radius: 6px;
            }
            .scale-table { min-width: 480px; margin-top: 0; }
            .scale-table th, .scale-table td { padding: 8px; font-size: 13px; }

            .btn-container { text-align: center; }
            button { width: 100%; padding: 14px; font-size: 15px; }

            .site-footer { padding: 30px 20px; }
            .site-footer img { height: 42px; }
            .site-footer p { font-size: 13px; }
        }
    </style>
</head>
<body>

    <!-- الهيدر العلوي -->
    <div class="top-header">
        <span class="site-title">استبيان القياس القبلي</span>
        <img src="{{ asset('images/Kafaat-logo.svg') }}" alt="جمعية كفاءات">
    </div>

    <div class="container">
        <!-- الشعار والترويسة -->
        <div class="logo-area">
            <img src="{{ asset('images/Kafaat-logo.svg') }}" alt="الشعار">
            <h2>استبيان القياس القبلي</h2>
        </div>

        <div class="motivational-text">
            <strong>رحلتك تبدأ الآن ..</strong><br>
            إجاباتك تمثل نقطة الانطلاق التي سنقيس من خلالها أثر رحلتك التطويرية، لنرصد التقدم الذي ستحققه والخطوات التي ستقودك نحو فرص أكبر ومستقبل أكثر جاهزية.
        </div>

        @if (session('success'))
            <div style="background-color:#c6f6d5; color:#22543d; padding:15px; border-radius:8px; margin-bottom:25px; font-weight:600; text-align:center;">
                {{ session('success') }}
            </div>
        @endif

        <!-- النموذج المباشر على الويب -->
        <form action="{{ route('pre-measure.store') }}" method="POST">
            @csrf

            <!-- الاسم -->
            <div class="question-block">
                <div class="question-title">الاسم<span class="required">*</span></div>
                <input type="text" name="name" required placeholder="اكتب إجابتك هنا..." value="{{ old('name') }}">
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
                <input type="tel" name="phone" required placeholder="اكتب إجابتك هنا..." value="{{ old('phone') }}">
            </div>

            <!-- المؤهل العلمي -->
            <div class="question-block">
                <div class="question-title">المؤهل العلمي<span class="required">*</span></div>
                <input type="text" name="qualification" required placeholder="اكتب إجابتك هنا..." value="{{ old('qualification') }}">
            </div>

            <!-- التخصص -->
            <div class="question-block">
                <div class="question-title">التخصص<span class="required">*</span></div>
                <input type="text" name="specialization" required placeholder="اكتب إجابتك هنا..." value="{{ old('specialization') }}">
            </div>

            <!-- الحالة المهنية -->
            <div class="question-block">
                <div class="question-title">الحالة المهنيّة<span class="required">*</span></div>
                <label><input type="radio" name="job_status" value="طالب" required> طالب</label>
                <label><input type="radio" name="job_status" value="خريج" required> خريج</label>
                <label><input type="radio" name="job_status" value="موظف" required> موظف</label>
                <label><input type="radio" name="job_status" value="باحث عن عمل" required> باحث عن عمل</label>
                <label><input type="radio" name="job_status" value="صاحب عمل حر" required> صاحب عمل حر</label>
            </div>

            <!-- مقياس الجاهزية المهنية (جدول خيارات من 1 إلى 5) -->
            <div class="question-block">
                <div class="question-title">مقياس الجاهزية المهنيّة<span class="required">*</span></div>
                <p style="font-size: 13px; color: #718096; margin-top: -5px;">(1 تعني لا أوافق بشدة، 5 تعني أوافق بشدة)</p>

                <div class="scale-table-wrapper">
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
                <input type="text" name="expected_result" required placeholder="اكتب إجابتك هنا..." value="{{ old('expected_result') }}">
            </div>

            <!-- زر الإرسال -->
            <div class="btn-container">
                <button type="submit">إرسال الإجابات</button>
            </div>

        </form>
    </div>

    <!-- الفوتر -->
    <div class="site-footer">
        <img src="{{ asset('images/Kafaat-logo.svg') }}" alt="جمعية كفاءات">
        <p>جمعية كفاءات الأهلية</p>
        <p>نسعد باستقبال مقترحاتكم واستفساراتكم</p>
        <div class="copyright">Copyright {{ date('Y') }} © جمعية كفاءات الأهلية</div>
    </div>

</body>
</html>