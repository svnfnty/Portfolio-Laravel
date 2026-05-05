# 🚀 Laravel Developer Portfolio

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

A modern, professional portfoli website built with Laravel for showcasing development projects and skills.

## ✨ Features

- ✅ **Full Laravel MVC Architecture**
- ✅ **Responsive Design** (Mobile & Desktop)
- ✅ **Projects Showcase** with filtering
- ✅ **Skills Section** with categories
- ✅ **Contact Form** with email notification
- ✅ **SEO Optimized**
- ✅ **No Build Tools Required** (Simple setup)
- ✅ **Database Ready** (Migrations & Seeders)
- ✅ **Clean, Modern UI**
- ✅ **Fast Performance**

## 📋 Prerequisites

- PHP 8.1+
- Composer
- MySQL 5.7+
- Web Server (Apache/Nginx)

## 🚀 Quick Installation

### 1. Clone & Setup
```bash
# Clone repository
git clone https://github.com/yourusername/laravel-portfolio.git
cd laravel-portfolio

# Install dependencies
composer install

# Setup environment
cp .env.example .env
php artisan key:generate
```

### 2. Database Setup
```bash
# Configure .env file with your database credentials
# DB_DATABASE=portfolio
# DB_USERNAME=root
# DB_PASSWORD=

# Run migrations and seeders
php artisan migrate --seed
```

### 3. Start Server
```bash
# Run development server
php artisan serve

# Visit: http://localhost:8000
```

## 📁 Project Structure
```
laravel-portfolio/
├── app/
│   ├── Http/Controllers/
│   │   ├── PortfolioController.php
│   │   └── ContactController.php
│   ├── Models/
│   │   ├── Project.php
│   │   └── Skill.php
│   └── Mail/
│       └── ContactNotification.php
├── database/
│   ├── migrations/      # Database migrations
│   └── seeders/        # Sample data
├── public/
│   ├── css/app.css     # Custom CSS
│   └── js/app.js       # JavaScript
├── resources/views/    # Blade templates
└── routes/web.php      # Application routes
```

## 🗄️ Database Tables

### Projects Table
- `title` - Project name
- `description` - Short description
- `image_url` - Project image
- `live_url` - Live demo link
- `github_url` - Repository link
- `technologies` - Tech stack used
- `featured` - Featured project flag

### Skills Table
- `name` - Skill name
- `icon` - FontAwesome icon
- `category` - Skill category
- `level` - Proficiency level
- `order` - Display order

## 🎨 Customization

### 1. Update Personal Info
Edit `resources/views/portfolio/index.blade.php`:
- Change name, title, bio
- Update social media links
- Modify contact information

### 2. Add Your Projects
Edit `database/seeders/DatabaseSeeder.php`:
```php
Project::create([
    'title' => 'Your Project',
    'description' => 'Project description here',
    'image_url' => 'path/to/image.jpg',
    'live_url' => 'https://yourproject.com',
    'github_url' => 'https://github.com/yourusername/project',
    'technologies' => ['Laravel', 'Vue.js', 'MySQL'],
    'featured' => true,
]);
```

### 3. Update Skills
```php
Skill::create([
    'name' => 'Your Skill',
    'icon' => 'fab fa-laravel',
    'category' => 'backend',
    'level' => 90,
]);
```

### 4. Change Colors
Edit `public/css/app.css`:
```css
:root {
    --primary: #3b82f6;    /* Main color */
    --secondary: #8b5cf6;  /* Secondary color */
    --dark: #1e293b;       /* Text color */
}
```

## 📧 Contact Form Setup

### 1. Configure Email (.env)
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="Portfolio"
```

### 2. Update Recipient Email
Edit `app/Mail/ContactNotification.php`:
```php
public function build()
{
    return $this->to('your-email@example.com')
                ->subject('New Contact Message');
}
```

## 🔧 Deployment

### Shared Hosting (cPanel)
1. Upload all files to public_html
2. Set public/ as document root
3. Update .env with production database
4. Run: `php artisan migrate --force`

### VPS/Cloud (Ubuntu)
```bash
# Install dependencies
sudo apt install php mysql-server composer

# Set up web server (Apache/Nginx)
# Configure .env file
# Set proper permissions
chmod -R 755 storage bootstrap/cache
```

## 🐛 Troubleshooting

### Common Issues:
1. **Permission Denied**
   ```bash
   chmod -R 755 storage bootstrap/cache
   ```

2. **Class Not Found**
   ```bash
   composer dump-autoload
   ```

3. **Database Connection**
   - Check .env credentials
   - Verify MySQL is running
   - Test connection with `php artisan tinker`

4. **Email Not Sending**
   - Verify SMTP settings in .env
   - Check spam folder
   - Test with mailtrap.io for development

## 📝 License

This project is open-source and available under the MIT License.

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 👨‍💻 Author

**Your Name**
- GitHub: [@svnfnty](https://github.com/svnfnty)
- Portfolio: [svnfnty.vercel.app](https://svnfnty.vercel.app)

## ⭐ Support

If you like this project, give it a ⭐ on GitHub!

---
**Happy Coding!** 🎯
