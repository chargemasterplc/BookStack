<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Налаштування',
    'settings_save' => 'Зберегти налаштування',
    'settings_save_success' => 'Налаштування збережено',

    // App Settings
    'app_customization' => 'Налаштування',
    'app_features_security' => 'Особливості та безпека',
    'app_name' => 'Назва програми',
    'app_name_desc' => 'Ця назва відображається у заголовку та у всіх листах.',
    'app_name_header' => 'Показати назву програми в заголовку',
    'app_public_access' => 'Публічнй доступ',
    'app_public_access_desc' => 'Увімкнення цієї опції дозволить відвідувачам, які не увійшли в систему, отримати доступ до вмісту у вашому екземплярі BookStack.',
    'app_public_access_desc_guest' => 'Доступ для публічних відвідувачів можна контролювати через користувача "Гість".',
    'app_public_access_toggle' => 'Дозволити публічний доступ',
    'app_public_viewing' => 'Дозволити публічний перегляд?',
    'app_secure_images' => 'Вищі налаштування безпеки для зображень',
    'app_secure_images_toggle' => 'Увімкунти вищі налаштування безпеки для завантаження зображень',
    'app_secure_images_desc' => 'З міркувань продуктивності всі зображення є загальнодоступними. Цей параметр додає випадковий, важко передбачуваний рядок перед URL-адресами зображень. Переконайтеся, що індексація каталогів не активована, щоб запобігти легкому доступу.',
    'app_editor' => 'Редактор сторінок',
    'app_editor_desc' => 'Виберіть, який редактор буде використовуватися всіма користувачами для редагування сторінок.',
    'app_custom_html' => 'Користувацький вміст HTML-заголовку',
    'app_custom_html_desc' => 'Будь-який доданий тут вміст буде вставлено в нижню частину розділу <head> кожної сторінки. Це зручно для перевизначення стилів, або додавання коду аналітики.',
    'app_custom_html_disabled_notice' => 'Custom HTML head content is disabled on this settings page to ensure any breaking changes can be reverted.',
    'app_logo' => 'Логотип програми',
    'app_logo_desc' => 'Це зображення має бути висотою 43px. <br>Великі зображення будуть зменшені.',
    'app_primary_color' => 'Основний колір програми',
    'app_primary_color_desc' => 'Колір потрібно вказати у hex-форматі. <br>Залиште порожнім, щоб використати стандартний колір.',
    'app_homepage' => 'Домашня сторінка програми',
    'app_homepage_desc' => 'Виберіть сторінку, яка відображатиметься на домашній сторінці замість перегляду за умовчанням. Права на сторінку не враховуються для вибраних сторінок.',
    'app_homepage_select' => 'Вибрати сторінку',
    'app_disable_comments' => 'Вимкнути коментарі',
    'app_disable_comments_toggle' => 'Вимкнути коментарі',
    'app_disable_comments_desc' => 'Вимкнути коментарі на всіх сторінках програми. Існуючі коментарі не відображаються.',

    // Registration Settings
    'reg_settings' => 'Реєстрація',
    'reg_enable' => 'Дозволити реєстрацію',
    'reg_enable_toggle' => 'Дозволити реєстрацію',
    'reg_enable_desc' => 'При включенні реєстрації відвідувач зможе зареєструватися як користувач програми. Після реєстрації їм надається єдина роль користувача за замовчуванням.',
    'reg_default_role' => 'Роль користувача за умовчанням після реєстрації',
    'reg_email_confirmation' => 'Підтвердження електронною поштою',
    'reg_email_confirmation_toggle' => 'Необхідне підтвердження електронною поштою',
    'reg_confirm_email_desc' => 'Якщо використовується обмеження домену, то підтвердження електронною поштою буде потрібно, а нижче значення буде проігноровано.',
    'reg_confirm_restrict_domain' => 'Обмежити по домену',
    'reg_confirm_restrict_domain_desc' => 'Введіть список розділених комами доменів електронної пошти, до яких ви хочете обмежити реєстрацію. Користувачам буде надіслано електронне повідомлення для підтвердження своєї адреси, перш ніж дозволяти взаємодіяти з додатком. <br> Зауважте, що користувачі зможуть змінювати свої електронні адреси після успішної реєстрації.',
    'reg_confirm_restrict_domain_placeholder' => 'Не встановлено обмежень',

    // Maintenance settings
    'maint' => 'Обслуговування',
    'maint_image_cleanup' => 'Очищення зображень',
    'maint_image_cleanup_desc' => "Сканує вміст сторінки та версій, щоб перевірити, які зображення та малюнки в даний час використовуються, а також які зображення зайві. Переконайтеся, що ви створили повну резервну копію бази даних та зображення, перш ніж запускати це.",
    'maint_image_cleanup_ignore_revisions' => 'Ігнорувати зображення в версіях',
    'maint_image_cleanup_run' => 'Запустити очищення',
    'maint_image_cleanup_warning' => ':count потенційно невикористаних зображень було знайдено. Ви впевнені, що хочете видалити ці зображення?',
    'maint_image_cleanup_success' => ':count потенційно невикористані зображення знайдено і видалено!',
    'maint_image_cleanup_nothing_found' => 'Не знайдено невикористовуваних зображень, нічого не видалено!',
    'maint_send_test_email' => 'Send a Test Email',
    'maint_send_test_email_desc' => 'This sends a test email to your email address specified in your profile.',
    'maint_send_test_email_run' => 'Send test email',
    'maint_send_test_email_success' => 'Email sent to :address',
    'maint_send_test_email_mail_subject' => 'Test Email',
    'maint_send_test_email_mail_greeting' => 'Email delivery seems to work!',
    'maint_send_test_email_mail_text' => 'Congratulations! As you received this email notification, your email settings seem to be configured properly.',

    // Role Settings
    'roles' => 'Ролі',
    'role_user_roles' => 'Ролі користувача',
    'role_create' => 'Створити нову роль',
    'role_create_success' => 'Роль успішно створена',
    'role_delete' => 'Видалити роль',
    'role_delete_confirm' => 'Це призведе до видалення ролі з назвою \':roleName\'.',
    'role_delete_users_assigned' => 'Цій ролі належать :userCount користувачі(в). Якщо ви хочете перенести користувачів із цієї ролі, виберіть нову роль нижче.',
    'role_delete_no_migration' => "Не мігрувати користувачів",
    'role_delete_sure' => 'Ви впевнені, що хочете видалити цю роль?',
    'role_delete_success' => 'Роль успішно видалена',
    'role_edit' => 'Редагувати роль',
    'role_details' => 'Деталі ролі',
    'role_name' => 'Назва ролі',
    'role_desc' => 'Короткий опис ролі',
    'role_external_auth_id' => 'Зовнішні ID автентифікації',
    'role_system' => 'Системні дозволи',
    'role_manage_users' => 'Керування користувачами',
    'role_manage_roles' => 'Керування правами ролей та ролями',
    'role_manage_entity_permissions' => 'Керування всіма правами на книги, розділи та сторінки',
    'role_manage_own_entity_permissions' => 'Керування дозволами на власну книгу, розділ та сторінки',
    'role_manage_page_templates' => 'Manage page templates',
    'role_manage_settings' => 'Керування налаштуваннями програми',
    'role_asset' => 'Дозволи',
    'role_asset_desc' => 'Ці дозволи контролюють стандартні доступи всередині системи. Права на книги, розділи та сторінки перевизначать ці дозволи.',
    'role_asset_admins' => 'Адміністратори автоматично отримують доступ до всього вмісту, але ці параметри можуть відображати або приховувати параметри інтерфейсу користувача.',
    'role_all' => 'Все',
    'role_own' => 'Власне',
    'role_controlled_by_asset' => 'Контролюється за об\'єктом, до якого вони завантажуються',
    'role_save' => 'Зберегти роль',
    'role_update_success' => 'Роль успішно оновлена',
    'role_users' => 'Користувачі в цій ролі',
    'role_users_none' => 'Наразі жоден користувач не призначений для цієї ролі',

    // Users
    'users' => 'Користувачі',
    'user_profile' => 'Профіль користувача',
    'users_add_new' => 'Додати нового користувача',
    'users_search' => 'Пошук користувачів',
    'users_details' => 'Відомості про користувача',
    'users_details_desc' => 'Встановіть ім\'я та електронну адресу для цього користувача. Адреса електронної пошти буде використана для входу до програми.',
    'users_details_desc_no_email' => 'Встановіть ім\'я для цього користувача, щоб інші могли його розпізнати.',
    'users_role' => 'Ролі користувача',
    'users_role_desc' => 'Виберіть, до яких ролей буде призначено цього користувача. Якщо користувачеві призначено декілька ролей, дозволи з цих ролей будуть складатись і вони отримуватимуть усі можливості призначених ролей.',
    'users_password' => 'Пароль користувача',
    'users_password_desc' => 'Встановіть пароль для входу. Він повинен містити принаймні 5 символів.',
    'users_send_invite_text' => 'You can choose to send this user an invitation email which allows them to set their own password otherwise you can set their password yourself.',
    'users_send_invite_option' => 'Надіслати лист із запрошенням користувачу',
    'users_external_auth_id' => 'Зовнішній ID автентифікації',
    'users_external_auth_id_desc' => 'Цей ID використовується для пошуку збігу цього користувача під час зв\'язку з LDAP.',
    'users_password_warning' => 'Тільки якщо ви хочете змінити свій пароль, заповніть поля нижче:',
    'users_system_public' => 'Цей користувач представляє будь-яких гостьових користувачів, які відвідують ваш екземпляр. Його не можна використовувати для входу, але він призначається автоматично.',
    'users_delete' => 'Видалити користувача',
    'users_delete_named' => 'Видалити користувача :userName',
    'users_delete_warning' => 'Це повне видалення цього користувача з ім\'ям \':userName\' з системи.',
    'users_delete_confirm' => 'Ви впевнені, що хочете видалити цього користувача?',
    'users_delete_success' => 'Користувачі успішно видалені',
    'users_edit' => 'Редагувати користувача',
    'users_edit_profile' => 'Редагувати профіль',
    'users_edit_success' => 'Користувача успішно оновлено',
    'users_avatar' => 'Аватар користувача',
    'users_avatar_desc' => 'Це квадратне зображення має бути приблизно 256px.',
    'users_preferred_language' => 'Бажана мова',
    'users_preferred_language_desc' => 'Цей параметр змінить мову інтерфейсу користувача в програмі. Не вплине на створений користувачем вміст.',
    'users_social_accounts' => 'Соціальні акаунти',
    'users_social_accounts_info' => 'Тут ви можете підключити інші облікові записи для швидшого та легшого входу. Від\'єднання соціального облікового запису тут не дозволяється. Скасуйте доступ із налаштувань вашого профілю в пов\'язаній соціальній мережі.',
    'users_social_connect' => 'Підключити обліковий запис',
    'users_social_disconnect' => 'Від\'єднати обліковий запис',
    'users_social_connected' => 'Обліковий запис :socialAccount успішно додано до вашого профілю.',
    'users_social_disconnected' => 'Обліковий запис :socialAccount був успішно відключений від вашого профілю.',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'nl' => 'Nederlands',
        'pt_BR' => 'Português do Brasil',
        'sk' => 'Slovensky',
        'cs' => 'Česky',
        'sv' => 'Svenska',
        'ko' => '한국어',
        'ja' => '日本語',
        'pl' => 'Polski',
        'it' => 'Italian',
        'ru' => 'Русский',
        'uk' => 'Українська',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
        'hu' => 'Magyar',
        'tr' => 'Türkçe',
    ]
    //!////////////////////////////////
];
