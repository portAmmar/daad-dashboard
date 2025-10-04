# دليل المساهمة في مشروع ضاد
# Contributing to Daad Project

---

## النسخة العربية

### مرحباً بك في مشروع ضاد

إنه لمن دواعي سرورنا أن نستقبل مساهمتك في هذا المشروع. نحن نؤمن بأن كل مساهمة، مهما صغرت، تُثري المجتمع وتنير دروب المعرفة.

### قبل أن تبدأ رحلتك

يا طالب العلم والإتقان، قبل أن تخطو خطوتك الأولى، ننصحك بما يلي:

**اقرأ الوثائق**: تمعّن في ملف `README.md` لتفهم جوهر المشروع ومقاصده

**استكشف القضايا المفتوحة**: تفحّص القضايا الموسومة بـ `good first issue` أو `beginner-friendly`

**انضم إلى المجتمع**: شارك في النقاشات واستفسر عما أشكل عليك

### خطوات المساهمة

#### ١. انسخ المستودع (Fork)
```bash
# انقر على زر "Fork" في أعلى الصفحة
```

#### ٢. استنسخ نسختك المحلية
```bash
git clone https://github.com/اسمك/اسم-المشروع.git
cd اسم-المشروع
```

#### ٣. أنشئ فرعاً جديداً
```bash
git checkout -b feature/اسم-الميزة-الجديدة
```

#### ٤. اكتب كودك بإتقان
- اتبع دليل الأسلوب البرمجي للمشروع
- اكتب تعليقات واضحة تنير الطريق لمن يأتي بعدك
- أضف اختبارات لكودك كلما أمكن ذلك

#### ٥. ارفع تغييراتك
```bash
git add .
git commit -m "feat: شرح مختصر وواضح للتغييرات"
git push origin feature/اسم-الميزة-الجديدة
```

**ملحوظة هامة**: يجب اتباع معيار Conventional Commits في رسائل الالتزام (انظر القسم التالي)

#### ٦. افتح طلب دمج (Pull Request)
- اذهب إلى مستودعك على GitHub
- انقر على "New Pull Request"
- اكتب عنواناً معبّراً ووصفاً شاملاً لتغييراتك

### معايير رسائل الالتزام (Conventional Commits)

إن مشروع **داد** يلتزم بمعيار **Conventional Commits** في صياغة رسائل الالتزام. لكل رسالة التزام، يجب أن تستخدم أحد الأنواع التالية:

#### أنواع الالتزامات

**feat:** إضافة ميزة جديدة  
مثال: `feat: add social login support`

**fix:** إصلاح خلل برمجي  
مثال: `fix: resolve image upload failure`

**docs:** تغييرات في التوثيق فقط  
مثال: `docs: update README with installation instructions`

**style:** تغييرات في نمط الكود (التنسيق، المسافات، بلا تأثير على المنطق)  
مثال: `style: apply PSR-12 formatting rules`

**refactor:** إعادة هيكلة الكود دون إضافة ميزات أو إصلاح أخطاء  
مثال: `refactor: simplify user validation logic`

**test:** إضافة أو تعديل الاختبارات  
مثال: `test: add unit tests for Auth module`

**chore:** مهام روتينية أو تغييرات في الإعدادات  
مثال: `chore: update Laravel framework to v11`

**perf:** تحسينات في الأداء  
مثال: `perf: optimize dashboard database query`

**build:** تغييرات تؤثر على نظام البناء أو التبعيات الخارجية  
مثال: `build: configure GitHub Actions deployment`

**ci:** تغييرات في إعدادات التكامل المستمر  
مثال: `ci: update test script in GitHub Actions`

### معايير الكتابة البرمجية

يا صانع الكود المتقن، التزم بهذه المبادئ:

**الوضوح**: اجعل كودك يتحدث عن نفسه

**البساطة**: تجنّب التعقيد ما استطعت إلى ذلك سبيلاً

**الاتساق**: سر على نهج المشروع في التنسيق والتسمية

**التوثيق**: علّق على الأجزاء المعقدة وشارك حكمتك

### الإبلاغ عن الأخطاء

إذا وجدت خللاً أو عيباً، ساهم بالإبلاغ عنه:

**أولاً**: تحقق من عدم وجود بلاغ مماثل

**ثانياً**: افتح قضية جديدة (Issue) بوصف واضح

**ثالثاً**: أرفق خطوات إعادة إنتاج المشكلة

**رابعاً**: أضف لقطات شاشة إن أمكن

### اقتراح الميزات

لك أن تقترح ميزة جديدة:

**افتح قضية**: ابدأ العنوان بـ `[اقتراح]`

**اشرح المشكلة**: وضّح المشكلة التي تحلها هذه الميزة

**صف الحل**: اشرح الحل المقترح بتفصيل

**كن منفتحاً**: تقبّل النقاش البنّاء

### قواعد السلوك

نلتزم جميعاً بخلق بيئة محترمة وترحيبية:

**الاحترام**: احترم آراء الآخرين وإن خالفتها

**التقبّل**: تقبّل النقد البنّاء بصدر رحب

**التركيز**: ركّز على ما ينفع المشروع والمجتمع

**الصبر**: كن صبوراً مع المبتدئين فقد كنت مثلهم

### التواصل معنا

إن احتجت للمساعدة أو المشورة:

**القضايا**: افتح قضية (Issue) في المستودع

**البريد**: راسلنا على [البريد الإلكتروني]

**المجتمع**: انضم إلى قناتنا على [المنصة]

---

نشكر لك اهتمامك ومساهمتك. معاً نبني مستقبلاً أفضل للبرمجيات الحرة.

---

## English Version

### Welcome to Daad Project

We're delighted that you're interested in contributing to this project. We believe that every contribution, no matter how small, enriches our community and advances shared knowledge.

### Before You Begin

Before taking your first steps, we recommend:

**Read the documentation**: Review the `README.md` to understand the project's purpose and goals

**Explore open issues**: Look for issues labeled `good first issue` or `beginner-friendly`

**Join the community**: Participate in discussions and ask questions

###  Contribution Steps

#### 1. Fork the Repository
```bash
# Click the "Fork" button at the top of the page
```

#### 2. Clone Your Fork
```bash
git clone https://github.com/your-username/project-name.git
cd project-name
```

#### 3. Create a New Branch
```bash
git checkout -b feature/your-feature-name
```

#### 4. Write Quality Code
- Follow the project's coding style guide
- Write clear comments to help future contributors
- Add tests for your code whenever possible

#### 5. Commit Your Changes
```bash
git add .
git commit -m "feat: brief and clear description of changes"
git push origin feature/your-feature-name
```

**Important Note**: Follow the Conventional Commits standard for commit messages (see next section)

#### 6. Open a Pull Request
- Go to your fork on GitHub
- Click "New Pull Request"
- Write a descriptive title and comprehensive description of your changes

### Conventional Commits Standard

The **Daad** project follows the **Conventional Commits** standard for commit messages. Each commit message must use one of the following types:

#### Commit Types

**feat:** A new feature  
Example: `feat: add social login support`

**fix:** A bug fix  
Example: `fix: resolve image upload failure`

**docs:** Documentation changes only  
Example: `docs: update README with installation instructions`

**style:** Code style changes (formatting, indentation, no logic impact)  
Example: `style: apply PSR-12 formatting rules`

**refactor:** Code refactoring without adding features or fixing bugs  
Example: `refactor: simplify user validation logic`

**test:** Adding or modifying tests  
Example: `test: add unit tests for Auth module`

**chore:** Routine tasks or configuration changes  
Example: `chore: update Laravel framework to v11`

**perf:** Performance improvements  
Example: `perf: optimize dashboard database query`

**build:** Changes that affect the build system or external dependencies  
Example: `build: configure GitHub Actions deployment`

**ci:** Continuous integration configuration changes  
Example: `ci: update test script in GitHub Actions`

### Coding Standards

Follow these principles for quality contributions:

**Clarity**: Make your code self-explanatory

**Simplicity**: Avoid unnecessary complexity

**Consistency**: Follow the project's formatting and naming conventions

**Documentation**: Comment complex sections and share your insights

### 🐛 Reporting Bugs

If you find a bug or issue, help us by reporting it:

1. Check if a similar report already exists
2. Open a new Issue with a clear description
3. Include steps to reproduce the problem
4. Add screenshots if applicable

### 💡 Suggesting Features

You're welcome to suggest new features:

- Open an Issue with a title starting with `[Feature Request]`
- Explain the problem this feature would solve
- Describe your proposed solution in detail
- Be open to constructive discussion

### 🤝 Code of Conduct

We're committed to creating a respectful and welcoming environment:

- Respect others' opinions even when you disagree
- Accept constructive criticism gracefully
- Focus on what's best for the project and community
- Be patient with beginners—we were all there once

### 📞 Get in Touch

If you need help or guidance:
- Open an Issue in the repository
- Email us at [email address]
- Join our [platform] channel

---

Thank you for your interest and contributions. Together we build a better future for free software! 🌟
