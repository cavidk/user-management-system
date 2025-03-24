## 👥 İstifadəçi İdarəetmə Sistemi (User Management System)
Bu layihə Laravel 11 və Filament v3 istifadə edilərək hazırlanmış tam funksional İstifadəçi İdarəetmə Sistemidir. Layihə texniki tapşırığa əsasən hazırlanıb.

---

### 📌 Technologies Used

- PHP 8.x
- Laravel 11
- MySQL
- Laravel Sanctum (API authentication)
- Filament Admin Panel v3
- Eloquent ORM
- Postman (for API testing)

---

### 🔐 Features [az]

- İstifadəçilər qeydiyyatdan keçə və daxil ola bilir (API ilə)
- Token əsaslı giriş və sessiya idarəsi
- İstifadəçilər şəxsi məlumatlarını redaktə edə bilir (`PUT /api/user`)
- Admin panel vasitəsilə:
    - Bütün istifadəçilərə baxış
    - CRUD (create, update, delete)
    - Rolların təyini və idarəsi
- Yalnız `admin` roluna malik istifadəçilər panelə daxil ola bilir

---

### 🛠 Installation & Setup

```bash

git clone <your-repository-url>
cd user-management-system
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```
---

###  Create a Filament admin user:
```bash

php artisan make:filament-user
```

- 📍<b> Then visit: 
 http://localhost:8000/admin

---
### 📬 API Endpoints

| Method | Endpoint        | Description                                |
|--------|-----------------|--------------------------------------------|
| POST   | /api/register   | Register a new user                        |
| POST   | /api/login      | Login with email & password (returns token)|
| GET    | /api/user       | Get the authenticated user's data          |
| PUT    | /api/user       | Update user profile                        |
| POST   | /api/logout     | Logout and revoke the token                |

---

### 🧑‍💼 Admin Panel (Filament)

URL: /admin

Use your created admin account to log in.
Only users with the admin role can access the panel.

Admin panel features:
- Full user management
- Role management
- Role assignment via multi-select dropdown
- Clean UI built with Filament

---

### 🔗 Database Relationships
- users ↔ roles — Many-to-Many via role_user pivot table
- Eloquent relationships are used with belongsToMany
---

### ✅ Completed Task Checklist
- User Registration and Login (via API)
- Token-based authentication using Sanctum
- Profile update with validation and clean architecture
- Admin panel with Filament
- Role management and user-role assignment
- Role-based access control to the admin panel
 
---

### 📝 Notes
   ` 🚀 Future enhancements:`
- 📤 `Email notifications`
- 📄 `PDF or Excel export (e.g., user reports)`
- 📊 `Dashboard widgets & statistics`
- 🧪 `Feature & Unit testing with PHPUnit`

---
## 👤 Author

- 🏻`Cavid Kazimzada`
```
   📧 cavidc@253@gmail.com
